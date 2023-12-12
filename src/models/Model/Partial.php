<?php
namespace Liquimet\Model;

class Partial{
    protected $db;                                       

    public function __construct(Database $db){
        $this->db = $db;                                 
    }

//          --> ! GET PARTIAL BY ID ! <--
    public function get(int $id){
        $sql = "SELECT p.*,
                       c.name AS category, 
                       c.seo AS seo,
                       t.id_transport,
                       u.username AS user
                FROM partials AS p
                JOIN categories AS c ON p.id_category = c.id_category
                JOIN transports AS t ON p.id_transport = t.id_transport
                JOIN users AS u ON p.id_user = u.id_user
                WHERE p.id_partial = :id;";
        
        return $this->db->runSQL($sql, [$id])->fetch();  
    }
    
//          --> ! GET ALL PARTIALS ! <--
    public function getAll($category = null, $transport = null, $user = null): array{    
        $args['category'] = $args['category1'] = $category;                     // category id
        $args['transport'] = $args['transport1'] = $transport;                  // transport id
        $args['user'] = $args['user1'] = $user;                                 // user id    
        
        $sql = "SELECT p.*,
                       c.name AS category, 
                       c.seo AS category_seo,
                       t.id_transport,
                       u.username AS user
                FROM partials AS p
                JOIN categories AS c ON p.id_category = c.id_category
                JOIN transports AS t ON p.id_transport = t.id_transport
                JOIN users AS u ON p.id_user = u.id_user
                WHERE (p.id_category = :category OR :category1 IS NULL)
                AND (p.id_transport = :transport OR :transport1 IS NULL)
                AND (p.id_user = :user OR :user1 IS NULL)";

        return $this->db->runSQL($sql, $args)->fetchAll(); 
    }
    
//          --> ! CREATE PARTIAL ! <--
    public function create(array $partial): bool{ 
        try{                                                            
            $sql = "INSERT INTO partials 
                        (destination, exw, date, place, q_unloaded, invoice, id_transport, 
                        id_user, id_category, created, modified, modified_by)
                    VALUES 
                        (:destination, :exw, :date, :place, :q_unloaded, :invoice, :id_transport, 
                        :id_user, :id_category, :created, :modified, :modified_by);";
    
            $this->db->runSQL($sql, $partial);                        
                return true;                                 
        } catch(\Exception $e){                                                                     // if exception was raised
            if(($e instanceof \PDOException) and ($e->errorInfo[1] === 1062)){                      // if error is integrity constraint
                return false;                            
            } else{                                                                                 // for all other reasons
                throw $e;                                                                           // re-throw exception
            }
        }                                                                                             
    }
    
//          --> ! UPDATE PARTIAL ! <--    


//          --> ! DELETE PARTIAL ! <--
    public function delete(int $id): bool{
        $sql = "DELETE FROM partials WHERE id_partial = :id;";    
        
        $this->db->runSQL($sql, [$id]);                  
            return true;                                     
    }
    
    
//          --> ! COUNT ALL PARTIALS (ADMIN) ! <--
    public function count(): int{
        $sql = "SELECT COUNT(id_partial) 
                FROM partials;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      
    }
}