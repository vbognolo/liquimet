<?php
namespace Liquimet\Model;
use Liquimet\Validate\Validate;

class Transport{
    protected $db;                                       

    public function __construct(Database $db) {
        $this->db = $db;                                 
    }
    
/*------------------------ SELECT -------------------------/
/    getAllTransports()     => get transports by type      /
/    get($id)               => get single by ID            /
/    getNote($id)                                          /
/    getAllTransports()     => get platform transports     /
/    getFulls()                                            /
/    getPartials()                                         /
/---------------------------------------------------------*/  
    public function get(int $id): array {
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, t.date_unload, 
                       t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.seo,
                       u.id_user
                FROM `transports` AS t
                JOIN `users`      AS u ON t.id_user = u.id_user 
                WHERE t.id_transport = :id_transport
                LIMIT 1"; 
        
        $transport = $this->db->runSQL($sql, ['id_transport' => $id])->fetch();  
            return $transport ?: [];
    }

    public function getNote(int $id): array {
        $sql = "SELECT n.id_note, n.content, n.created, n.id_transport, 
                       u.username AS author
                FROM `notes` AS n
                INNER JOIN `users` AS u ON n.id_user = u.id_user
                WHERE n.id_transport = :id_transport
                    ORDER BY n.created ASC";

        return $this->db->runSQL($sql, ['id_transport' => $id])->fetchAll() ?: [];
    }

    public function getAllTransports(int $limit, int $offset, ?string $type = null): array {                                             
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, 
                       t.date_unload, t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, 
                       q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.mwh, q.liquid_density, q.gas_weight, 
                       q.mj_kg, q.pcs_ghv, q.volume_mc, q.volume_nmc, q.smc_mc, q.gas_nmc, q.gas_smc, q.smc_kg,
                       n.content, n.created,
                       u.username AS author
                FROM `transports`       AS t
                LEFT JOIN `quantities`  AS q ON t.id_transport = q.id_transport
                LEFT JOIN `notes`       AS n ON t.id_transport = n.id_transport
                LEFT JOIN `users`       AS u ON t.id_user      = u.id_user";

        $params = ['limit' => $limit, 'offset' => $offset];
            if ($type !== null) {
                $sql .= " WHERE t.type = :type ";
                $params['type'] = $type;
            }

            $sql .= " ORDER BY t.id_transport DESC LIMIT :limit OFFSET :offset";

            return $this->db->runSQL($sql, $params)->fetchAll();
    }

        public function totalTransports(?string $type = null): int {
        $sql = "SELECT COUNT(*) FROM `transports`";
        $params = [];

        if ($type !== null) {
            $sql .= " WHERE type = :type";
            $params['type'] = $type;
        }

        return (int) $this->db->runSQL($sql, $params)->fetchColumn();      
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
    public function getFulls(): array {
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, 
                       t.date_unload, t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.seo, 
                       q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.mwh, q.liquid_density, q.gas_weight, 
                       q.mj_kg, q.pcs_ghv, q.volume_mc, q.volume_nmc, q.smc_mc, q.gas_nmc, q.gas_smc, q.smc_kg,
                       n.content, n.created,
                       u.username AS author
                FROM `transports`      AS t
                LEFT JOIN `quantities` AS q ON t.id_transport = q.id_transport
                JOIN `users`           AS u ON t.id_user = u.id_user
                LEFT JOIN `notes`      AS n ON t.id_transport = n.id_transport
                WHERE t.type = :type
                    ORDER BY t.id_transport DESC"; 
        
        return $this->db->runSQL($sql, ['type' => 'F'])->fetchAll();  
    }    

//  ===> GET ALL PARTIAL TRANSPORTS    [select all partials]
    public function getPartials(): array{
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, 
                       t.date_unload, t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.seo, 
                       q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.mwh, q.liquid_density, q.gas_weight, 
                       q.mj_kg, q.pcs_ghv, q.volume_mc, q.volume_nmc, q.smc_mc, q.gas_nmc, q.gas_smc, q.smc_kg,
                       n.content, n.created,
                       u.username AS author
                FROM `transports` AS t
                LEFT JOIN `quantities` AS q ON t.id_transport = q.id_transport
                LEFT JOIN `notes`      AS n ON t.id_transport = n.id_transport
                JOIN `users`           AS u ON t.id_user = u.id_user
                WHERE t.type = :type
                    ORDER BY t.id_transport DESC";
        
        return $this->db->runSQL($sql, ['type' => 'P'])->fetchAll();  
    }  

//  ===> GET LAST 5 INSERTED TRANSPORTS    [select 7 recently added transports]   
    public function getRecent($user = null): array{
        $args['user'] = $args['user1'] = $user;
        
        $sql = "SELECT t.type, t.cmr, t.univoco, t.date_load, t.date_unload, t.container, t.seo,
                       u.username
                FROM `transports` AS t
                JOIN `users` AS u
                    ON t.id_user = u.id_user
                WHERE (t.id_user = :user OR :user1 IS NULL)
                ORDER BY t.id_transport DESC
                LIMIT 10;"; 
        
        return $this->db->runSQL($sql, $args)->fetchAll();  
    }

/*************************************************************************************
 * Validation And Availability Checks
 *    Validate Transport            => validate_transport($transport)
 *    Validate Dates                => validate_dates($dateLoadStr, $dateUnloadStr)
 *    Check Transport Existance     => duplicate_transport($field, $value, $id)  
 *    Validate Partial              => validate_partial($partial)  
 *************************************************************************************/
    public function validate_transport(array $transport, ?int $id = null): array {
        $errors = [];

            //  Required fields check
            foreach (['slot', 'cmr', 'issuer', 'supplier', 'date_load', 'date_unload', 'transport', 'container'] as $field) {
                if (empty($transport[$field])) {
                    $errors[$field] = "Campo obbligatorio.";
                }
            }

            //  Slot validation
            if (!empty($transport['slot']) && !Validate::validate_string($transport['slot'], 'letters_numbers')) {
                $errors['slot'] = "Slot ID può contenere lettere, numeri e l'underscore (_). Spazi non consentiti.";
            } elseif (!empty($transport['slot']) && !Validate::chars_length($transport['slot'], 5, 35)) {
                $errors['slot'] = "Usare almeno 5 e al massimo 35 caratteri.";
            } elseif (!empty($transport['slot']) && $this->duplicate_transport('slot', $transport['slot'], $id)) {
                $errors['slot'] = "Slot ID già in uso.";
            }

            //  Cmr validation
            if (!empty($transport['cmr']) && !Validate::validate_string($transport['cmr'], 'letters-numbers')) {
                $errors['cmr'] = "CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.";
            } elseif (!empty($transport['cmr']) && !Validate::chars_length($transport['cmr'], 5, 35)) {
                $errors['cmr'] = "Usare almeno 5 e al massimo 35 caratteri.";
            } elseif (!empty($transport['cmr']) && $this->duplicate_transport('cmr', $transport['cmr'], $id)) {
                $errors['cmr'] = "Numero CMR già in uso.";
            }

            //  Issuer validation
            if (!empty($transport['issuer']) && !Validate::validate_string($transport['issuer'], 'lettersSpaces')) {
                $errors['issuer'] = "Emittente può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($transport['issuer']) && !Validate::chars_length($transport['issuer'], 3, 50)) {
                $errors['issuer'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

            //  Supplier validation
            if (!empty($transport['supplier']) && !Validate::validate_string($transport['supplier'], 'lettersSpaces')) {
                $errors['supplier'] = "Fornitore può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($transport['supplier']) && !Validate::chars_length($transport['supplier'], 3, 50)) {
                $errors['supplier'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

            //  Transport validation
            if (!empty($transport['transport']) && !Validate::validate_string($transport['transport'], 'lettersSpaces')) {
                $errors['transport'] = "Trasporto può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($transport['transport']) && !Validate::chars_length($transport['transport'], 3, 50)) {
                $errors['transport'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

            //  Container validation
            if (!empty($transport['container']) && !Validate::validate_string($transport['container'], 'lettersSpaces')) {
                $errors['container'] = "Container può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($transport['container']) && !Validate::chars_length($transport['container'], 3, 50)) {
                $errors['container'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

            //  Dates validation
            $dateErrors = $this->validate_dates($transport['date_load'] ?? '', $transport['date_unload'] ?? '');
            $errors = array_merge($errors, $dateErrors);

        return $errors;
    }
 
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

    public function duplicate_transport(string $field, string $value, ?int $id = null): bool {
        $allowed = ['slot', 'cmr'];         // Whitelisted column names

            if (!in_array($field, $allowed)) return false;

        $sql = "SELECT 1 FROM `transports` WHERE {$field} = :value";
        $params = ['value' => $value];

            //  Skip checking the current record during updates
            if ($id !== null) {
                $sql .= " AND id_transport != :id_transport";
                $params['id_transport'] = $id;
            }

        $sql .= " LIMIT 1";                 // Checks existance without fetching unnecessary data

        return (bool) $this->db->runSQL($sql, $params)->fetchColumn();
    }

/**********************************************************
 *  Transport CRUD Operations:
 *      Create Transport        => createTransport()
 *      Update Transport        => updateTransport()
 *      
 *      Partial Transports
 *      Transport Modals
 *      
 **********************************************************/
    public function createTransport(array $data, int $user): bool {
        $sql = "INSERT INTO `transports` 
                    (type, slot, cmr, issuer, supplier, transport, date_load, 
                        date_unload, container, seo, created, id_user)
                VALUES 
                    (:type, :slot, :cmr, :issuer, :supplier, :transport, :date_load, 
                        :date_unload, :container, :seo, :created, :id_user);";

        $args = [
            'type' => $data['type'],        
            'slot' => $data['slot'],  
            'cmr' => $data['cmr'],           
            'issuer' => $data['issuer'],
            'supplier' => $data['supplier'],
            'transport' => $data['transport'], 
            'date_load' => $data['date_load'],
            'date_unload' => $data['date_unload'],
            'container' => $data['container'],
            'seo' => substr($data['slot'], -4),
            'created' => date('Y-m-d'),
            'id_user' => $user
        ];        
                
        return (bool) $this->db->runSQL($sql, $args);
    }

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
    public function saveNotes(int $id, int $trans, int $user, string $content): bool {
        $this->db->beginTransaction();

        try {
        //  1. Delete existing notes for this transport
            $sqlDelete = "DELETE FROM `notes` WHERE id_note = :id_note";
            $this->db->runSQL($sqlDelete, ['id_note' => $id]);

        //  Option 1: Insert as one note
            //  Split notes by period (.) and trim whitespace
            $lines = array_filter(array_map('trim', preg_split('/\r\n|\r|\n/', $content)));
            $sqlInsert = "INSERT INTO `notes` (id_transport, id_user, content, created)
                          VALUES (:id_transport, :id_user, :content, NOW())";

            foreach ($lines as $note) {
                if ($note !== '') {
                    $this->db->runSQL($sqlInsert, [
                        'id_transport' => $trans,
                        'id_user' => $user,
                        'content' => $note
                    ]);
                }
        }

            $this->db->commit();
                return true;
        } catch (\Exception $e) {
            $this->db->rollBack();
            // Log $e->getMessage() if you have logging
            return false;
    }

  
}

//  ===> DELETE TRANSPORT BY ID    [delete single - only admin]
    public function deleteTransport(int $id): bool {
        $sql = "DELETE FROM `transports` 
                WHERE id_transport = :id_transport";    
        
        $this->db->runSQL($sql, ['id_transport' => $id]);                  
            return true;                                     
    }

/*******************************************************************
 *  Count Statements For Transports 
 *      Count All Transports:            => totalTransport())
 *      Count All Transports By Type:    => totalTransports($type)
 *******************************************************************/
    /*public function totalTransport(): int {
        $sql = "SELECT COUNT(id_transport) 
                FROM `transports`";    
             
        return (int) $this->db->runSQL($sql)->fetchColumn();                      // return count from result set
    }

    public function totalTransport(?string $type = null): int {
        $sql = "SELECT COUNT(*) FROM `transports`";
        $params = [];

        if ($type !== null) {
            $sql .= " WHERE type = :type";
            $params['type'] = $type;
        }

        return (int) $this->db->runSQL($sql, $params)->fetchColumn();      
    }
*/
/***************************************************************
 *  Search Statements For Transports 
 *      Get Number of Search Matches:    => searchCount($term)
 *      Get Data From Search Matches:    => search($term)
 ***************************************************************/
    public function searchCount(string $term): int{
        $args['term1'] = $args['term2'] = "%$term%";        // add wildcards to search term
        
        $sql = "SELECT COUNT(id_transport)
                FROM `transports`
                WHERE slot LIKE :term1 
                    OR cmr LIKE :term2;";                      
        
        return $this->db->runSQL($sql, $args)->fetchColumn(); 
    }

    public function search(string $term): array{
        $args['term1'] = $args['term2'] = "%$term%"; 
        //$args['show']  = $show;         // number of results to show
        //$args['from']  = $from;         // number of results to skip
        
        $sql = "SELECT *
                FROM `transports` AS t
                JOIN `quantities` AS q
                    ON t.id_transport = q.id_transport
                JOIN `partials` AS p
                    ON t.id_transport = p.id_transport
                WHERE t.slot LIKE :term1 
                    OR t.cmr LIKE :term2 
                ORDER BY t.id_transport DESC;";

        return $this->db->runSQL($sql, $args)->fetchAll(); 
    }

/************************************
 *  Transaction Calls Encapsulation 
 *      lastInsertId
 *      beginTransaction
 *      commit
 *      rollback
 ************************************/
    public function getLastInsertId() {
        return $this->db->lastInsertId(); 
    }

    public function begin(): void {
        $this->db->beginTransaction();
    }

    public function commit(): void {
        $this->db->commit();
    }

    public function rollback(): void {
        $this->db->rollBack();
    }
}