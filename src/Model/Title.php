<?php
namespace Liquimet\Model;

class Title {
    protected $db;                                        //holds ref to database object

    public function __construct(Database $db) {           //runs when object created using class
        $this->db = $db;                                  //add ref to database object
    }

//  ===> GET TITLE BY ID
    public function get(int $id): array {
        $sql = "SELECT id_title, name, title, acronym
                FROM `titles`
                WHERE id_title = :id_title
                LIMIT 1";                   
        
        $title = $this->db->runSQL($sql, ['id_title' => $id])->fetch();
            return $title ?: [];
    }

//  ===> GET ALL TITLES
    public function getAll(): array {
        $sql = "SELECT id_title, name, title, acronym 
                FROM `titles`
                ORDER BY id_title";

        return $this->db->runSQL($sql)->fetchAll();         
    }

//  ===> CREATE TITLE [ADMIN]
    public function create(array $data): bool {
        $sql = "INSERT INTO `titles`
                    (name, title, acronym)
                VALUES 
                    (:name, :title, :acronym);";
                
        $this->db->runSQL($sql, $data);
            return true;
    }
    
//  ===> UPDATE EXISTING TITLE [ADMIN]
    public function update(int $id, array $data): bool {                                            
        $sql = "UPDATE `titles`
                SET name = :name, title = :title, acronym = :acronym
                WHERE id_title = :id_title
                AND (name != :name OR title != :title OR acronym != :acronym)";  
        $data['id_title'] = $id;

        return $this->db->runSQL($sql, $data);                        
            //return true;                                             
    }

//  ===> DELETE TITLE [ADMIN] 
    public function delete(int $id): bool {
        $sql = "DELETE FROM titles
                WHERE id_title = :id_title";                                           
        
        return $this->db->runSQL($sql, ['id_title' => $id]);        
            //return true;                                                        
    }

//  ===> COUNT ALL TITLES [ADMIN] 
    public function totalTitles(): int {
        $sql = "SELECT COUNT(id_title) 
                FROM `titles`";    
             
        return (int) $this->db->runSQL($sql)->fetchColumn();                      
    }

//  Check if name exists [select single]
    public function titleExistsByName(string $name){     
        $sql = "SELECT 1
                FROM `titles`
                WHERE name = :name
                LIMIT 1";
        
        return $this->db->runSQL($sql, ['name' => $name])->fetchColumn();  
    }

//  Check if title exists [select single]
    public function titleExistsByTitle(string $title){     
        $sql = "SELECT 1
                FROM `titles`
                WHERE title = :title
                LIMIT 1";
    
        return $this->db->runSQL($sql, ['title' => $title])->fetchColumn();  
    }

//  Check if acronym exists [select single]
    public function titleExistsByAcr(string $acronym){     
        $sql = "SELECT 1
                FROM `titles`
                WHERE acronym = :acronym
                LIMIT 1";

        return $this->db->runSQL($sql, ['acronym' => $acronym])->fetchColumn();  
    }
}
