<?php
namespace Liquimet\Model;

class Category{
    protected $db;                                       

    public function __construct(Database $db){
        $this->db = $db;                                 
    }

//  ===> GET CATEGORY BY ID WITH GROUP NAME
    public function get(int $id){
        $sql = "SELECT c.id_category, c.name AS category, c.description, c.navigation, c.id_group, c.seo, 
                       g.name AS name,
                       g.seo AS seo_group
                FROM categories AS c
                JOIN groups AS g
                ON c.id_group = g.id_group
                WHERE c.navigation = 1
                AND c.id_category = :id;";
                                   
        return $this->db->runSQL($sql, [$id])->fetch();  
    }

//  ===> GET ALL CATEGORIES WITH GROUP NAME
    public function getAll(): array{
        $sql = "SELECT c.id_category, c.description, c.navigation, c.id_group, c.seo,
                    c.name AS category, 
                    g.name AS name,
                    g.seo AS seo_group,
                    g.title AS title
                FROM categories AS c
                JOIN groups AS g
                ON c.id_group = g.id_group;";                       
                
        return $this->db->runSQL($sql)->fetchAll();      
    }   

//  ===> GET ALL GROUPS OF CATEGORIES FOR NAVIGATION (DISTINCT)
    public function getGroups(): array{
        $sql = "SELECT DISTINCT g.id_group,
                                g.name AS name,
                                g.seo AS seo,
                                g.menu AS menu,
                                g.title AS title,
                                c.id_group
                FROM categories AS c
                JOIN groups AS g 
                ON c.id_group = g.id_group
                WHERE g.id_group = 1;";  
                
        return $this->db->runSQL($sql)->fetchAll();      
    }

//  ===> GET ALL GROUPS OF CATEGORIES FOR NAVIGATION [ADMIN]
    public function getAdminGroups(): array{
        $sql = "SELECT * FROM groups;";  
                
        return $this->db->runSQL($sql)->fetchAll();      
    }    

//  ===> COUNT ALL CATEGORIES [ADMIN]
    public function countC(): int{
        $sql = "SELECT COUNT(id_category) 
                FROM categories;";        
                
        return $this->db->runSQL($sql)->fetchColumn();  
    }

//  ===> COUNT ALL GROUPS [ADMIN]
    public function countG(): int{
        $sql = "SELECT COUNT(id_group) 
                FROM groups;";        
                
        return $this->db->runSQL($sql)->fetchColumn();  
    }  

//          --> ! CREATE CATEGORY (ADMIN) ! <--
    public function create(array $category): bool{
        try{                                            
            $sql = "INSERT INTO categories (name, group, description) 
                    VALUES (:name, :group, :description);"; 
                    
            $this->db->runSQL($sql, $category);          
                return true;                                 
        } catch(\PDOException $e){                      
            if($e->errorInfo[1] === 1062){            
                return false;                            
            } else{                                   
                throw $e;                                
            }
        }
    }

//          --> ! UPDATE CATEGORY (ADMIN) ! <--
    public function update(array $category): bool{
        try{                                            
            $sql = "UPDATE categories 
                    SET name = :name, navigation = :navigation 
                    WHERE id_category = :id;";  
                                      
            $this->db->runSQL($sql, $category);          
                return true;                                 
        } catch(\PDOException $e){                      
            if ($e->errorInfo[1] === 1062){             
                return false;                            
            } else{                                    
                throw $e;                               
            }
        }
    }

//          --> ! DELETE CATEGORY (ADMIN) ! <--
    public function delete(int $id): bool{
        try{                                            
            $sql = "DELETE FROM categories 
                    WHERE id_category = :id;";       
                                 
            $this->db->runSQL($sql, [$id]);              
                return true;                                 
        } catch(\PDOException $e){                      
            if($e->errorInfo[1] === 1451){             
                return false;                            
            } else{                                     
                throw $e;                                
            }
        }
    }

}
