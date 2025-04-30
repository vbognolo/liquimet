<?php
namespace Liquimet\Model;

class Navigation {
    protected $db;                                       

    public function __construct(Database $db){
        $this->db = $db;                                 
    }

    //  ===> GET ALL NAVIGATION [ADMIN]
    public function getAdminNavigation(): array {
        $sql = "SELECT id_group, name, menu, seo 
                FROM `groups`";  
                
        return $this->db->runSQL($sql)->fetchAll();      
    }  

    //  ===> GET ALL NAVIGATION [USER]
   /* public function getNavigation(): array {
        $sql = "SELECT id_group, name, menu, seo 
                FROM `groups`
                WHERE menu = 1";    
        
        return $this->db->runSQL($sql)->fetchAll();      
    }*/

    //  ===> COUNT ALL GROUPS [ADMIN]
    public function totalAdminNav(): int {
        $sql = "SELECT COUNT(id_group) 
                FROM `groups`";        
                
        return (int) $this->db->runSQL($sql)->fetchColumn();  
    }
}