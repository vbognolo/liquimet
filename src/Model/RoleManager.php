<?php
namespace Liquimet\Model;
use PDO;

class RoleManager {
    protected $db;

    public function __construct(Database $db){
        $this->db = $db;
    }

    //create role
    public function createRole(string $name): bool {
        $sql = "INSERT INTO roles (name) VALUES (:name)";
            return $this->db->runSQL($sql, ['name' => $name]);
    }

    //assign role to user
    public function assignRole(int $userId, int $roleId): bool {
        $sql = "UPDATE users 
                SET id_role = :roleId
                WHERE id_user = :userId";
            
        return $this->db->runSQL($sql, ['id_user' => $userId, 'id_role' => $roleId]);
    }

    //get role by user
    public function getUserRole(int $userId) {
        $sql = "SELECT r.name 
                FROM roles r 
                JOIN users u ON r.id_role = u.id_role 
                WHERE u.id_user = :userId";
            
        return $this->db->runSQL($sql, ['userId' => $userId])->fetchColumn();
    }

    //get role by ID
    public function getRole(int $id_role): array {
        $sql = "SELECT * FROM roles WHERE id_role = :id_role";
            return $this->db->runSQL($sql, ['id_role' => $id_role])->fetch();
    }

    //get all roles
    public function getAllRoles(): array {
        $sql = "SELECT * FROM roles";
            return $this->db->runSQL($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    //check if role has permission for an action
    public function hasPermission(int $userId, string $permission): bool {
        $sql = "SELECT 1 FROM users u 
                JOIN role_permissions rp ON u.id_role = rp.id_role 
                JOIN permissions p ON rp.id_permission = p.id_permission
                WHERE u.id_user = :userId AND p.name = :permission 
                LIMIT 1";
            
        return (bool) $this->db->runSQL($sql, ['userId' => $userId, 'permission' => $permission])->fetchColumn();
    }

    //get permissions for a role
    public function getRolePermissions(int $id_role): array {
        $sql = "SELECT action FROM permissions WHERE id_role = :id_role AND allowed = 1";
            return $this->db->runSQL($sql, ['id_role' => $id_role])->fetchAll(PDO::FETCH_COLUMN);
    }
}
