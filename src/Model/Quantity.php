<?php
namespace Liquimet\Model;
    use Liquimet\Validate\Validate;

class Quantity{
    private $db;

    public function __construct(Database $db){
        $this->db = $db;                                 
    }
/*------------------------------------------------------------------------------------------------------------------- SELECT ---------------/ 
/                     ◦ selectQuantity (id)                                                                                                 /
/                     ◦ getQtyByTransportID (id)                                                                                            /
/------------------------------------------------------------------------------------------------------------------------------------------*/  
    public function selectQuantity(int $id): array {    
        $sql = "SELECT id_quantity, kg_load, cooling, price_typology, price_value, kg_unload, mwh, liquid_density, 
                       gas_weight, mj_kg, pcs_ghv, volume_mc, volume_nmc, smc_mc, gas_nmc, gas_smc, smc_kg, id_transport
                FROM `quantities`
                WHERE id_quantity = :id_quantity
                LIMIT 1"; 
        
        $quantity = $this->db->runSQL($sql, ['id_quantity' => $id])->fetch();  
            return $quantity ?: false;
    }

    public function getQtyByTransportID(int $id): array {    
        $sql = "SELECT id_quantity, kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, 
                       gas_weight, pcs_ghv, id_transport
                FROM `quantities`
                WHERE id_transport = :id_transport
                    LIMIT 1"; 
        
        $quantity = $this->db->runSQL($sql, ['id_transport' => $id])->fetch();  
           /* if (!$quantity) {
                return [];
            }

        // Derived values
        $quantity['mwh']       = Validate::validate_number(($quantity['kg_unload'] * $quantity['pcs_ghv']) / 1000, 'float');
        $quantity['mj_kg']     = Validate::validate_number($quantity['pcs_ghv'] * 3.6, 'float');
        $quantity['volume_mc'] = Validate::validate_number($quantity['kg_unload'] / $quantity['liquid_density'], 'float');
        $quantity['volume_nmc']= Validate::validate_number($quantity['liquid_density'] / $quantity['gas_weight'], 'float');
        $quantity['smc_mc']    = Validate::validate_number(($quantity['volume_nmc'] / 273.15) * 288.15, 'float');
        $quantity['gas_smc']   = Validate::validate_number($quantity['volume_mc'] * $quantity['smc_mc'], 'float');
        $quantity['smc_kg']    = Validate::validate_number($quantity['gas_smc'] / $quantity['kg_unload'], 'float');
        $quantity['gas_nmc']   = Validate::validate_number($quantity['volume_mc'] * $quantity['volume_nmc'], 'float');

        return $quantity;*/
            return $quantity ?: false;
    }
/*--------------------------------------------------------------------------------------------------------------- VALIDATION ---------------/ 
/                     ◦ validate_quantity_data (quantity)                                                                                   /
/------------------------------------------------------------------------------------------------------------------------------------------*/
    public function validate_quantity_data(array $quantity): array {
        $errors = [];

        //  Required fields 
        foreach (['kg_load', 'cooling', 'price_typology', 'kg_unload', 'liquid_density', 'gas_weight', 'pcs_ghv'] as $field) {
            if (!isset($quantity[$field]) || $quantity[$field] === '') {
                $errors[$field] = "Campo obbligatorio.";
            } 
        }

        //  Kg Load validation
        if (!Validate::validate_number($quantity['kg_load'], 'number') || 
            !Validate::validate_number($quantity['kg_load'], 'min')) {
            $errors['kg_load'] = "Quantità caricata deve essere un numero positivo (intero o decimale).";
        }

        //  Cooling validation
        if (!in_array($quantity['cooling'], ['600', '0'], true)) {
            $errors['cooling'] = "Selezionare un'opzione valida.";
        } 

        //  Price Typology validation
        if (!in_array($quantity['price_typology'], ['yes', 'no'], true)) {
            $errors['price_typology'] = "Selezionare un'opzione valida.";
        } elseif ($quantity['price_typology'] === 'yes') {
            //  Price Value validation
            if (!Validate::validate_number($quantity['price_value'], 'digits') ||
                !Validate::validate_number($quantity['price_value'], 'min', 1)) {
                    $errors['price_value'] = "Valore costo extra deve essere un numero intero positivo maggiore o uguale a 1, senza segni o decimali.";
            } elseif (!isset($quantity['price_value']) || empty($quantity['price_value'])) {
                $errors['price_value'] = "Campo obbligatorio.";
            }
        }

        //  Kg Unload validation
        if (!Validate::validate_number($quantity['kg_unload'], 'number') ||
            !Validate::validate_number($quantity['kg_unload'], 'min')) {
                $errors['kg_unload'] = "Quantità scaricata deve essere un numero positivo (intero o decimale).";
        } 

        //  Liquid Density validation
        if (!Validate::validate_number($quantity['liquid_density'], 'number') ||
            !Validate::validate_number($quantity['liquid_density'], 'min')) {
                $errors['liquid_density'] = "Densità liquido deve essere un numero positivo (intero o decimale).";
        } 

        //  Gas Weight validation
        if (!Validate::validate_number($quantity['gas_weight'], 'number') ||
            !Validate::validate_number($quantity['gas_weight'], 'min')) {
                $errors['gas_weight'] = "Peso specifico (gas) deve essere un numero positivo (intero o decimale).";
        } 

        //  PCS GHV validation
        if (!Validate::validate_number($quantity['pcs_ghv'], 'number') ||
            !Validate::validate_number($quantity['pcs_ghv'], 'min')) {
                $errors['pcs_ghv'] = "PCS/GHV deve essere un numero positivo (intero o decimale).";
        }

        return $errors;
    }
/*------------------------------------------------------------------------------------------------------------ QUANTITY CRUD ---------------/
/                     ◦ createQuantity (data)                                                                                               /
/                     ◦ updateQuantity (data)                                                                                               /
/------------------------------------------------------------------------------------------------------------------------------------------*/
    public function createQuantity(int $id, array $data, int $user): bool {
        $sql = "INSERT INTO `quantities` 
                    (kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, 
                        gas_weight, pcs_ghv, created, id_transport, id_user)
                VALUES 
                    (:kg_load, :cooling, :price_typology, :price_value, :kg_unload, :liquid_density, 
                        :gas_weight, :pcs_ghv, :created, :id_transport, :id_user);";

        $args = [
            'kg_load' => $data['kg_load'],        
            'cooling' => $data['cooling'],              
            'price_typology' => $data['price_typology'], 
            'price_value' => $data['price_value'], 
            'kg_unload' => $data['kg_unload'],
            'liquid_density' => $data['liquid_density'], 
            'gas_weight' => $data['gas_weight'], 
            'pcs_ghv' => $data['pcs_ghv'], 
            'created' => date('Y-m-d'), 
            'id_transport' => $id,
            'id_user' => $user
        ];       
                
        return (bool) $this->db->runSQL($sql, $args);
    }

    public function updateQuantity(array $data): bool {                                          
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
            'kg_load' => $data['kg_load'],        
            'cooling' => $data['cooling'],              
            'price_typology' => $data['price_typology'], 
            'price_value' => $data['price_value'], 
            'kg_unload' => $data['kg_unload'],
            'liquid_density' => $data['liquid_density'], 
            'gas_weight' => $data['gas_weight'], 
            'pcs_ghv' => $data['pcs_ghv'], 
            'modified' => date('Y-m-d'), 
            'modified_by' => $data['modified_by'],
            'id_quantity' => $data['id_quantity']
        ];       

        $update = $this->db->runSQL($sql, $args);   
            return $update->rowCount() > 0;                                            
    }
/*--------------------------------------------------------------------------------------------------------- COUNT AND SEARCH ---------------/ 
/                     ◦ sumUnloaded()                                                                                                       /
/                     ◦ count()                                                                                                             /
/                     ◦ searchCount($term)                                                                                                  /
/                     ◦ search($term)                                                                                                       /
/------------------------------------------------------------------------------------------------------------------------------------------*/ 
    public function sumUnloaded(): int {    
        $sql = "SELECT SUM(kg_unload)  
                FROM quantities";

        return (int) $this->db->runSQL($sql)->fetchColumn(); 
    }

    public function count(): int{
        $sql = "SELECT COUNT(id_quantity) 
                FROM quantities;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      
    }

    public function searchCount(string $term): int{
        $args['term1'] = $args['term2'] = "%$term%";        
        
        $sql = "SELECT COUNT(id_transport)
                FROM transports
                WHERE slot LIKE :term1 
                    OR cmr LIKE :term2;";                      
        
        return $this->db->runSQL($sql, $args)->fetchColumn(); 
    }

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
