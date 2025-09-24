<?php
namespace Liquimet\Model;
    use Liquimet\Validate\Validate;

class Transport {
    protected $db;                                       

    public function __construct(Database $db) {
        $this->db = $db;                                 
    }
/*--------------- SELECT --------------------------------------------------------------------------------------------------------- SELECT ---------------/ 
/                           ◦ getAllTransports (limit, offset, ?type = null)                                                                             /
/                           ◦ selectTransport (id)                                                                                                       /
/                           ◦ getRecent (user = null)                                                                                                    /
/-------------------------------------------------------------------------------------------------------------------------------------------------------*/  
//   ____________________________________________________________________________________________________________________________________________________
//  |  ◦ SELECT ◦                                                                                                                                        |
//  |     => getAllTransports (limit, offset, ?type = null)                                                                                              |
//  |     => selectTransport (id)                                                                                                                        |
//  |     => getRecent (user = null)                                                                                                                     |
//  |____________________________________________________________________________________________________________________________________________________| 
    public function getAllTransports(int $limit, int $offset, ?string $type = null): array {                                             
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, 
                       t.date_unload, t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, 
                       q.kg_load, q.cooling, q.price_typology, q.price_value, q.kg_unload, q.liquid_density, q.gas_weight, 
                       q.pcs_ghv,
                       n.content, n.created,
                       u.username, CONCAT(u.name, ' ', u.surname) AS author
                FROM `transports`       AS t
                LEFT JOIN `quantities`  AS q ON t.id_transport = q.id_transport
                LEFT JOIN `notes`       AS n ON t.id_transport = n.id_transport
                LEFT JOIN `users`       AS u ON t.id_user      = u.id_user";

        $params = ['limit' => $limit, 'offset' => $offset];
            if ($type !== null) {
                $sql .= " WHERE t.type = :type ";
                $params['type'] = $type;
            }

        $sql .= " ORDER BY t.date_load DESC LIMIT :limit OFFSET :offset";

        $transports = $this->db->runSQL($sql, $params)->fetchAll();
        //  Add derived quantity calculations
            foreach ($transports as &$t) {
                $kg_unload      = (int)($t['kg_unload'] ?? 0);
                $pcs_ghv        = (float)($t['pcs_ghv'] ?? 0);
                $liquid_density = (float)($t['liquid_density'] ?? 0);
                $gas_weight     = (float)($t['gas_weight'] ?? 0);

                    if ($kg_unload > 0 && $pcs_ghv > 0 && $liquid_density > 0 && $gas_weight > 0) {
                        $mwh        = ($kg_unload * $pcs_ghv) / 1000;
                        $mj_kg      = $pcs_ghv * 3.6;
                        $volume_mc  = $kg_unload / $liquid_density;
                        $volume_nmc = $liquid_density / $gas_weight;
                        $smc_mc     = ($volume_nmc / 273.15) * 288.15;
                        $gas_smc    = $volume_mc * $smc_mc;
                        $smc_kg     = $gas_smc / $kg_unload;
                        $gas_nmc    = $volume_mc * $volume_nmc;

                    //  Save raw full-precision values
                        $t['mwh_raw']        = $mwh;
                        $t['mj_kg_raw']      = $mj_kg;
                        $t['volume_mc_raw']  = $volume_mc;
                        $t['volume_nmc_raw'] = $volume_nmc;
                        $t['smc_mc_raw']     = $smc_mc;
                        $t['gas_smc_raw']    = $gas_smc;
                        $t['smc_kg_raw']     = $smc_kg;
                        $t['gas_nmc_raw']    = $gas_nmc;

                    //  Save display values (2 decimals, dot separator)
                        $t['mwh']        = number_format($mwh, 2, '.', '');
                        $t['mj_kg']      = number_format($mj_kg, 2, '.', '');
                        $t['volume_mc']  = number_format($volume_mc, 2, '.', '');
                        $t['volume_nmc'] = $volume_nmc;
                        $t['smc_mc']     = number_format($smc_mc, 2, '.', '');
                        $t['gas_smc']    = number_format($gas_smc, 2, '.', '');
                        $t['smc_kg']     = number_format($smc_kg, 2, '.', '');
                        $t['gas_nmc']    = number_format($gas_nmc, 2, '.', '');
                    } else {
                    //  Default zeros if missing data
                        $t['mwh'] = $t['mj_kg'] = $t['volume_mc'] = $t['smc_mc'] = $t['gas_smc'] = $t['smc_kg'] = $t['gas_nmc'] = "0.00";
                        $t['volume_nmc'] = "0";
                    }
            }
            return $transports ?: false;
    }

    public function selectTransport(int $id): array {
        $sql = "SELECT t.id_transport, t.type, t.slot, t.cmr, t.issuer, t.supplier, t.transport, t.univoco, t.date_load, 
                       t.date_unload, t.id_month_load, t.week_unload, t.id_month_unload, t.month_unload, t.container, t.seo, 
                       t.id_user, t.created, t.modified, t.modified_by,
                       u.username, CONCAT(u.name, ' ', u.surname) AS author 
                FROM `transports`      AS t
                LEFT JOIN `users`      AS u ON t.id_user = u.id_user 
                WHERE t.id_transport = :id_transport
                    LIMIT 1"; 
        
        $transport = $this->db->runSQL($sql, ['id_transport' => $id])->fetch();  
            return $transport ?: [];
    }

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
/*--------------------------------------------------------------------------------------------------------------- VALIDATION ---------------/ 
/                     ◦ validate_transport_data (transport, ?id)                                                                            /
/                     ◦ validate_transport_dates (dateLoadStr, dateUnloadStr)                                                               /
/                     ◦ check_transport_existence (field, value, ?excludeID)                                                                /
/------------------------------------------------------------------------------------------------------------------------------------------*/
//   ____________________________________________________________________________________________________________________________________________________
//  |  ◦ VALIDATION ◦                                                                                                                   ◦ VALIDATION ◦   |
//  |     => validate_transport_data (transport, ?id)                                                                                                    |
//  |     => validate_transport_dates (dateLoadStr, dateUnloadStr)                                                                                       |
//  |     => check_transport_existence (field, value, ?excludeID)                                                                                        |
//  |____________________________________________________________________________________________________________________________________________________| 
    public function validate_transport_data(array $transport, ?int $id = null): array {
        $errors = [];

        //  Required fields 
            foreach (['slot', 'cmr', 'issuer', 'supplier', 'transport', 'date_load', 'date_unload', 'container'] as $field) {
                if (empty($transport[$field])) {
                    $errors[$field] = "Campo obbligatorio.";
                }
            }
        //  Slot validation
            if (!empty($transport['slot'])) {
                if (!Validate::validate_string($transport['slot'], 'letters_numbers')) {
                    $errors['slot'] = "Slot ID può contenere lettere, numeri e l'underscore (_). Spazi non consentiti.";
                } elseif (!Validate::chars_length($transport['slot'], 6, 30)) {
                    $errors['slot'] = "Usare almeno 6 e al massimo 30 caratteri.";
                } elseif (
                    isset($transport['original_slot']) &&
                        $transport['original_slot'] !== $transport['slot'] &&
                            $this->check_transport_existence('slot', $transport['slot'], $id)
                ) {
                    $errors['slot'] = "Slot ID già in uso.";
                }
            }  
        //  Cmr validation
            if (!empty($transport['cmr'])) {
                if (!Validate::validate_string($transport['cmr'], 'letters-numbers')) {
                    $errors['cmr'] = "CMR può contenere lettere, numeri e trattini (-). Spazi non consentiti.";
                } elseif (!Validate::chars_length($transport['cmr'], 7, 30)) {
                    $errors['cmr'] = "Usare almeno 7 e al massimo 30 caratteri.";
                } elseif (
                    isset($transport['original_cmr']) &&
                        $transport['original_cmr'] !== $transport['cmr'] &&
                            $this->check_transport_existence('cmr', $transport['cmr'], $id)
                ) {
                    $errors['cmr'] = "Numero CMR già in uso.";
                }
            }
        //  Issuer validation
            if (!empty($transport['issuer'])) {
                if (!Validate::validate_string($transport['issuer'], 'lettersSpaces')) {
                    $errors['issuer'] = "Emittente può contenere solo lettere e spazi (senza spazio iniziale).";
                } elseif (!Validate::chars_length($transport['issuer'], 3, 30)) {
                    $errors['issuer'] = "Usare almeno 3 e al massimo 30 caratteri.";
                }
            }
        //  Supplier validation
            if (!empty($transport['supplier'])) {
                if (!Validate::validate_string($transport['supplier'], 'lettersSpaces')) {
                    $errors['supplier'] = "Fornitore può contenere solo lettere e spazi (senza spazio iniziale).";
                } elseif (!Validate::chars_length($transport['supplier'], 3, 30)) {
                    $errors['supplier'] = "Usare almeno 3 e al massimo 30 caratteri.";
                }
            }
        //  Transport validation
            if (!empty($transport['transport'])) {
                if (!Validate::validate_string($transport['transport'], 'lettersSpaces')) {
                    $errors['transport'] = "Trasporto può contenere solo lettere e spazi (senza spazio iniziale).";
                } elseif (!Validate::chars_length($transport['transport'], 3, 30)) {
                    $errors['transport'] = "Usare almeno 3 e al massimo 30 caratteri.";
                }
            }
        //  Container validation
            if (!empty($transport['container'])) {
                if (!Validate::validate_string($transport['container'], 'lettersSpaces')) {
                    $errors['container'] = "Container può contenere solo lettere e spazi (senza spazio iniziale).";
                } elseif (!Validate::chars_length($transport['container'], 3, 30)) {
                    $errors['container'] = "Usare almeno 3 e al massimo 30 caratteri.";
                }
            }
        return $errors;
    }
 
    public function validate_transport_dates(string $dateLoadStr, string $dateUnloadStr): array {
        $errors = [];

        $minDate = \DateTime::createFromFormat('d-m-Y', '01-01-2006');
        $today = new \DateTime('today');

        $dateLoad = \DateTime::createFromFormat('d-m-Y', $dateLoadStr);
        $dateUnload = \DateTime::createFromFormat('d-m-Y', $dateUnloadStr);

        //  Date format validation
            if (!$dateLoad) { $errors['date_load'] = 'Inserire una data valida.'; }
            if (!$dateUnload) { $errors['date_unload'] = 'Inserire una data valida.'; }

            if (empty($errors)) {
            //  Date load validation
                if ($dateLoad < $minDate) {
                    $errors['date_load'] = "Inserire una data valida. Non sono permesse date precedenti all'anno 2006.";
                } elseif ($dateLoad > $today) {
                    $errors['date_load'] = "Inserire una data valida. Non sono permesse date future.";
                }

            //  Date unload validation
                if ($dateUnload < $minDate) {
                    $errors['date_unload'] = "Inserire una data valida. Non sono permesse date precedenti all'anno 2006.";
                } elseif ($dateUnload > $today) {
                    $errors['date_unload'] = "Inserire una data valida. Non sono permesse date future.";
                } elseif ($dateUnload < $dateLoad) {
                    $errors['date_unload'] = "La data di scarico non può essere precedente alla data di carico.";
                }
            }
        return $errors;
    }

    public function check_transport_existence(string $field, string $value, ?int $excludeID = 0): bool {
        $allowed = ['slot', 'cmr'];         // Whitelisted column names
            if (!in_array($field, $allowed, true)) {
                return false;
            }

        //$sql = "SELECT 1 FROM `transports` WHERE {$field} = :value";
        $sql = "SELECT COUNT(*) FROM `transports` WHERE $field = :value";
        $params = ['value' => $value];

            //  Skip checking the current record during updates
            if ($excludeID > 0) {
                $sql .= " AND id_transport != :id_transport";
                $params['id_transport'] = $excludeID;
            }

        $sql .= " LIMIT 1";                 // Checks existence without fetching unnecessary data

        return (bool) $this->db->runSQL($sql, $params)->fetchColumn() > 0;
    }
/*----------------------------------------------------------------------------------------------------------- TRANSPORT CRUD ---------------/
/                     ◦ createTransport($data)                                                                                              /
/                     ◦ updateTransport($data)                                                                                              /
/                     ◦ deleteTransport($id)                                                                                                /
/------------------------------------------------------------------------------------------------------------------------------------------*/
    public function createTransport(array $data): bool {
        $sql = "INSERT INTO `transports` 
                    (type, slot, cmr, issuer, supplier, transport, date_load, 
                        date_unload, container, seo, created, id_user)
                VALUES 
                    (:type, :slot, :cmr, :issuer, :supplier, :transport, :date_load, 
                        :date_unload, :container, :seo, :created, :id_user)";

        $args = [
            'type'        => $data['type'],        
            'slot'        => $data['slot'],  
            'cmr'         => $data['cmr'],           
            'issuer'      => $data['issuer'],
            'supplier'    => $data['supplier'],
            'transport'   => $data['transport'], 
            'date_load'   => $data['date_load'],
            'date_unload' => $data['date_unload'],
            'container'   => $data['container'],
            'seo'         => substr($data['slot'], -4),
            'created'     => date('Y-m-d'),
            'id_user'     => $data['id_user']
        ];        
                
        return (bool) $this->db->runSQL($sql, $args);
    }

    public function updateTransport(array $data): bool {                                          
        $sql = "UPDATE `transports`
                SET slot        = :slot, 
                    cmr         = :cmr, 
                    issuer      = :issuer, 
                    supplier    = :supplier, 
                    transport   = :transport,
                    date_load   = :date_load, 
                    date_unload = :date_unload, 
                    container   = :container, 
                    seo         = :seo,
                    modified    = :modified, 
                    modified_by = :modified_by
                WHERE id_transport = :id_transport"; 

        $args = [
            'slot'         => $data['slot'],        
            'cmr'          => $data['cmr'],              
            'issuer'       => $data['issuer'], 
            'supplier'     => $data['supplier'], 
            'transport'    => $data['transport'],
            'date_load'    => $data['date_load'], 
            'date_unload'  => $data['date_unload'], 
            'container'    => $data['container'], 
            'seo'          => substr($data['slot'], -4),
            'modified'     => date('Y-m-d'), 
            'modified_by'  => $data['modified_by'],
            'id_transport' => $data['id_transport']
        ];     

        $update = $this->db->runSQL($sql, $args);   
            return $update->rowCount() > 0;                                                
    }
/*--------------------------------------------------------------------------------------------------------- COUNT AND SEARCH ---------------/ 
/                     ◦ totalTransports(?$type)                                                                                             /
/                     ◦ searchCount($term)                                                                                                  /
/                     ◦ search($term)                                                                                                       /
/------------------------------------------------------------------------------------------------------------------------------------------*/ 
    public function totalTransports(?string $type = null): int {
        $sql = "SELECT COUNT(*) FROM `transports`";
        $params = [];

            if ($type !== null) {
                $sql .= " WHERE type = :type";
                $params['type'] = $type;
            }

        return (int) $this->db->runSQL($sql, $params)->fetchColumn();      
    }

    public function searchCount(string $term): int {        // get number of search data
        $args['term1'] = $args['term2'] = "%$term%";        // add wildcards to search term
        
        $sql = "SELECT COUNT(id_transport)
                FROM `transports`
                WHERE slot LIKE :term1 
                    OR cmr LIKE :term2;";                      
        
        return $this->db->runSQL($sql, $args)->fetchColumn(); 
    }

    public function search(string $term): array {
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
//   ____________________________________________________________________________________________________________________________________________________
//  |  ◦ TRANSACTION CALLS ENCAPSULATION ◦                                                                         ◦ TRANSACTION CALLS ENCAPSULATION ◦   |
//  |     => getLastInsertId ()                                                                                                                          |
//  |     => begin ()                                                                                                                                    |
//  |     => commit ()                                                                                                                                   |
//  |     => rollback ()                                                                                                                                 |
//  |____________________________________________________________________________________________________________________________________________________|
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