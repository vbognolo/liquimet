<?php
namespace Liquimet\Model;
use Liquimet\Validate\Validate;

class Quantity{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;                                 
    }

/********************************************
 *  Select Statements For Getting Transports 
 *      Get Quantity By ID:    get($id)
 *      
 *      
 *      
 ********************************************/  
    public function get(int $id): array {    
        $sql = "SELECT id_quantity, kg_load, cooling, price_typology, price_value, kg_unload, mwh, liquid_density, 
                       gas_weight, mj_kg, pcs_ghv, volume_mc, volume_nmc, smc_mc, gas_nmc, gas_smc, smc_kg, id_transport
                FROM `quantities`
                WHERE id_transport = :id_transport
                LIMIT 1"; 
        
        $quantity = $this->db->runSQL($sql, ['id_transport' => $id])->fetch();  
            return $quantity ?: false;
    }

/********************************************************************
 *  Validate Data Statements
 *      Quantity insert and update:     validate_quantity($quantity)
 ********************************************************************/
    public function validate_quantity(array $quantity): array {
        $errors = [];

        // Required fields check
        foreach (['kg_load', 'cooling', 'price_typology', 'kg_unload', 'liquid_density', 'gas_weight', 'pcs_ghv'] as $field) {
            if (!isset($quantity[$field]) || $quantity[$field] === '') {
                $errors[$field] = "Campo obbligatorio.";
            } 
        }

        //  Kg Load validation
            if (!Validate::validate_number($quantity['kg_load'], 'number') || 
                !Validate::validate_number($quantity['kg_load'], 'min')) {
                $errors['kg_load'] = "Quantità caricata deve essere un numero positivo (intero o decimale).";
            }/* elseif (!empty($quantity['kg_load']) && Validate::validate_number($quantity['kg_load'], 'min')) {
                $errors['kg_load'] = "Il valore minimo deve essere maggiore o uguale a .";
            }*/

        //  Cooling validation
            if (!Validate::validate_number($quantity['cooling'], 'digits')) {
                $errors['cooling'] = "Raffredamento deve essere un numero intero positivo, senza segni o decimali.";
            } 

        //  Price Typology validation
            if (!Validate::validate_string($quantity['price_typology'], 'letters')) {
                $errors['price_typology'] = "Tipologia costo può contenere solo lettere.";
            } elseif ($quantity['price_typology'] === 'yes') {
            //  Price Value validation
                if (!Validate::validate_number($quantity['price_value'], 'digits') ||
                    !Validate::validate_number($quantity['price_value'], 'min', 1)) {
                        $errors['price_value'] = "Valore costo extra deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.";
                } elseif (!isset($quantity['price_value']) || empty($quantity['price_value'])) {
                    $errors['price_value'] = "Campo obbligatorio.";
                }
                    /*elseif (!isset($quantity['price_value']) || !Validate::validate_number($quantity['price_value'], 'min', 1)) {
                        $errors['price_value'] = "Il valore minimo deve essere maggiore o uguale a 1.";
                    } 
                } else {
                    $quantity['price_value'] = 0;*/
            }

        //  Kg Unload validation
            if (!Validate::validate_number($quantity['kg_unload'], 'number') ||
                !Validate::validate_number($quantity['kg_unload'], 'min')) {
                    $errors['kg_unload'] = "Quantità scaricata deve essere un numero positivo (intero o decimale).";
            } /*elseif (!empty($quantity['kg_unload']) && !Validate::validate_number($quantity['kg_unload'], 'min')) {
                $errors['kg_unload'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }*/

        //  Liquid Density validation
            if (!Validate::validate_number($quantity['liquid_density'], 'number') ||
                !Validate::validate_number($quantity['liquid_density'], 'min')) {
                    $errors['liquid_density'] = "Densità liquido deve essere un numero positivo (intero o decimale).";
            } /*elseif (!empty($quantity['liquid_density']) && !Validate::validate_number($quantity['liquid_density'], 'min')) {
                $errors['liquid_density'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }*/

        //  Gas Weight validation
            if (!Validate::validate_number($quantity['gas_weight'], 'number') ||
                !Validate::validate_number($quantity['gas_weight'], 'min')) {
                    $errors['gas_weight'] = "Peso specifico (gas) deve essere un numero positivo (intero o decimale).";
            } /*elseif (!empty($quantity['gas_weight']) && !Validate::validate_number($quantity['gas_weight'], 'min')) {
                $errors['gas_weight'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }*/

        //  PCS GHV validation
            if (!Validate::validate_number($quantity['pcs_ghv'], 'number') ||
                !Validate::validate_number($quantity['pcs_ghv'], 'min')) {
                    $errors['pcs_ghv'] = "PCS/GHV deve essere un numero positivo (intero o decimale).";
            } /*elseif (!empty($quantity['pcs_ghv']) && !Validate::validate_number($quantity['pcs_ghv'], 'min')) {
                $errors['pcs_ghv'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }*/

        return $errors;
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

/***************
 *  Update data
 ***************/
    public function update(array $data, int $user): bool {                                          
        $sql = "UPDATE `quantities`
                SET kg_load = :kg_load, 
                    cooling = :cooling, 
                    price_typology = :price_typology, 
                    price_value = :price_value, 
                    kg_unload = :kg_unload, 
                    liquid_density = :liquid_density, 
                    gas_weight = :gas_weight, 
                    pcs_ghv = :pcs_ghv,
                    modified = :modified, 
                    modified_by = :modified_by
                WHERE id_quantity = :id_quantity"; 

        $args = [
            'id_quantity' => $data['id_quantity'],
            'kg_load' => $data['kg_load'],        
            'cooling' => $data['cooling'],              
            'price_typology' => $data['price_typology'], 
            'price_value' => $data['price_value'], 
            'kg_unload' => $data['kg_unload'],
            'liquid_density' => $data['liquid_density'], 
            'gas_weight' => $data['gas_weight'], 
            'pcs_ghv' => $data['pcs_ghv'], 
            'modified' => date('Y-m-d'), 
            'modified_by' => $user
        ];     

        $update = $this->db->runSQL($sql, $args);   
            return $update->rowCount() > 0;                                                
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
