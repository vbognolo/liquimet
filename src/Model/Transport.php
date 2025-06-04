<?php
namespace Liquimet\Model;
use Liquimet\Validate\Validate;

class Transport{
    protected $db;                                       

    public function __construct(Database $db){
        $this->db = $db;                                 
    }
    
//  ** [S E L E C T]     S T A T E M E N T S **    
//  ===> GET TRANSPORT BY ID    [select single]
    public function get(int $id): array {
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, t.date_unload, 
                       t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.note, t.seo,
                       u.id_user AS id_user
                FROM transports AS t
                JOIN users AS u ON t.id_user = u.id_user 
                WHERE t.id_transport = :id_transport
                LIMIT 1"; 
        
        $transport = $this->db->runSQL($sql, ['id_transport' => $id])->fetch();  
            return $transport ?: [];
    }

    public function getAllTransports(): array {
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, 
                    t.date_unload, t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.note, 
                    q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.mwh, q.liquid_density, q.gas_weight, 
                    q.mj_kg, q.pcs_ghv, q.volume_mc, q.volume_nmc, q.smc_mc, q.gas_nmc, q.gas_smc, q.smc_kg
                FROM `transports` AS t
                LEFT JOIN `quantities` AS q ON t.id_transport = q.id_transport
                ORDER BY t.id_transport DESC";

        return $this->db->runSQL($sql)->fetchAll();
    }
    
//  ===> GET ALL TRANSPORTS    [select all -> possibility to choose by id_user and transport number limit]
    public function getAll($user = null, $limit = 1000): array {   
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
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, 
                    t.date_unload, t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.note, t.seo, 
                    q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.mwh, q.liquid_density, q.gas_weight, 
                    q.mj_kg, q.pcs_ghv, q.volume_mc, q.volume_nmc, q.smc_mc, q.gas_nmc, q.gas_smc, q.smc_kg
                FROM `transports` AS t
                LEFT JOIN `quantities` AS q ON t.id_transport = q.id_transport
                JOIN `users` AS u ON t.id_user = u.id_user
                WHERE t.type = :type
                ORDER BY t.id_transport DESC"; 
        
        return $this->db->runSQL($sql, ['type' => 'F'])->fetchAll();  
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

/*****************************************************
 *  Validate transport data for inserting or editting 
 *****************************************************/
    public function validate_data(array $transport): array {
        $errors = [];

        // Required fields check
        foreach (['slot', 'cmr', 'issuer', 'supplier', 'date_load', 'date_unload', 'transport', 'container'] as $field) {
            if (empty($transport[$field])) {
                $errors[$field] = "Campo obbligatorio.";
            }
        }
            // Slot validation
            if (!empty($transport['slot']) && !Validate::validate_string($transport['slot'], 'letters_numbers')) {
                $errors['slot'] = "Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.";
            } elseif (!empty($transport['slot']) && !Validate::chars_length($transport['slot'], 11, 35)) {
                $errors['slot'] = "Usare almeno 11 e al massimo 35 caratteri.";
            }

            // Cmr validation
            if (!empty($transport['cmr']) && !Validate::validate_string($transport['cmr'], 'letters-numbers')) {
                $errors['cmr'] = "CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.";
            } elseif (!empty($transport['cmr']) && !Validate::chars_length($transport['cmr'], 7, 35)) {
                $errors['cmr'] = "Usare almeno 7 e al massimo 35 caratteri.";
            }

            // Issuer validation
            if (!empty($transport['issuer']) && !Validate::validate_string($transport['issuer'], 'lettersSpaces')) {
                $errors['issuer'] = "Emittente può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($transport['issuer']) && !Validate::chars_length($transport['issuer'], 3, 50)) {
                $errors['issuer'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

            // Supplier validation
            if (!empty($transport['supplier']) && !Validate::validate_string($transport['supplier'], 'lettersSpaces')) {
                $errors['supplier'] = "Fornitore può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($transport['supplier']) && !Validate::chars_length($transport['supplier'], 3, 50)) {
                $errors['supplier'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

            // Transport validation
            if (!empty($transport['transport']) && !Validate::validate_string($transport['transport'], 'lettersSpaces')) {
                $errors['transport'] = "Trasporto può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($transport['transport']) && !Validate::chars_length($transport['transport'], 3, 50)) {
                $errors['transport'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

            // Date load validation
            /*if (!empty($transport['date_load']) && !Validate::validate_date($transport['date_load'])) {
                $errors['date_load'] = 'Inserire una data valida. Non sono permesse date future.';
            } 

            // Date unload validation
            if (!empty($transport['date_unload']) && !Validate::validate_date($transport['date_unload'])) {
                $errors['date_unload'] = 'Inserire una data valida. Non sono permesse date future.';
            } */

            // Container validation
            if (!empty($transport['container']) && !Validate::validate_string($transport['container'], 'lettersSpaces')) {
                $errors['container'] = "Container può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($transport['container']) && !Validate::chars_length($transport['container'], 3, 50)) {
                $errors['container'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

        return $errors;
    }

/******************************************************
 *  Validate transport dates for inserting or editting 
 ******************************************************/
    public function validate_dates($dateLoadStr, $dateUnloadStr): array {
        $errors = [];

        $dateLoad = \DateTime::createFromFormat('d-m-Y', $dateLoadStr);
        $dateUnload = \DateTime::createFromFormat('d-m-Y', $dateUnloadStr);
        $today = new \DateTime('today');

            if (!$dateLoadStr) {
                $errors['date_load'] = "Campo obbligatorio.";
            } elseif (!$dateLoad || $dateLoad->format('d-m-Y') !== $dateLoadStr) {
                $errors['date_load'] = "Inserire una data valida.";
            } elseif ($dateLoad > $today) {
                $errors['date_load'] = "Inserire una data valida. Non sono permesse date future.";
            }

            if (!$dateUnloadStr) {
                $errors['date_unload'] = "Campo obbligatorio";
            } elseif (!$dateUnload || $dateUnload->format('d-m-Y') !== $dateUnloadStr) {
                $errors['date_unload'] = "Inserire una data valida.";
            } elseif ($dateUnload > $today) {
                $errors['date_unload'] = "Inserire una data valida. Non sono permesse date future.";
            } elseif ($dateLoad && $dateUnload < $dateLoad) {
                $errors['date_unload'] = "La data di scarico non può essere precedente alla data di carico.";
            }

        return $errors;
    }

/************************************
 *  Check if data exists in database 
 ************************************/
    public function check_existance(string $field, string $value, ?int $id = null): bool {
        $allowed = ['slot', 'cmr'];

            if (!in_array($field, $allowed)) return false;

        $sql = "SELECT 1 FROM `transports` WHERE {$field} = :value";
        $params = ['value' => $value];

            if ($id !== null) {
                $sql .= " AND id_transport != :id_transport";
                $params['id_transport'] = $id;
            }

        $sql .= " LIMIT 1";

        return (bool) $this->db->runSQL($sql, $params)->fetchColumn();
    }

/***************
 *  Update data
 ***************/
    public function update(int $id, array $data, int $user): bool {                                          
        $sql = "UPDATE `transports`
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
                WHERE id_transport = :id_transport"; 

        $args = [
            'id_transport' => $id,
            'slot' => $data['slot'],        
            'cmr' => $data['cmr'],              
            'issuer' => $data['issuer'], 
            'supplier' => $data['supplier'], 
            'transport' => $data['transport'],
            'date_load' => $data['date_load'], 
            'date_unload' => $data['date_unload'], 
            'container' => $data['container'], 
            'seo' => substr($data['slot'], -4),
            'modified' => date('Y-m-d'), 
            'modified_by' => $user
        ];     

        $update = $this->db->runSQL($sql, $args);   
            return $update->rowCount() > 0;                                                
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