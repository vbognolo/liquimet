<?php
namespace Liquimet\Model;

class Partial{
    protected $db;                                       

    public function __construct(Database $db){
        $this->db = $db;                                 
    }

//  ** [S E L E C T]     S T A T E M E N T S **    
//  ===> GET PARTIAL BY ID    [select single]
    public function get(int $id){
        $sql = "SELECT p.id_partial, p.destination, p.exw, p.date, p.place, p.q_unloaded, p.invoice, p.id_transport,
                    t.seo 
                FROM partials AS p
                JOIN transports AS t
                    ON p.id_transport = t.id_transport
                WHERE p.id_partial = :id_partial;";
        
        return $this->db->runSQL($sql, [$id])->fetch();  
    }
    
//  ===> GET ALL PARTIALS    [select all partials]
    public function getAll(): array{       
        $sql = "SELECT p.id_partial, p.destination, p.exw, p.date, p.place, p.q_unloaded, p.invoice, p.id_transport,
                    t.seo
                FROM partials AS p
                JOIN transports AS t
                    ON p.id_transport = t.id_transport
                ORDER BY t.id_transport DESC;";
                
        return $this->db->runSQL($sql)->fetchAll(); 
    } 

//  ===> GET ALL PARTIALS BY TRANSPORT ID
    public function getAllParts(int $id): array{      
        $sql = "SELECT p.*,
                       t.id_transport AS id_transport,
                FROM partials AS p
                INNER JOIN transports AS t 
                    ON p.id_transport = t.id_transport
                WHERE t.id_transport = :id_transport;";

        return $this->db->runSQL($sql, [$id])->fetchAll(); 
    }

//  ** [U P D A T E] - [D E L E T E]     S T A T E M E N T S **
//  ===> UPDATE PARTIAL BY ID    [update single]
    public function update(array $partial): bool{                                          
        $sql = "UPDATE partials 
                SET destination = :destination, exw = :exw, date = :date, place = :place, 
                    q_unloaded = :q_unloaded, invoice = :invoice, modified = :modified, modified_by = :modified_by
                WHERE id_partial = :id_partial;";
                    
        $this->db->runSQL($sql, $partial);                      
            return true;                                             
    }

//  ===> DELETE PARTIAL BY ID    [delete single - only admin]
    public function delete(int $id): bool{
        $sql = "DELETE FROM partials
                WHERE id_partial = :id_partial;";    
        
        $this->db->runSQL($sql, [$id]);                  
            return true;                                     
    }

//  ** [C O U N T]     S T A T E M E N T S **
//  ===> COUNT ALL PARTIALS      
    public function count(): int{
        $sql = "SELECT COUNT(id_partial) 
                FROM partials;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      
    }
}
