<?php
namespace Liquimet\Model;

class Transport{
    protected $db;                                       

    public function __construct(Database $db){
        $this->db = $db;                                 
    }

//          --> ! GET TRANSPORT BY ID ! <--
    public function get(int $id){
        $sql = "SELECT t.*, 
                       c.name AS category, 
                       c.seo AS category_seo,
                       u.username AS user
                FROM transports AS t
                JOIN categories AS c ON t.id_category = c.id_category
                JOIN users AS u ON t.id_user = u.id_user 
                WHERE t.id_transport = :id;"; 
        
        return $this->db->runSQL($sql, [$id])->fetch();  
    }
    
//          --> ! GET ALL TRANSPORTS ! <--
    public function getAll($user = null, $limit = 1000): array{   
        $args['user'] = $args['user1'] = $user;                                         // id user
        $args['limit'] = $limit;                                                        // max transports to return

        $sql = "SELECT t.*, 
                       c.*,
                       c.name AS category, 
                       c.seo AS category_seo,
                       u.*,
                       u.username AS user
                FROM transports AS t
                JOIN categories AS c ON t.id_category = c.id_category
                JOIN users AS u ON t.id_user = u.id_user 
                WHERE (t.id_user = :user OR :user1 IS NULL)
                ORDER BY t.id_transport ASC
                LIMIT :limit;";
        
        return $this->db->runSQL($sql, $args)->fetchAll(); 
    }

//          --> ! GET ALL FULL TRANSPORTS ! <--
    public function getFull(): array{
        $sql = "SELECT t.*, 
                       c.name AS category, 
                       c.seo AS category_seo,
                       u.username AS user
                FROM transports AS t
                JOIN categories AS c ON t.id_category = c.id_category
                JOIN users AS u ON t.id_user = u.id_user 
                WHERE t.type = 0;"; 
        
        return $this->db->runSQL($sql)->fetchAll();  
    }    

//          --> ! GET ALL PARTIAL TRANSPORTS ! <--
    public function getPart(): array{
        $sql = "SELECT t.*, 
                       c.name AS category, 
                       c.seo AS category_seo,
                       u.username AS user
                FROM transports AS t
                JOIN categories AS c ON t.id_category = c.id_category
                JOIN users AS u ON t.id_user = u.id_user 
                WHERE t.type = 1;"; 
        
        return $this->db->runSQL($sql)->fetchAll();  
    }  
    
//          --> ! GET LAST 5 INSERTED TRANSPORTS ! <--
    public function getRecent(){
        $sql = "SELECT t.*,
                       u.username
                FROM transports AS t
                JOIN users AS u
                ON t.id_user = u.id_user
                ORDER BY id_transport DESC
                LIMIT 5;"; 
        
        return $this->db->runSQL($sql)->fetchAll();  
    }

//          --> ! GET TRANSPORTS BY USER ID ! <--
    public function getTransByUser(int $id): array{    
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.date_load, t.date_unload, t.container, t.note, t.created, t.id_user, 
                       u.username AS user
                FROM transports AS t
                JOIN users AS u
                ON t.id_user = u.id
                WHERE t.id_user = :id;";

        return $this->db->runSQL($sql, [$id])->fetch(); 
    }
    
//          --> ! CREATE TRANSPORT ! <--
    public function create(array $transport): bool{
        try{                                                            
            $sql = "INSERT INTO transports 
                        (type, slot, cmr, issuer, supplier, transport, date_load, date_unload, 
                        container, note, id_user, id_category, seo, created, modified, modified_by)
                    VALUES 
                        (:type, :slot, :cmr, :issuer, :supplier, :transport, :date_load, :date_unload, 
                        :container, :note, :id_user, :id_category, :seo, :created, :modified, :modified_by);";
    
            $this->db->runSQL($sql, $transport);                        
                return true;                                 
        } catch(\Exception $e){                                                                     // if exception was raised
            if(($e instanceof \PDOException) and ($e->errorInfo[1] === 1062)){                      // if error is integrity constraint
                return false;                            
            } else{                                                                                 // for all other reasons
                throw $e;                                                                           // re-throw exception
            }
        }
    }
    
//          --> ! UPDATE TRANSPORT ! <--   
    public function update(array $transport): bool{
        try{                                            // Try to update category
            $sql = "UPDATE transports
                    SET type = :type, slot = :slot, cmr = :cmr, issuer = :issuer, supplier = :supplier, transport = :transport, 
                        date_load = :date_load, date_unload = :date_unload, container = :container, note = :note
                    WHERE id_transport = :id_transport;";                   // SQL to update category
            
            $this->db->runSQL($sql, $transport);          // Update category
            return true;                                 // It worked, return true
        } catch(\PDOException $e){                     // If exception thrown
                if($e->errorInfo[1] === 1062){             // If duplicate entry
                    return false;                            // Return false to indicate duplicate name
                } else{                                     // If any other exception
                    throw $e;                                // Re-throw exception
                }
            }
        }

//          --> ! DELETE TRANSPORT ! <--
    public function delete(int $id): bool{
        $sql = "DELETE FROM transports 
                WHERE id_transport = :id;";    
        
        $this->db->runSQL($sql, [$id]);                  
        return true;                                     
    }
    
    
//          --> ! COUNT ALL TRANSPORTS ! <--
    public function count(): int{
        $sql = "SELECT COUNT(id_transport) 
                FROM transports;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }

//          --> ! COUNT ALL FULL TRANSPORTS ! <--
    public function countFull(): int{
        $sql = "SELECT COUNT(id_transport) 
                FROM transports
                WHERE type = 0;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }
    
//          --> ! COUNT ALL PARTIAL TRANSPORTS ! <--
    public function countPart(): int{
        $sql = "SELECT COUNT(id_transport) 
                FROM transports
                WHERE type = 1;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }
}