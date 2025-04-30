<?php
namespace Liquimet\Model;

class Transport{
    protected $db;                                       

    public function __construct(Database $db){
        $this->db = $db;                                 
    }
    
//  ** [S E L E C T]     S T A T E M E N T S **    
//  ===> GET TRANSPORT BY ID    [select single]
    public function get(int $id): array {
        $sql = "SELECT t.*, 
                       u.id_user AS id_user
                FROM transports AS t
                JOIN users AS u ON t.id_user = u.id_user 
                WHERE t.id_transport = :id_transport
                LIMIT 1"; 
        
        $transport = $this->db->runSQL($sql, ['id_transport' => $id])->fetch();  
            return $transport ?: [];
    }
    
//  ===> GET ALL TRANSPORTS    [select all -> possibility to choose by id_user and transport number limit]
    public function getAll($user = null, $limit = 1000): array{   
        $args['user'] = $args['user1'] = $user;                                         //id user
        $args['limit'] = $limit;                                                        //max transports to return

        $sql = "SELECT t.*, 
                       u.id_user AS id_user,
                       q.*
                FROM transports AS t
                JOIN users AS u 
                    ON t.id_user = u.id_user 
                JOIN quantities AS q
                    ON q.id_transport = t.id_transport
                WHERE (t.id_user = :user OR :user1 IS NULL)
                ORDER BY t.id_transport DESC
                LIMIT :limit;";
        
        return $this->db->runSQL($sql, $args)->fetchAll(); 
    }
    
//  ===> GET ALL FULL TRANSPORTS    [select all fulls]
    public function getFull(): array{
        $sql = "SELECT t.*,
                       u.id_user AS id_user,
                       q.*
                FROM transports AS t
                JOIN users AS u 
                    ON t.id_user = u.id_user
                JOIN quantities AS q
                    ON q.id_transport = t.id_transport
                WHERE t.type = 'F'
                ORDER BY t.id_transport DESC;"; 
        
        return $this->db->runSQL($sql)->fetchAll();  
    }    
        
//  ===> GET ALL PARTIAL TRANSPORTS    [select all partials]
    public function getPartial(): array{
        $sql = "SELECT t.id_transport, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, t.date_unload, t.id_month_load, t.week_unload, 
                    t.id_month_unload, t.month_unload, t.container, t.note, t.seo,
                    q.mwh, q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.liquid_density, q.gas_weight, q.mj_kg, q.pcs_ghv, 
                    q.volume_mc, q.volume_nmc, q.smc_mc, q.gas_nmc, q.gas_smc, q.smc_kg
                    /*p.id_partial, p.destination, p.exw, p.date, p.place, p.q_unloaded, p.invoice*/
                FROM transports AS t
                INNER JOIN quantities AS q
                    ON t.id_transport = q.id_transport
                WHERE t.type = 'P'
                ORDER BY t.id_transport DESC;";
        
        return $this->db->runSQL($sql)->fetchAll();  
    }  

//  ===> GET LAST 5 INSERTED TRANSPORTS    [select 7 recently added transports]   
    public function getRecent($user = null): array{
        $args['user'] = $args['user1'] = $user;
        
        $sql = "SELECT t.type, t.cmr, t.univoco, t.date_load, t.date_unload, t.container, t.seo,
                       u.username
                FROM transports AS t
                JOIN users AS u
                    ON t.id_user = u.id_user
                WHERE (t.id_user = :user OR :user1 IS NULL)
                ORDER BY t.id_transport DESC
                LIMIT 10;"; 
        
        return $this->db->runSQL($sql, $args)->fetchAll();  
    }

//  ** [U P D A T E] - [D E L E T E]     S T A T E M E N T S **
//  ===> UPDATE TRANSPORT BY ID    [update single]
    public function update(array $transport): bool{                                          
        $sql = "UPDATE transports
                SET slot = :slot, 
                    cmr = :cmr, 
                    issuer = :issuer, 
                    supplier = :supplier, 
                    transport = :transport,
                    date_load = :date_load, 
                    date_unload = :date_unload, 
                    container = :container, 
                    seo = :seo,
                    modified = :modified, 
                    modified_by = :modified_by
                WHERE id_transport = :id_transport;"; 

        $this->db->runSQL($sql, $transport);                      
            return true;                                             
    }
    
//  ===> UPDATE NOTE BY ID    [update single]
    public function updateNote(array $note): bool{                                          
        $sql = "UPDATE transports
                SET note = :note
                WHERE id_transport = :id_transport;";                               
            
        $this->db->runSQL($sql, $note);                        
            return true;                                             
    }

//  ===> DELETE TRANSPORT BY ID    [delete single - only admin]
    public function delete(int $id): bool{
        $sql = "DELETE FROM transports 
                WHERE id_transport = :id_transport;";    
        
        $this->db->runSQL($sql, [$id]);                  
            return true;                                     
    }

//  ** [C H E C K]     S T A T E M E N T S **
//  ===> CHECK IF ID EXISTS    [select single]
    public function available(string $term): int{   
        $args['term1'] = $args['term2'] = "%$term%";  

        $sql = "SELECT COUNT(id_transport)
                FROM transports
                WHERE slot = :term1
                    OR cmr = :term2;";
        
        return $this->db->runSQL($sql, $args)->fetchColumn();  
    }
    
//  ** [C O U N T]     S T A T E M E N T S **
//  ===> COUNT ALL TRANSPORTS 
    public function totalTransport(): int {
        $sql = "SELECT COUNT(id_transport) 
                FROM `transports`";    
             
        return (int) $this->db->runSQL($sql)->fetchColumn();                      //return count from result set
    }

//  ===> COUNT ALL TRANSPORTS DEPENDING ON TYPE
    public function totalTransports(string $type): int {
        $sql = "SELECT COUNT(id_transport) 
                FROM `transports`
                WHERE type = :type";    
             
        return (int) $this->db->runSQL($sql, ['type' => $type])->fetchColumn();                      
    }
/*
//  ===> COUNT ALL PARTIAL TRANSPORTS    
    public function totalPartTransport(): int{
        $sql = "SELECT COUNT(id_transport) 
                FROM `transports`
                WHERE type = 'P';";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      
    }*/

//  ** [S E A R C H]     S T A T E M E N T S **
//  ===> GET NUMBER OF SEARCH MATCHES
    public function searchCount(string $term): int{
        $args['term1'] = $args['term2'] = "%$term%";        //add wildcards to search term
        
        $sql = "SELECT COUNT(id_transport)
                FROM transports
                WHERE slot LIKE :term1 
                    OR cmr LIKE :term2;";                      
        
        return $this->db->runSQL($sql, $args)->fetchColumn(); 
    }

//  ===> GET DATA FROM SEARCH MATCHES
    public function search(string $term): array{
        $args['term1'] = $args['term2'] = "%$term%"; 
        //$args['show']  = $show;         //number of results to show
        //$args['from']  = $from;         //number of results to skip
        
        $sql = "SELECT *
                FROM transports AS t
                JOIN quantities AS q
                    ON t.id_transport = q.id_transport
                JOIN partials AS p
                    ON t.id_transport = p.id_transport
                WHERE t.slot LIKE :term1 
                    OR t.cmr LIKE :term2 
                ORDER BY t.id_transport DESC;";

        return $this->db->runSQL($sql, $args)->fetchAll(); 
    }
}