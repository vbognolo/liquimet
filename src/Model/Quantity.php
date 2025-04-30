<?php
namespace Liquimet\Model;

class Quantity{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;                                 
    }

//  ** [S E L E C T]     S T A T E M E N T S **    
//  ===> GET QUANTITY BY TRANSPORT ID    [select single]  
    public function get(int $id){    
        $sql = "SELECT q.*,
                       t.id_transport AS id_transport  
                FROM quantities AS q
                JOIN transports AS t 
                    ON q.id_transport = t.id_transport
                WHERE q.id_transport = :id_transport;";
                
        return $this->db->runSQL($sql, [$id])->fetch();  
    }

//  ===> GET ALL QUANTITIES BY TRANSPORT ID    [select all]        
    public function getAll(): array{    
        $sql = "SELECT q.*, 
                       t.*
                FROM quantities AS q
                JOIN transports AS t 
                    ON q.id_transport = t.id_transport
                ORDER BY t.id_transport DESC;";

        return $this->db->runSQL($sql)->fetchAll(); 
    }
        
//  ===> GET ALL FULL QUANTITIES    [select all fulls]      
    public function getFull(): array{    
        $sql = "SELECT q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.mwh, q.liquid_density, q.gas_weight, q.mj_kg, q.pcs_ghv,
                       q.volume_mc, q.volume_nmc, q.smc_mc, q.gas_nmc, q.gas_smc, q.smc_kg, 
                       u.id_user AS id_user,
                       t.id_transport AS id_transport, t.slot, t.type, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, t.date_unload, 
                       t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.note, t.seo
                FROM quantities AS q
                JOIN users AS u 
                    ON q.id_user = u.id_user
                JOIN transports AS t 
                    ON q.id_transport = t.id_transport
                WHERE t.type = 'F'
                ORDER BY q.id_transport DESC;";

        return $this->db->runSQL($sql)->fetchAll(); 
    }
    
//  ===> GET ALL PARTIAL QUANTITIES    [select all partials]     
    public function getPart(): array{    
        $sql = "SELECT q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.mwh, q.liquid_density, q.gas_weight, q.mj_kg, q.pcs_ghv,
                       q.volume_mc, q.volume_nmc, q.smc_mc, q.gas_nmc, q.gas_smc, q.smc_kg, 
                       u.id_user AS id_user,
                       t.id_transport AS id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, t.date_unload, 
                       t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.note, t.seo  
                FROM quantities AS q
                JOIN users AS u 
                    ON q.id_user = u.id_user
                JOIN transports AS t 
                    ON q.id_transport = t.id_transport
                WHERE t.type = 'P'
                ORDER BY t.id_transport DESC;";

        return $this->db->runSQL($sql)->fetchAll(); 
    }

//  ** [U P D A T E] - [D E L E T E]     S T A T E M E N T S **
//  ===> UPDATE QUANTITY BY ID    [update single]
    public function update(array $quantity): bool{                                          
        $sql = "UPDATE quantities
                SET kg_load = :kg_load, cooling = :cooling, price_typology = :price_typology, price_value = :price_value, 
                    kg_unload = :kg_unload, liquid_density = :liquid_density, gas_weight = :gas_weight, pcs_ghv = :pcs_ghv,
                    modified = :modified, modified_by = :modified_by
                WHERE id_transport = :id_transport;";                               
            
        $this->db->runSQL($sql, $quantity);                        
            return true;                                             
    }
    
//  ===> DELETE TRANSPORT BY ID    [delete single - only admin]
    public function delete(int $id): bool{
        $sql = "DELETE FROM quantities 
                WHERE id_transport = :id;";    
        
        $this->db->runSQL($sql, [$id]);                  
            return true;                                     
    }
    
//  ** [C O U N T]     S T A T E M E N T S **    
//  ===> SUM ALL QUANTITIES
    public function sumUnloaded(): int {    
        $sql = "SELECT SUM(kg_unload)  
                FROM quantities";

        return (int) $this->db->runSQL($sql)->fetchColumn(); 
    }
    
//  ===> COUNT ALL QUANTITIES
    public function count(): int{
        $sql = "SELECT COUNT(id_quantity) 
                FROM quantities;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      
    }


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
                FROM quantities AS q
                JOIN transports AS t
                    ON q.id_transport = t.id_transport
                /*JOIN partials AS p
                    ON t.id_transport = p.id_transport*/
                WHERE t.slot LIKE :term1 
                    OR t.cmr LIKE :term2 
                ORDER BY q.id_transport DESC;";

        return $this->db->runSQL($sql, $args)->fetchAll(); 
    }
}
