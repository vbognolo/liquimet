<?php
namespace Liquimet\Model;
use Liquimet\Validate\Validate;

class User {
    private $db;                                         // Holds ref to database object

    public function __construct(Database $db){           // Runs when object created using class
        $this->db = $db;                                 // Add ref to database object
    }

/**
 *  Login Authentication: returns user if authenticated, false if not
 */
    public function loginAuth(string $username, string $password): ?array {
        $sql = "SELECT u.id_user, u.username, u.password, u.name, u.id_gender, u.id_title, u.id_role,
                       g.name AS gender, g.abbr AS abbr,
                       t.name AS title,
                       r.name AS role
                FROM `users` AS u
                JOIN `gender` AS g ON u.id_gender = g.id_gender
                JOIN `titles` AS t ON u.id_title = t.id_title
                JOIN `roles` AS r ON u.id_role = r.id_role
                WHERE u.username = :username
                LIMIT 1";  
                                         
        $user = $this->db->runSQL($sql, [
            'username' => $username
        ])->fetch();          
            
            if($user && \password_verify($password, $user['password'])){
                return $user;
            };      
            
        return null;    //return whether password matched
    }

/**
 *  Get user by ID [select single]
 */
    public function get(int $id): array {
        $sql = "SELECT u.id_user, u.username, u.email, u.name, u.surname, u.birthday, 
                    u.city, u.country, u.id_gender, u.id_role, u.id_title, 
                    u.joined, u.modified,
                    g.name AS gender, g.abbr AS abbr,
                    r.name AS role, 
                    t.name AS title, t.acronym AS acronym 
                FROM `users` u
                LEFT JOIN `gender` g ON u.id_gender = g.id_gender
                LEFT JOIN `roles` r ON u.id_role = r.id_role
                LEFT JOIN `titles` t ON u.id_title = t.id_title
                WHERE u.id_user = :id_user
                LIMIT 1";

        $user = $this->db->runSQL($sql, [
            'id_user' => $id
        ])->fetch();
            
        return $user ?: null;
    }

/**
 *  Get all active users
 */
    public function getAll(): array {
        $sql = "SELECT u.id_user, u.username, u.email, u.name, u.surname, u.birthday, u.city, u.country, u.id_gender, u.id_role, u.id_title, u.joined,  
                    g.name AS gender, g.abbr AS abbr,
                    r.name AS role,
                    t.name AS title, t.acronym AS acronym
                FROM `users` AS u
                JOIN `gender` AS g ON u.id_gender = g.id_gender
                JOIN `roles` AS r ON u.id_role = r.id_role
                JOIN `titles` AS t ON u.id_title = t.id_title
                WHERE r.active = :active
                ORDER BY u.surname, u.name";                              
                
        return $this->db->runSQL($sql, [
            'active' => 1
        ])->fetchAll();         
    }

/**
 *  Get user by e-mail [select single]
 */
    public function getUserByEmail(string $email): ?array {
        $sql = "SELECT id_user, username 
                FROM `users`
                WHERE email = :email
                LIMIT 1";

        $user = $this->db->runSQL($sql, [
            'email' => $email
        ])->fetch();

        return $user ?: null;
    }

/**
 *  Check if username or email exist (for registration or login purposes)
 */
    public function checkIfExists(string $field, string $value, ?int $id = null): bool {
        $allowed = ['email', 'username'];

            if (!in_array($field, $allowed)) return false;

        $sql = "SELECT 1 FROM `users` WHERE {$field} = :value";
        $params = ['value' => $value];

            if ($id !== null) {
                $sql .= " AND id_user != :id_user";
                $params['id_user'] = $id;
            }

        $sql .= " LIMIT 1";

        return (bool) $this->db->runSQL($sql, $params)->fetchColumn();
    }
        /* Works with create()
        $sql = "SELECT 1 FROM `users` WHERE ";
        $params = [];

        if ($email !== null) {
            $sql .= "email = :email";
            $params['email'] = $email;
        }

        if ($username !== null) {
            $sql .= ($email !== null) ? " OR username = :username" : "username = :username";
            $params['username'] = $username;
        }

        if ($id !== null) {
            //$sql = "SELECT 1 FROM ($sql) AS subquery WHERE id_user != :id_user";
            $sql .= " AND id_user != :id_user";
            $params['id_user'] = $id;
        }

        $sql .= " LIMIT 1";

        return (bool) $this->db->runSQL($sql, $params)->fetchColumn();
    }*/

/**
 *  Create new user [admin]
 */
    public function create(array $data): bool {   
        if (self::checkIfExists($data['email'], $data['username'])) {       //  Check if the email or username already exists
            return false;           // User already exists
        }  

        $sql = "INSERT INTO `users` 
                    (username, password, email, name, surname, birthday, city, country, 
                    id_gender, id_role, id_title, joined) 
                VALUES 
                    (:username, :password, :email, :name, :surname, :bday, :city, :country, 
                    :id_gender, :id_role, :id_title, :joined)";

        $args = [
            'username' => $data['username'],        
            'email' => $data['email'],  
            'password' => password_hash($data['password'], PASSWORD_DEFAULT),           
            'name' => $data['name'],
            'surname' => $data['surname'],
            'bday' => $data['bday'], 
            'city' => $data['city'],
            'country' => $data['country'],
            'id_gender' => $data['id_gender'],
            'id_role' => $data['id_role'],
            'id_title' => $data['id_title'],
            'joined' => $data['joined']
        ];        
                
        return (bool) $this->db->runSQL($sql, $args);
    }
 
/**
 *  Validate data for inserting or editting 
 */
    public function validateData(array $member): array {
        $errors = [];

        // Required fields check
        foreach (['username', 'email', 'name', 'surname', 'bday', 'city', 'country'] as $field) {
            if (empty($member[$field])) {
                $errors[$field] = "Campo obbligatorio.";
            }
        }

            if (!empty($member['email']) && !Validate::validate_email($member['email'])) {
                $errors['email'] = "Indirizzo e-mail invalido.";
            }

            if (!empty($member['username']) && !Validate::validate_username($member['username'])) {
                $errors['username'] = 'Username deve avere almeno 1 lettera. Sono permesse lettere e numeri. (4-20 caratteri)';
            }

            if (!empty($member['name']) && !Validate::validate_string($member['name'], 3, 50)) {
                $errors['name'] = 'Il nome può contenere solo lettere e spazi (3-50 caratteri).';
            }

            if (!empty($member['surname']) && !Validate::validate_string($member['surname'], 3, 50)) {
                $errors['surname'] = 'Il cognome può contenere solo lettere e spazi (3-50 caratteri).';
            }

            if (!empty($member['city']) && !Validate::validate_string($member['city'], 3, 50)) {
                $errors['city'] = 'La città può contenere solo lettere e spazi (3-50 caratteri).';
            }

            if (!empty($member['country']) && !Validate::validate_string($member['country'], 3, 50)) {
                $errors['country'] = 'Lo stato può contenere solo lettere e spazi (3-50 caratteri).';
            }

            if (!empty($member['bday']) && !Validate::validate_age($member['bday'], 18)) {
                $errors['bday'] = 'Inserire una data valida (18+). Non sono permesse date future.';
            } 

            return $errors;
    }

/**
 *  Update existing user [admin]
 */ 
    public function update(int $id, array $data): bool {  
        $sql = "UPDATE `users` u
                LEFT JOIN `users` existing
                    ON (existing.username = :check_username OR existing.email = :check_email)
                    AND existing.id_user != :existing_id_user
                SET u.username = :new_username, 
                    u.email = :new_email, 
                    u.name = :name, 
                    u.surname = :surname, 
                    u.birthday = :bday, 
                    u.city = :city, 
                    u.country = :country, 
                    u.id_gender = :id_gender, 
                    u.id_role = :id_role, 
                    u.id_title = :id_title,
                    u.modified = :modified 
                WHERE u.id_user = :id_user
                AND existing.id_user IS NULL";   

        $args = [
            'id_user' => $id,
            'existing_id_user' => $id,
            'check_username' => $data['check_username'],    // Used in JOIN
            'check_email' => $data['check_email'],          // Used in JOIN
            'new_username' => $data['new_username'],        // Used in UPDATE
            'new_email' => $data['new_email'],              // Used in UPDATE
            'name' => $data['name'],
            'surname' => $data['surname'],
            'bday' => $data['bday'], 
            'city' => $data['city'],
            'country' => $data['country'],
            'id_gender' => $data['id_gender'],
            'id_role' => $data['id_role'],
            'id_title' => $data['id_title'],
            'modified' => $data['modified']
        ];        

        $update = $this->db->runSQL($sql, $args);   
            return $update->rowCount() > 0 ? true : false;                                          
    }

/**
 *  Get all roles for active users
 */ 
    public function getRoles(): array {
        $sql = "SELECT id_role, name
                FROM `roles` 
                WHERE active = :active";                              
                
        return $this->db->runSQL($sql, [
            'active' => 1
        ])->fetchAll();     
    }

/**
 *  Get all genders
 */ 
    public function getGender(): array {
        $sql = "SELECT id_gender, name, abbr 
                FROM `gender`";
        
        return $this->db->runSQL($sql)->fetchAll();         
    }
    
/**
 *  Update user profile
 */ 
    public function updateProfile(array $data): bool {     
        $sql = "UPDATE `users`
                SET username = :username, 
                    email = :email, 
                    name = :name, 
                    surname = :surname, 
                    birthday = :bday, 
                    city = :city, 
                    country = :country, 
                    modified = :modified 
                WHERE id_user = :id_user";   

        $args = [
            'id_user' => $data['id_user'],
            'username' => $data['username'],        
            'email' => $data['email'],              
            'name' => $data['name'],
            'surname' => $data['surname'],
            'bday' => $data['bday'], 
            'city' => $data['city'],
            'country' => $data['country'],
            'modified' => $data['modified']
        ];        

        $update = $this->db->runSQL($sql, $args);   
            return $update->rowCount() > 0 ? true : false;                                     
    }

/**
 *  Validate password 
 */ 
    public function validatePassword(string $newPass, string $confirm): array {
        $errors = [];

        if(empty($newPass)) {
            $errors['newPass'] = "Campo obbligatorio";
        } 

        if(empty($confirm)) {
            $errors['confirmPass'] = "Campo obbligatorio";
        }

        if (!empty($newPass) && Validate::validate_password($newPass)) {
            $errors['newPass'] = 'La password deve contenere almeno 1 lettera maiuscola, 1 minuscola e 1 numero o carattere speciale'; 
        } elseif (!empty($newPass) && !Validate::chars_length($newPass, 8)) {
            $errors['newPass'] = 'La password deve contenere almeno 8 caratteri';
        }

        if (!empty($confirm) && $newPass !== $confirm) {
            $errors['confirmPass'] = 'La nuova password e la conferma non coincidono';
        }

        return $errors;
    }

/**
 *  Check if password matches input password
 */ 
    public function checkPassword(int $id, string $password): bool {
        $sql = "SELECT password 
                FROM `users` 
                WHERE id_user = :id_user
                LIMIT 1";

        $pass = $this->db->runSQL($sql, ['id_user' => $id])->fetchColumn();
            return password_verify($password, $pass);
    }
    
/**
 *  Password update
 */ 
    public function updatePassword(int $id, string $pass): bool {
        $hash = password_hash($pass, PASSWORD_DEFAULT);                          //hash the password
        
        $sql = "UPDATE `users`
                SET password = :password 
                WHERE id_user = :id_user";         
                
        $stmt = $this->db->runSQL($sql, [
            'id_user' => $id,
            'password' => $hash
        ]);
        
        return $stmt ? true : false;                                                               
    }

/**
 *  Password reset token
 */
    public function storePasswordResetToken(int $id, string $token): bool {
        $sql = "UPDATE `users`
                SET reset_token = :token,
                    reset_expires = NOW() + INTERVAL 1 HOUR
                WHERE id_user = :id_user
                LIMIT 1";
    
        $stmt = $this->db->runSQL($sql, [
            'token'   => $token,
            'id_user' => $id
        ]);
    
        return $stmt->rowCount() > 0;
    }

/**
 *  Get user by password reset token
 */
    public function getUserByResetToken(string $token): ?array {
        $sql = "SELECT id_user
                FROM `users`
                WHERE reset_token = :token
                  AND reset_expires > NOW()
                LIMIT 1";
    
        $stmt = $this->db->runSQL($sql, [
            'token' => $token
        ])->fetch();

        return $stmt ?: null;
    }

/**
 *  Clear token after successful reset
 */
    public function clearResetToken(int $id): bool {
        $sql = "UPDATE `users`
                SET reset_token = NULL,
                    reset_expires = NULL
                WHERE id_user = :id_user
                LIMIT 1";

        $stmt = $this->db->runSQL($sql, [
            'id_user' => $id
        ]);

        return $stmt->rowCount() > 0;
    }
    

    public function getUserDelete(int $id): array {
        $sql = "SELECT id_user, name, surname FROM `users` WHERE id_user = :id_user";

        return $this->db->runSQL($sql, ['id_user' => $id])->fetch();  
    }
//  ===> DELETE USER [ADMIN] 
    public function moveUserToDeleted(int $id) {
        try {
            $this->db->beginTransaction();

            // 1. Insert with join to get title name
            $sql = "INSERT INTO deleted_users (id, username, email, name, surname, birthday, title_label, deleted_at)
                    SELECT u.id_user, u.username, u.email, u.name, u.surname, u.birthday, t.name, NOW()
                    FROM `users` u
                    LEFT JOIN `titles` t ON u.id_title = t.id_title
                    WHERE u.id_user = :id_user";
    
            $this->db->runSQL($sql, ['id_user' => $id]);
    
            // 2. Delete user from users
            $delete = "DELETE FROM `users` WHERE id_user = :id_user";

            $this->db->runSQL($delete, ['id_user' => $id]);
    
            $this->db->commit();
                return true;
        } catch (\PDOException $e) {
            $this->db->rollBack();
            error_log($e->getMessage());
                return false;
        }/*
        $role = 4;
        $sql = "UPDATE `users` 
                SET id_role = $role
                WHERE id_user = :id_user;";                                           
        
        $this->db->runSQL($sql, [$role => 4, 'id_user' => $id]);        
            return true;            */                                            
    }

//  ** [C O U N T]     S T A T E M E N T S **
//  Count all active users [admin only] 
    public function totalUsers(): int {
        $sql = "SELECT COUNT(u.id_user), r.active
                FROM `users` AS u
                JOIN `roles` AS r ON u.id_role = r.id_role
                WHERE r.active = :active";  
             
        return (int) $this->db->runSQL($sql, ['active' => 1])->fetchColumn();            
    }

//  Count all users by role [admin only]  
    public function totalUsersRole(int $id): int {
        $sql = "SELECT COUNT(*) 
                FROM `users` 
                WHERE id_role = :id_role";  
            
        return (int) $this->db->runSQL($sql, ['id_role' => $id])->fetchColumn();            
    }

//  Retrieve the last inserted ID
    public function getLastInsertId() {
        return $this->db->lastInsertId(); 
    }
}