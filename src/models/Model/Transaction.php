<?php
namespace Liquimet\Model;

class Transaction {
    protected $db;        
    
    public function __construct(Database $db){
        $this->db = $db;                                 
    }
    
//          --> ! CREATE TRANSACTION FOR INSERTING FULL TRANSPORTS ! <--
    public function createFull(array $transport, array $quantity): bool{
        try{                                                                                        
            $this->db->beginTransaction();
            
            // try to insert transport data
                $sql = "INSERT INTO transports 
                            (type, slot, cmr, issuer, supplier, transport, date_load, date_unload, 
                            container, note, id_user, id_category, seo, created, modified, modified_by)
                        VALUES 
                            (:type, :slot, :cmr, :issuer, :supplier, :transport, :date_load, :date_unload, 
                            :container, :note, :id_user, :id_category, :seo, :created, :modified, :modified_by);";
                            
                $this->db->runSQL($sql, $transport);
                $id = $this->db->lastInsertId();            
            
            // try to insert quantity data           
                $sql = "INSERT INTO quantities 
                            (kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, 
                            gas_weight, pcs_ghv, id_transport, id_user, created, modified, modified_by)
                        VALUES 
                            (:kg_load, :cooling, :price_typology, :price_value, :kg_unload, :liquid_density, 
                            :gas_weight, :pcs_ghv, $id, :id_user, :created, NULL, NULL);";
        
                $this->db->runSQL($sql, $quantity);           
            
            // commit inserted data (saved)
            $this->db->commit();                                      
                return true;                                 
        } catch(\PDOException $e){
            // rollback inserted data (not saved)
            $this->db->rollBack();
                
                if($e->errorInfo[1] === 1062){              // if an integrity constraint
                    return false;                           // return false
                } else{                                     // for all other reasons
                    throw $e;                               // re-throw exception
                }
        }
    }
   
//  ===>    CREATE TRANSACTION FOR INSERTING PARTIAL TRANSPORTS (transport + quantity + partials) 
    public function createPart(array $transport, array $partial): bool{
        try{                                                                                        
            $this->db->beginTransaction();
                
            //try to insert transport data
            $sql = "INSERT INTO `transports` 
                        (`type`, `slot`, `cmr`, `issuer`, `supplier`, `transport`, `date_load`, `date_unload`, 
                        `container`, `note`, `id_user`, `seo`)
                    VALUES 
                        (:type, :slot, :cmr, :issuer, :supplier, :transport, :date_load, :date_unload, 
                        :container, :note, :id_user, :seo);";
                            
            $this->db->runSQL($sql, $transport);
            $id = $this->db->lastInsertId();
                
            //try to insert quantity data           
            /*$sql = "INSERT INTO quantities 
                        (kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, 
                        gas_weight, pcs_ghv, id_transport, id_user)
                    VALUES 
                        (:kg_load, :cooling, :price_typology, :price_value, :kg_unload, :liquid_density, 
                        :gas_weight, :pcs_ghv, $id, :id_user);";
        
            $this->db->runSQL($sql, $quantity);       */    
            
            //try to insert partial data
            foreach($partial['destination'] as $key => $value){
                $sql = "INSERT INTO `partials`
                            (`destination`, `exw`, `date`, `place`, `q_unloaded`, `invoice`, `id_transport`, `id_user`)
                        VALUES
                            (:destination, :exw, :date, :place, :q_unloaded, :invoice, :id_transport, :id_user);";
                            
                $stmt = $this->db->prepare($sql); 
                $stmt->execute([
                    'destination' => $value,
                    'exw' => $partial['exw'][$key],
                    'date' => $partial['date'][$key],
                    'place' => $partial['place'][$key],
                    'q_unloaded' => $partial['q_unloaded'][$key],
                    'invoice' => $partial['invoice'][$key],
                    'id_transport' => $id,
                    'id_user' => 1
                ]);
            }    
                
            // commit inserted data (saved)
            $this->db->commit();                                      
                return true;                                 
        } catch(\PDOException $e){                                                                     // if exception was raised
            //$this->db->rollBack();
            $e->getMessage();
            throw $e;
            
            /*if($e->errorInfo[1] === 1062){              // if an integrity constraint
                return false;                           // return false
            } else{                                     // for all other reasons
                throw $e;                               // re-throw exception
            }*/
        }
    }


//          --> ! UPDATE TRANSACTION FOR FULL TRANSPORT ! <--
    public function updateFull(array $transport, array $quantity): bool{
        try{                                                                                        
            $this->db->beginTransaction();
            
            // try to update transport data
                unset($transport['type'], $transport['slot'], $transport['cmr'], $transport['issuer'], $transport['supplier'], $transport['transport'], 
                      $transport['date_load'], $transport['date_unload'], $transport['container'], $transport['note'], $transport['modified'], $transport['modified_by']);
                $sql = "UPDATE transports 
                        SET type = :type, slot = :slot, cmr = :cmr, issuer = :issuer, supplier = :supplier, transport = :transport,
                            date_load = :date_load, date_unload = :date_unload, container = :container, note = :note, 
                            modified = :modified, modified_by = :modified_by
                        WHERE id_transport = :id_transport;";
                        
                $this->db->runSql($sql, $transport)->rowCount();
            
            // try to update quantity data           
                $sql = "UPDATE quantities
                        SET kg_load = :kg_load, cooling = :cooling, price_typology = :price_typology, price_value = :price_value, 
                            kg_unload = :kg_unload, liquid_density = :liquid_density, gas_weight = :gas__weight, pcs_ghv = :pcs_ghv,
                            modified = :modified, modified_by = :modified_by 
                        WHERE id_transport = :id_transport;";
                            
                $this->db->runSql($sql, $quantity);           
            
            // commit inserted data
            $this->db->commit();                                      
                return true;                                 
        } catch(\PDOException $e){
            // rollback inserted data
            $this->db->rollBack();
                   
                if($e->errorInfo[1] === 1062){              // if an integrity constraint
                    return false;                           // return false
                } else{                                     // for all other reasons
                    throw $e;                               // re-throw exception
                }
        }
    }
    
//          --> ! UPDATE TRANSACTION FOR PARTIAL TRANSPORT ! <--
    public function updatePart(array $transport, array $quantity, array $partials): bool{
        try{                                                                                        
            $this->db->beginTransaction();
            
            // try to update transport data
                $sql = "UPDATE transports 
                        SET type = :type, slot = :slot, cmr = :cmr, issuer = :issuer, supplier = :supplier, transport = :transport,
                            date_load = :date_load, date_unload = :date_unload, container = :container, note = :note, 
                            modified = :modified, modified_by = :modified_by
                        WHERE id_transport = :id_transport;";
                        
                $this->db->runSql($sql, $transport);
            
            // try to update quantity data           
                $sql = "UPDATE quantities
                        SET kg_load = :kg_load, cooling = :cooling, price_typology = :price_typology, price_value = :price_value, 
                            kg_unload = :kg_unload, liquid_density = :liquid_density, gas_weight = :gas__weight, pcs_ghv = :pcs_ghv,
                            modified = :modified, modified_by = :modified_by
                        WHERE id_transport = :id_transport;";
                            
                $this->db->runSql($sql, $quantity);           
            
            // try to update partial data
                $sql = "UPDATE partials 
                        SET destination = :destination, exw = :exw, date = :date, place = :place, q_unloaded = :q_unloaded, 
                            invoice = :invoice, modified = :modified, modified_by = :modified_by
                        WHERE id_transport = :id_transport;";
                        
                $this->db->runSql($sql, $partials);   
            
            // commit inserted data
            $this->db->commit();                                     
                return true;                                 
        } catch(\PDOException $e){
            // rollback inserted data
            $this->db->rollBack();
                
                if($e->errorInfo[1] === 1062){              // if an integrity constraint
                    return false;                           // return false
                } else{                                     // for all other reasons
                    throw $e;                               // re-throw exception
                }
        }
    }
}
/*
// Start Transaction
$db->beginTransaction();

// Insert each record
foreach($test as $insertRow){

   // Prepare statement
   $stmt = $db->prepare("INSERT INTO mytable (column1, column2) VALUES (:blah, :whatever)");

   // now loop through each inner array to match binded values
   foreach($insertRow as $column => $value){
      $stmt->bindValue(":{$column}", $value);
   }

   // Execute statement to add to transaction
   $stmt->execute();

   // Clear statement for next record (not necessary, but good practice)
   $stmt = null;
}

// Commit all inserts
$db->commit();*/