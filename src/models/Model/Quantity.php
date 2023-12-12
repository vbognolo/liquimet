<?php
namespace Liquimet\Model;

class Quantity{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;                                 
    }
    
//          --> ! GET QUANTITY BY TRANSPORT ID ! <--
    public function get(int $id){    
        $sql = "SELECT q.*,
                       c.name AS category, 
                       c.seo AS category_seo,
                       u.username AS user,
                       t.id_transport AS id_transport  
                FROM quantities AS q
                JOIN categories AS c ON q.id_category = c.id_category
                JOIN users AS u ON q.id_user = u.id_user
                JOIN transports AS t ON q.id_transport = t.id_transport
                WHERE t.id_transport = :id;";
                
        return $this->db->runSQL($sql, [$id])->fetch();  
    }
    
//          --> ! GET ALL QUANTITIES ! <--
    public function getAll(): array{    
        $sql = "SELECT q.*,
                       c.name AS category, 
                       c.seo AS category_seo,
                       u.username AS user,
                       t.id_transport  
                FROM quantities AS q
                JOIN categories AS c ON q.id_category = c.id_category
                JOIN users AS u ON q.id_user = u.id_user
                JOIN transports AS t ON q.id_transport = t.id_transport;";

        return $this->db->runSQL($sql)->fetchAll(); 
    }
    
//          --> ! GET ALL FULL QUANTITIES ! <--
    public function getFull(): array{    
        $sql = "SELECT q.*,
                       c.name AS category, 
                       c.seo AS category_seo,
                       u.username AS user,
                       t.id_transport  
                FROM quantities AS q
                JOIN categories AS c ON q.id_category = c.id_category
                JOIN users AS u ON q.id_user = u.id_user
                JOIN transports AS t ON q.id_transport = t.id_transport
                WHERE t.type = 0;";

        return $this->db->runSQL($sql)->fetchAll(); 
    }
    
//          --> ! GET ALL PARTIAL QUANTITIES ! <--
    public function getPart(): array{    
        $sql = "SELECT q.*,
                       c.name AS category, 
                       c.seo AS category_seo,
                       u.username AS user,
                       t.id_transport  
                FROM quantities AS q
                JOIN categories AS c ON q.id_category = c.id_category
                JOIN users AS u ON q.id_user = u.id_user
                JOIN transports AS t ON q.id_transport = t.id_transport
                WHERE t.type = 1;";

        return $this->db->runSQL($sql)->fetchAll(); 
    }
    
//          --> ! SUM ALL QUANTITIES ! <--
    public function sum(): int{    
        $sql = "SELECT SUM(kg_unload)  
                FROM quantities;";

        return $this->db->runSQL($sql)->fetchColumn(); 
    }
    
//          --> ! CREATE QUANTITIES ! <--
    public function create(array $quantity): bool{
        try{                                                           
            $sql = "INSERT INTO quantities 
                        (kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, gas_weight, 
                        pcs_ghv, id_transport, id_user, id_category, created, modified, modified_by)
                    VALUES 
                        (:kg_load, :cooling, :price_typology, :price_value, :kg_unload, :liquid_density, :gas_weight, 
                        :pcs_ghv, :id_transport, :id_user, :id_category, :created, :modified, :modified_by);";
    
            $this->db->runSQL($sql, $quantity);                         
                return true;                                 
        } catch(\Exception $e){                                          
            if(($e instanceof \PDOException) and ($e->errorInfo[1] === 1062)){                   
                return false;                            
            } else{                                                                            
                throw $e;                                                                      
            }
        }
    }
    
//          --> ! COUNT ALL QUANTITIES ! <--
    public function count(): int{
        $sql = "SELECT COUNT(id_quantity) 
                FROM quantities;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }
}