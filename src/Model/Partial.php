<?php
namespace Liquimet\Model;
use Liquimet\Validate\Validate;

class Partial {
    protected $db;                                       

    public function __construct (Database $db) {
        $this->db = $db;                                 
    }

    public function validate_partial(array $partial, string $dateLoadStr, string $dateUnloadStr): array {
        $errors = [];

            //  Required fields check
            foreach (['destination', 'exw', 'place', 'q_unloaded', 'invoice'] as $field) {
                if (empty($partial[$field])) {
                    $errors[$field] = "Campo obbligatorio.";
                }
            }

            //  Destination validation
            if (!empty($partial['destination']) && !Validate::validate_string($partial['destination'], 'lettersSpaces')) {
                $errors['destination'] = "Destinazione può contenere lettere e spazi (senza spazio iniziale).";
            } elseif (!empty($partial['destination']) && !Validate::chars_length($partial['destination'], 3, 50)) {
                $errors['destination'] = "Usare almeno 3 e al massimo 50 caratteri.";
            } 

            //  Exw validation
            if (!empty($partial['exw']) && !Validate::validate_string($partial['exw'], 'letters')) {
                $errors['exw'] = "EXW può contenere solo lettere. Spazi non consentiti.";
            } 

            //  Place validation
            if (!empty($partial['place']) && !Validate::validate_string($partial['place'], 'lettersSpaces')) {
                $errors['place'] = "Luogo scarico può contenere lettere e spazi bianchi.";
            } elseif (!empty($partial['place']) && !Validate::chars_length($partial['place'], 3, 50)) {
                $errors['place'] = "Usare almeno 3 e al massimo 50 caratteri.";
            } 

            //  Q Unloaded validation
            if (!empty($partial['q_unloaded']) && !Validate::validate_number($partial['q_unloaded'], 'digits')) {
                $errors['q_unloaded'] = "";
            } 

            //  Invoice validation
            if (!empty($partial['invoice']) && !Validate::validate_number($partial['invoice'], 'digits')) {
                $errors['invoice'] = "";
            } 

            //  Date validation
            $dateErrors = $this->validate_partial_date($partial['date'] ?? '', $dateLoadStr ?? '', $dateUnloadStr ?? '');
            $errors = array_merge($errors, $dateErrors); 

        return $errors;
    }

    public function validate_partial_date(string $dateStr, string $dateLoadStr, string $dateUnloadStr): array {
        $errors = [];

        $partialDate = trim($dateStr);
        $dateLoad = trim($dateLoadStr);
        $dateUnload = trim($dateUnloadStr);

        $partialDate = \DateTime::createFromFormat('d-m-Y', $dateStr);
        $dateLoad = \DateTime::createFromFormat('d-m-Y', $dateLoadStr);
        $dateUnload = \DateTime::createFromFormat('d-m-Y', $dateUnloadStr);
        $today = new \DateTime('today');

            if (!$dateStr) {
                $errors['date'] = "Campo obbligatorio.";
            } elseif (!$partialDate || $partialDate->format('d-m-Y') !== $dateStr) {
                $errors['date'] = "Inserire una data valida.";
            } elseif ($partialDate > $today) {
                $errors['date'] = "Inserire una data valida. Non sono permesse date future.";
            } elseif ($dateLoad && $partialDate < $dateLoad) {
                $errors['date'] = "La data non può essere precedente alla data di carico del trasporto.";
            } elseif ($dateUnload && $partialDate > $dateUnload) {
                $errors['date'] = "La data non può essere successiva alla data di scarico del trasporto.";
            }

        return $errors;
    }

/**********************************************************
 * SELECT statements to get transports 
 *    Get Partial By ID             => get($id)
 *    Get All Partials by Transport ID     => getParts($id)
 *    Get Platform Transports      => getAllTransports()
 *    Get All Full Transports      => getFull()
 *    Get All Partial Transports   => getPartial()  
 *********************************************************/ 
    public function get(int $id){
        $sql = "SELECT id_partial, destination, exw, date, place, q_unloaded, invoice, id_transport, id_user
                FROM `partials`
                WHERE id_partial = :id_partial";
        
        return $this->db->runSQL($sql, ['id_partial' => $id])->fetch();  
    }
    
//  ===> GET ALL PARTIALS    [select all partials]
    public function getAll(): array{       
        $sql = "SELECT p.id_partial, p.destination, p.exw, p.date, p.place, p.q_unloaded, p.invoice, p.id_transport
                FROM `partials` AS p
                JOIN `transports` AS t ON p.id_transport = t.id_transport
                    ORDER BY t.id_transport DESC;";
                
        return $this->db->runSQL($sql)->fetchAll(); 
    } 

//  ===> GET ALL PARTIALS BY TRANSPORT ID
    public function getPartByTransportID(int $id): array {      
        $sql = "SELECT p.id_partial, p.destination, p.exw, p.date, p.place, p.q_unloaded, p.invoice, 
                       t.id_transport,
                       u.username AS author
                FROM `partials` AS p
                LEFT JOIN `transports`  AS t ON t.id_transport = p.id_transport
                LEFT JOIN `users`       AS u ON t.id_user = u.id_user
                WHERE t.id_transport = :id_transport;";

        return $this->db->runSQL($sql, ['id_transport' => $id])->fetchAll(); 
    }

    public function createPartial(int $id, array $data, int $user): bool {
        $sql = "INSERT INTO `partials` 
                    (destination, exw, date, place, q_unloaded, invoice, created, id_transport, id_user)
                VALUES 
                    (:destination, :exw, :date, :place, :q_unloaded, :invoice, :created, :id_transport, :id_user)";

        $args = [
            'destination'  => $data['destination'],        
            'exw'          => $data['exw'],  
            'date'         => $data['date'],           
            'place'        => $data['place'],
            'q_unloaded'   => $data['q_unloaded'],
            'invoice'      => $data['invoice'], 
            'created'      => date('Y-m-d'),
            'id_transport' => $id,
            'id_user'      => $user
        ];        
                
        return (bool) $this->db->runSQL($sql, $args);
    }

//  ** [U P D A T E] - [D E L E T E]     S T A T E M E N T S **
//  ===> UPDATE PARTIAL BY ID    [update single]
public function update(array $data, int $user): bool {                                          
    $sql = "UPDATE `partials`
            SET destination = :destination, 
                exw = :exw, 
                date = :date, 
                place = :place, 
                q_unloaded = :q_unloaded, 
                invoice = :invoice, 
                modified = :modified, 
                modified_by = :modified_by
            WHERE id_partial = :id_partial"; 

    $args = [
        'id_partial' => $data['id_partial'],
        'destination' => $data['destination'],        
        'exw' => $data['exw'],              
        'date' => $data['date'], 
        'place' => $data['place'], 
        'q_unloaded' => $data['q_unloaded'],
        'invoice' => $data['invoice'],
        'modified' => date('Y-m-d'), 
        'modified_by' => $user
    ];     

        $update = $this->db->runSQL($sql, $args);   
            return $update->rowCount() !== false;                                                
    }

//  ===> DELETE PARTIAL BY ID    [delete single - only admin]
    public function delete(int $id): bool{
        $sql = "DELETE FROM partials
                WHERE id_partial = :id_partial;";    
        
        $this->db->runSQL($sql, [$id]);                  
            return true;                                     
    }

//  ** [C O U N T]     S T A T E M E N T S **
//  ===> COUNT ALL PARTIALS      
    public function count(): int{
        $sql = "SELECT COUNT(id_partial) 
                FROM partials;";    
             
        return $this->db->runSQL($sql)->fetchColumn();                      
    }

    public function totalPartials($id): int {
        $sql = "SELECT COUNT(id_partial) 
                FROM `partials`
                WHERE id_transport = :id";


        return (int) $this->db->runSQL($sql, ['id' => $id])->fetchColumn();      
    }
}
