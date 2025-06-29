<?php
namespace Liquimet\Model;

class Transaction {
    protected $db;        
    
    public function __construct(Database $db){
        $this->db = $db;                                 
    }
    
//  ===> CREATE TRANSACTION FOR INSERTING FULL TRANSPORTS   
    public function createFull(array $transport, array $quantity): bool{
        try{                                                                                        
            $this->db->beginTransaction();
            
                //  Try to insert transport data
                $sql = "INSERT INTO `transports` 
                            (type, slot, cmr, issuer, supplier, transport, date_load, 
                                date_unload, container, seo, created, id_user)
                        VALUES 
                            (:type, :slot, :cmr, :issuer, :supplier, :transport, :date_load, 
                                :date_unload, :container, :seo, :created, :id_user)";
                            
                $this->db->runSQL($sql, $transport);
                $id = $this->db->lastInsertId();            
            
                //  Try to insert quantity data           
                $sql = "INSERT INTO `quantities` 
                            (kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, 
                                gas_weight, pcs_ghv, created, id_transport, id_user)
                        VALUES 
                            (:kg_load, :cooling, :price_typology, :price_value, :kg_unload, :liquid_density, 
                                :gas_weight, :pcs_ghv, :created, $id, :id_user);";
        
                $this->db->runSQL($sql, $quantity);           
            
            //  Commit inserted data [saved]
            $this->db->commit();                                      
                return true;                                 
        } catch(\PDOException $e){
            //  Rollback inserted data [not saved]
            $this->db->rollBack();
                
                if($e->errorInfo[1] === 1062){              //if an integrity constraint
                    return false;                           //return false
                } else{                                     //for all other reasons
                    throw $e;                               //re-throw exception
                }
        }
    }

//  ===> CREATE TRANSACTION FOR INSERTING PARTIAL TRANSPORTS     
    public function createPart(array $transport, array $quantity, array $partials): bool{
        try{                                                                                        
            $this->db->beginTransaction();
                
                //try to insert transport data
                $sql = "INSERT INTO transports 
                            (type, slot, cmr, issuer, supplier, transport, date_load, date_unload, 
                            container, note, seo, created, id_user)
                        VALUES 
                            (:type, :slot, :cmr, :issuer, :supplier, :transport, :date_load, :date_unload, 
                            :container, :note, :seo, :created, :id_user);";
                            
                $this->db->runSQL($sql, $transport);
                $id = $this->db->lastInsertId();
                
                //try to insert quantity data           
                $sql = "INSERT INTO quantities 
                            (kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, 
                            gas_weight, pcs_ghv, created, id_transport, id_user)
                        VALUES 
                            (:kg_load, :cooling, :price_typology, :price_value, :kg_unload, :liquid_density, 
                            :gas_weight, :pcs_ghv, :created, $id, :id_user);";
        
                $this->db->runSQL($sql, $quantity);           
                
                //try to insert partial data   
                foreach($partials['destination'] as $key => $value){
                    $sql = "INSERT INTO partials 
                                (destination, exw, date, place, q_unloaded, invoice, created, id_transport, id_user)
                            VALUES 
                                (:destination, :exw, :date, :place, :q_unloaded, :invoice, :created, :id_transport, :id_user);";
                
                    $stmt = $this->db->prepare($sql);
                    $stmt->execute([
                        'destination' => $value,
                        'exw' => $partials['exw'][$key],
                        'date' => $partials['date'][$key],
                        'place' => $partials['place'][$key],
                        'q_unloaded' => $partials['q_unloaded'][$key],
                        'invoice' => $partials['invoice'][$key],
                        'created' => date("Y-m-d")[$key],
                        'id_transport' => $id,
                        'id_user' => $partials['id_user']
                    ]);
                }

            //commit inserted data (save)
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

//  ===> UPDATE TRANSACTION FOR FULL TRANSPORTS  
    public function updateFull(array $transport, array $quantity): bool{
        try{                                                                                        
            $this->db->beginTransaction();
            
                //try to update transport data
                $sql = "UPDATE transports 
                        SET slot = :slot, cmr = :cmr, issuer = :issuer, supplier = :supplier, transport = :transport,
                            date_load = :date_load, date_unload = :date_unload, container = :container, note = :note, id_user = :id_user,
                            seo = :seo
                        WHERE id_transport = :id_transport;";
                        
                $this->db->runSQL($sql, $transport);
            
                //try to update quantity data             
                $sql = "UPDATE quantities
                        SET kg_load = :kg_load, cooling = :cooling, price_typology = :price_typology, price_value = :price_value, 
                            kg_unload = :kg_unload, liquid_density = :liquid_density, gas_weight = :gas_weight, pcs_ghv = :pcs_ghv,
                            id_user = :id_user 
                        WHERE id_transport = :id_transport;";
                            
                $this->db->runSQL($sql, $quantity);           
            
            // commit inserted data
            $this->db->commit();                                      
                return true;                                 
        } catch(\PDOException $e){
            //$this->db->rollBack();
            $e->getMessage();
                throw $e;
        }
    }
    
//  ===> UPDATE TRANSACTION FOR PARTIAL TRANSPORTS 
    public function updatePart(array $transport, array $quantity, array $partials): bool{
        try{                                                                                        
            $this->db->beginTransaction();
            
                //try to update transport data
                $sql = "UPDATE transports 
                        SET slot = :slot, cmr = :cmr, issuer = :issuer, supplier = :supplier, transport = :transport,
                            date_load = :date_load, date_unload = :date_unload, container = :container, note = :note, id_user = :id_user,
                            seo = :seo
                        WHERE id_transport = :id_transport;";
                        
                $this->db->runSQL($sql, $transport);
            
                //try to update quantity data             
                $sql = "UPDATE quantities
                        SET kg_load = :kg_load, cooling = :cooling, price_typology = :price_typology, price_value = :price_value, 
                            kg_unload = :kg_unload, liquid_density = :liquid_density, gas_weight = :gas_weight, pcs_ghv = :pcs_ghv,
                            id_user = :id_user 
                        WHERE id_transport = :id_transport;";
                            
                $this->db->runSQL($sql, $quantity);          
            
                //try to insert partial data  
                foreach($partials['destination'] as $key => $value){
                    $sql = "UPDATE partials 
                            SET destination = :destination, exw = :exw, date = :date, place = :place, 
                                q_unloaded = :q_unloaded, invoice = :invoice, id_user = :id_user
                            WHERE id_transport = :id_transport;";
                            
                    //$this->db->runSQL($sql, $partials); 
                    $stmt = $this->db->prepare($sql);
                    $stmt->execute([
                        'destination' => $value,
                        'exw' => $partials['exw'][$key],
                        'date' => $partials['date'][$key],
                        'place' => $partials['place'][$key],
                        'q_unloaded' => $partials['q_unloaded'][$key],
                        'invoice' => $partials['invoice'][$key],
                        'id_user' => $partials['id_user'],
                        'id_transport' => $partials['id_transport']
                    ]);
                }
            
            //commit inserted data
            $this->db->commit();                                     
                return true;                                 
        } catch(\PDOException $e){                                                                     //if exception was raised
            //$this->db->rollBack();
            $e->getMessage();
                throw $e;
        }
    }

//  ===> BROWSE TRANSACTION FOR UPLOADING .CSV FILES
    public function importCSV(string $path, int $user): bool{
        $sql = 'LOAD DATA LOCAL INFILE " ' . $path . ' "
                INTO TABLE #csv
                FIELDS TERMINATED BY ","
                LINES TERMINATED BY "\r\n"
                IGNORE 1 LINES (
                    type, @slot, cmr, issuer, supplier, transport, date_load, date_unload, container, note, seo,
                    kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, gas_weight, pcs_ghv,
                    destination, exw, date, place, q_unloaded, invoice, created
                )
                SET seo = SUBSTRING(@slot, -4),
                    @id_user = " ' . $user . ' " 
                ';

            $this->db->runSQL($sql);
                return true;
    }

    public function importDataCSV(array $result): bool{
        try{                                                                                        
            $this->db->beginTransaction();
            
                //try to insert transport data from csv file
                $result['transport'] = "INSERT INTO transports 
                            (type, slot, cmr, issuer, supplier, transport, date_load, date_unload, 
                            container, note, seo, created, id_user)
                        SELECT type, slot, cmr, issuer, supplier, transport, date_load, date_unload, 
                            container, note, seo, created, @id_user
                        FROM '#csv';";
                        
                $this->db->runSQL($result['transport']);
                $id = $this->db->lastInsertId();

                //try to insert quantity data from csv file           
                $result['quantity'] = "INSERT INTO quantities 
                            (kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, 
                            gas_weight, pcs_ghv, created, id_transport, id_user)
                        SELECT kg_load, cooling, price_typology, price_value, kg_unload, liquid_density, 
                            gas_weight, pcs_ghv, created, $id, @id_user
                        FROM '#csv';";
        
                $this->db->runSQL($result['quantity']);           
                
                //try to insert partial data from csv file   
                foreach($result['destination'] as $key => $value){
                    $sql = "INSERT INTO partials 
                                (destination, exw, date, place, q_unloaded, invoice, created, id_transport, id_user)
                            SELECT destination, exw, date, place, q_unloaded, invoice, created, @id_transport, @id_user
                            FROM '#csv';";
                
                    $stmt = $this->db->prepare($sql);
                    $stmt->execute([
                        'destination' => $value,
                        'exw' => $result['exw'][$key],
                        'date' => $result['date'][$key],
                        'place' => $result['place'][$key],
                        'q_unloaded' => $result['q_unloaded'][$key],
                        'invoice' => $result['invoice'][$key],
                        'created' => date("Y-m-d")[$key],
                        'id_transport' => $id,
                        'id_user' => $result['id_user']
                    ]);
                }

                    //commit inserted data
                    $this->db->commit();                                     
                        return true;                                 
            } catch(\PDOException $e){                                                                     //if exception was raised
            //$this->db->rollBack();
                $e->getMessage();
                throw $e;
            }
    }
}

