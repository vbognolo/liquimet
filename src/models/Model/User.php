<?php
namespace Liquimet\Model;

class User{
    protected $db;                                       //holds ref to database object

    public function __construct(Database $db){
        $this->db = $db;                                 //add ref to database object
    }

//  ===> GET USER BY ID
    public function get(int $id){
        $sql = "SELECT u.*,
                       CONCAT(u.name, ' ', u.surname) AS member, 
                       r.name AS role
                FROM `users` AS u
                JOIN `roles` AS r
                    ON u.id_role = r.id_role
                JOIN `titles` AS t
                    ON u.id_title = t.id_title
                WHERE u.id_user = :id_user;";                  
        
        return $this->db->runSQL($sql, [$id])->fetch();  
    }

//  ===> GET ALL USERS
    public function getAll(): array{
        $sql = "SELECT u.*,
                       CONCAT(u.name, ' ', u.surname) AS member, 
                       r.name AS role,
                       t.name AS title 
                FROM `users` AS u
                JOIN `roles` AS r
                    ON u.id_role = r.id_role
                JOIN `titles` AS t
                    ON u.id_title = t.id_title;";                               
                
        return $this->db->runSQL($sql)->fetchAll();         
    }
    
//  ===> GET ALL COMPANY TITLES FOR USERS
    public function getTitles(): array{
        $sql = "SELECT * 
                FROM `titles`;";
        
        return $this->db->runSQL($sql)->fetchAll();         
    }
    
//  ===> LOGIN: RETURNS USER IF AUTHENTICATED, FALSE IF NOT
    public function login(string $username, string $password){
        $sql = "SELECT u.*,
                       CONCAT(u.name, ' ', u.surname) AS member, 
                       r.name AS role,
                       t.name AS title 
                FROM `users` AS u
                JOIN `roles` AS r
                    ON u.id_role = r.id_role
                JOIN `titles` AS t
                    ON u.id_title = t.id_title
                WHERE u.username = :username;";   
                                         
        return $this->db->runSQL($sql, [$username])->fetch();          
                /*if(!$user){                                             // if no user found
                    return false;                 
                }       
                                               
        $auth = password_verify($password, $user['password']);      // verify if password match
            return ($auth ? $user : false);                             // return whether password matched*/
    }

//  ===> CREATE NEW USER [ADMIN]
    public function create(array $member): bool{
        $member['password'] = password_hash($member['password'], PASSWORD_DEFAULT);
            try{
                $sql = "INSERT into `users` 
                            (username, password, email, name, surname, gender, id_role, id_title)
                        VALUES 
                            (:username, :password, :email, :name, :surname, :gender, :id_role, :id_title);";
                
                $this->db->runSQL($sql, $member);
                    return true;
            } catch(\PDOException $e){
                if($e->errorInfo[1] === 1062){
                    return false;
                }
                
                throw $e;
            }
    }

//  ===> COUNT ALL USERS [ADMIN] 
    public function count(): int{
        $sql = "SELECT COUNT(`id_user`) 
                FROM `users`;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }
    
//  ===> COUNT ALL ADMINS [ADMIN]
    public function countAdmin(): int{
        $sql = "SELECT COUNT(*) 
                FROM `users`
                WHERE id_role = 1;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }
    
//  ===> COUNT ALL MEMBERS [ADMIN]
    public function countMember(): int{
        $sql = "SELECT COUNT(*) 
                FROM `users`
                WHERE id_role = 2;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }
    
//  ===> COUNT ALL SUSPENDED [ADMIN]
    public function countSuspended(): int{
        $sql = "SELECT COUNT(*) 
                FROM `users`
                WHERE id_role = 3;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }
}