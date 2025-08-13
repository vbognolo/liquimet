<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Model\Transport;
use Liquimet\Model\Quantity;
use Liquimet\Model\Partial;
use Liquimet\Validate\Validate;

class TransportCRUDController {
    private $twig;
    private $session;
    private $mUser;
    private $mTrans;
    private $mQty;
    private $mPart;

    public function __construct(Environment $twig, Session $session, User $mUser, Transport $mTrans, Quantity $mQty, Partial $mPart) {
        $this->twig = $twig;
        $this->session = $session;
        $this->mUser = $mUser;
        $this->mTrans = $mTrans;
        $this->mQty = $mQty;
        $this->mPart = $mPart;
    }

/*------------- TRANSPORT CRUD ----------------/
/           ◦ createTransport()                /
/           ◦ editTransport($id)               /
/           ◦ deleteTransport($id)             /
/           ◦ totalTransports(?$type)          /
/---------------------------------------------*/ 
    public function createTransport() {
        $this->session->requireLogin();

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                header('Content-Type: application/json; charset=utf-8');
                $csrfToken = $_POST['csrf_token'] ?? '';

                    if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                        echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                        exit;
                    }

                //  Sanitize transport input data
                $transport = [
                    'type'         => Validate::validate_input($_POST['type']),
                    'slot'         => Validate::validate_input($_POST['slot']),
                    'cmr'          => Validate::validate_input($_POST['cmr']),
                    'issuer'       => Validate::validate_input($_POST['issuer']),               
                    'supplier'     => Validate::validate_input($_POST['supplier']),
                    'transport'    => Validate::validate_input($_POST['transport']),
                    'date_load'    => Validate::validate_input($_POST['date_load']),
                    'date_unload'  => Validate::validate_input($_POST['date_unload']),
                    'container'    => Validate::validate_input($_POST['container'])
                ]; 
                
                //  Field validation
                $errors = $this->mTrans->validate_transport($transport);

                    if (empty($errors['date_load']) && empty($errors['date_unload'])) {
                        //  Overwrite transport dates with formatted versions (converts to SQL format)
                        $dateLoadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_load']);
                        $dateUnloadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_unload']);

                        $transport['date_load'] = $dateLoadObj->format('Y-m-d');
                        $transport['date_unload'] = $dateUnloadObj->format('Y-m-d');
                    }

                    //  If validation errors, proceed with error messages 
                    if (!empty($errors)) {
                        echo json_encode(['success' => false, 'errors' => $errors]);
                        exit;
                    }  

                //  Sanitize quantity input data
                $quantity = [
                    'kg_load'         => Validate::validate_input($_POST['kg_load']) ?? '',
                    'cooling'         => Validate::validate_input($_POST['cooling']) ?? '',
                    'price_typology'  => Validate::validate_input($_POST['price_typology']) ?? '',
                    'price_value'     => Validate::validate_input($_POST['price_value'] ?? 0),
                    'kg_unload'       => Validate::validate_input($_POST['kg_unload']) ?? '',
                    'liquid_density'  => Validate::validate_input($_POST['liquid_density']) ?? '',
                    'gas_weight'      => Validate::validate_input($_POST['gas_weight']) ?? '',
                    'pcs_ghv'         => Validate::validate_input($_POST['pcs_ghv']) ?? ''
                ];

                $errors = $this->mQty->validate_quantity($quantity);

                    //  If validation errors, proceed with error messages 
                    if (!empty($errors)) {
                        echo json_encode(['success' => false, 'errors' => $errors]);
                        exit;
                    }  

                // Optional note
                $note = trim($_POST['note'] ?? '');
                $note = !empty($note) ? Validate::validate_input($note) : null;

                //  Save transport + quantity in transaction
                try {
                    $this->mTrans->begin();
                    
                        $this->mTrans->createTransport($transport, $this->session->getID());
                        $lastID = $this->mTrans->getLastInsertId();

                        $this->mQty->createQuantity($lastID, $quantity, $this->session->getID());

                        // Create partials if type === 'P'
                        if ($transport['type'] === 'P') {
                            $partials = [];

                            foreach ($_POST['destination'] as $i => $v) {
                                $partials[] = [
                                    'destination'  => Validate::validate_input($_POST['destination'][$i] ?? ''),
                                    'exw'          => Validate::validate_input($_POST['exw'][$i] ?? ''),
                                    'date'         => Validate::validate_input($_POST['date'][$i] ?? ''),
                                    'place'        => Validate::validate_input($_POST['place'][$i] ?? ''),
                                    'q_unloaded'   => Validate::validate_input($_POST['q_unloaded'][$i] ?? ''),
                                    'invoice'      => Validate::validate_input($_POST['invoice'][$i] ?? '')
                                ];
                            }

                            // Validate all partials
                            $partialErrors = [];
                            foreach ($partials as $index => $partial) {
                                $errors = $this->mPart->validate_partial($partial, $_POST['date_load'], $_POST['date_unload']);
                                if (!empty($errors)) {
                                    // Prefix keys with index for proper jQuery mapping
                                    foreach ($errors as $field => $message) {
                                        $partialErrors["{$field}[{$index}]"] = $message;
                                    }
                                }
                            }

                            if (!empty($partialErrors)) {
                                echo json_encode(['success' => false, 'errors' => $partialErrors]);
                                $this->mTrans->rollBack();
                                exit;
                            }

                            // Save each validated partial
                            foreach ($partials as $partial) {
                                $this->mPart->createPartial($lastID, $partial, $this->session->getID());
                            }
                        }

                        // Insert note if present
                        /*if ($note) {
                            $this->mTrans->saveNotes($lastID, $note, $userID);
                        }*/


                    $this->mTrans->commit();
                    echo json_encode(['success' => true, 'csrf_token' => $csrfToken, 'created' => $lastID]);
                } catch (\PDOException $e) {
                    $this->mTrans->rollBack();
                    echo json_encode([
                        'success' => false, 
                        'message' => 'An unexpected error occurred while saving the transport. Please try again.'
                    ]);
                }
                exit;
            }
    }

    public function editTransport(){
        $this->session->requireLogin();
            $csrfToken = $_POST['csrf_token'] ?? '';
            
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit;
            }
    
        $id = isset($_POST['id_transport']) ? (int) $_POST['id_transport'] : 0;
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                exit;
            }

        $transport = [
            'slot' => Validate::validate_input($_POST['slot']),
            'cmr' => Validate::validate_input($_POST['cmr']),
            'issuer' => Validate::validate_input($_POST['issuer']),               
            'supplier' => Validate::validate_input($_POST['supplier']),
            'transport' => Validate::validate_input($_POST['transport']),
            'date_load' => Validate::validate_date($_POST['date_load']),//date_format(new \DateTime($_POST['date_load']), 'Y-m-d'),
            'date_unload' => Validate::validate_input($_POST['date_unload']),//date_format(new \DateTime($_POST['date_unload']), 'Y-m-d'),
            'container' => Validate::validate_input($_POST['container'])
        ]; 

        //  Merge in date-speciic validation errors
        $dateErrors = $this->mTrans->validate_dates($transport['date_load'], $transport['date_unload']);
            if (!empty($dateErrors)) {
                echo json_encode(['success' => false, 'errors' => $dateErrors]);
                exit;
            }

        //  Overwrite transport dates with formatted versions
        $dateLoadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_load']);
        $dateUnloadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_unload']);

        $transport['date_load'] = $dateLoadObj->format('Y-m-d');
        $transport['date_unload'] = $dateUnloadObj->format('Y-m-d');
        
        $errors = $this->mTrans->validate_transport($transport);

        $slot = Validate::validate_input($_POST['original_slot']);
        $cmr = Validate::validate_input($_POST['original_cmr']);

            if ($transport['slot'] !== $slot && $this->mTrans->check_transport_existance('slot', $transport['slot'], $id)) {
                $errors['slot'] = "Slot ID già in uso."; 
            }
        
            if ($transport['cmr'] !== $cmr && $this->mTrans->check_transport_existance('cmr', $transport['cmr'], $id)) {
                $errors['cmr'] = "Numero CMR già in uso."; 
            }
      
        //  If no errors, proceed with user update
        if (empty($errors)) {
            $transport['id_transport'] = $id;
            $updated = $this->mTrans->update($id,$transport, $this->session->getID());
    
            if ($updated) {
                $edited = $this->mTrans->get($id);          // Re-fetch updated user
                $edited['date_load'] = Validate::formatDateForView($edited['date_load'], 'd/m/Y');
                $edited['date_unload'] = Validate::formatDateForView($edited['date_unload'], 'd/m/Y');

                header('Content-Type: application/json; charset=utf-8');
                    echo json_encode([
                        'success' => true,
                        'csrf_token' => $csrfToken,
                        'edited' => $edited
                    ]);
                    exit();
            } else {
                echo json_encode(["success" => false, "message" => "Errore nell'aggiornamento dei dati."]);
                exit();
            }   
        } else {
            echo json_encode(['success' => false, 'errors' => $errors]);
        }
        exit;
    }

    public function editQuantity(){
        $this->session->requireLogin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            //  Ensure CSRF token exists before validation
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit;
            }
    
        $id = (int) (Validate::validate_input($_POST['id_quantity']) ?? 0); //isset($_POST['id_quantity']) ? (int) $_POST['id_quantity'] : 0;
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Quantità non trovata.']);
                exit;
            }

        $quantity = [
            'id_quantity'       => $id,
            'kg_load'           => Validate::validate_input($_POST['kg_load']) ?? '',
            'cooling'           => Validate::validate_input($_POST['cooling']) ?? null,
            'price_typology'    => Validate::validate_input($_POST['price_typology']) ?? '',
            'price_value'       => Validate::validate_input($_POST['price_value'] ?? 0),
            'kg_unload'         => Validate::validate_input($_POST['kg_unload']) ?? '',
            'liquid_density'    => Validate::validate_input($_POST['liquid_density']) ?? '',
            'gas_weight'        => Validate::validate_input($_POST['gas_weight']) ?? '',
            'pcs_ghv'           => Validate::validate_input($_POST['pcs_ghv']) ?? '',
            'id_transport'      => Validate::validate_input($_POST['id_transport']) ?? ''
        ]; 

        $errors = $this->mQty->validate_quantity($quantity);
            //  If no errors, proceed with user update
            if (!empty($errors)) {
                echo json_encode(['success' => false, 'errors' => $errors]);
                exit;
            }

        $updated = $this->mQty->update($quantity, $this->session->getID());

            if ($updated) {
                $data = $this->mQty->get((int) $quantity['id_transport']);
                    echo json_encode(['success' => true, 'csrf_token' => $csrfToken, 'updated' => $data]);
            } else {
                echo json_encode(['success' => false, 'message' => "Errore nell'aggiornamento dei dati."]);
            }
            exit;
    }

    public function editPartial(){
        $this->session->requireLogin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit;
            }
    
        $id = (int) (Validate::validate_input($_POST['id_partial']) ?? 0);
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Scarico parziale non trovato.']);
                exit;
            }

        $partial = [
            'id_partial'  => $id,
            'destination' => Validate::validate_input($_POST['destination']) ?? '',
            'exw'         => Validate::validate_input($_POST['exw']) ?? null,
            'date'        => trim($_POST['date']) ?? '',
            'place'       => Validate::validate_input($_POST['place'] ?? 0),
            'q_unloaded'  => Validate::validate_input($_POST['q_unloaded']) ?? '',
            'invoice'     => Validate::validate_input($_POST['invoice']) ?? ''
        ]; 

        $id_transport = $this->mPart->get($partial['id_partial'])['id_transport'];
        $transport = $this->mTrans->get($id_transport);

        $dateLoadStr = \DateTime::createFromFormat('d-m-Y', $transport['date_load']);
        $dateUnloadStr = \DateTime::createFromFormat('d-m-Y', $transport['date_unload']);

        $errors = $this->mPart->validate_partial($partial, $dateLoadStr, $dateUnloadStr);
            //  If no errors, proceed with user update
            if (!empty($errors)) {
                echo json_encode(['success' => false, 'errors' => $errors]);
                exit;
            }

        $partial['date'] = Validate::validate_date($partial['date']);
            if ($partial['date'] === null) {
                echo json_encode(['success' => false, 'errors' => ['date' => 'Data non valida']]);
                exit;
            }
                
        $modified = $this->mPart->update($partial, $this->session->getID());
            
            if ($modified) {
                $data = $this->mPart->get((int) $partial['id_partial']);
                    echo json_encode(['success' => true, 'csrf_token' => $csrfToken, 'modified' => $data]);
            } else {
                echo json_encode(['success' => false, 'message' => "Errore nell'aggiornamento dei dati."]);
            }
            exit;
    }

    public function editNote() {
        $this->session->requireLogin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit;
            }
    
        $id = (int) Validate::validate_input($_POST['id_note'] ?? 0);
        $trans = (int) Validate::validate_input($_POST['id_transport'] ?? 0); 
        $content = Validate::validate_input($_POST['note'] ?? '');
        
            if (!$id || !$trans) {
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                exit;
            }   

        $saved = $this->mTrans->saveNotes($id, $trans, $this->session->getID(),$content);

            if ($saved) {
                $notes = $this->mTrans->getNote($id);
                    header('Content-Type: application/json; charset=utf-8');
                    echo json_encode(['success' => true, 'csrf_token' => $csrfToken, 'notes' => $notes]);
            } else {
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode(['success' => false, 'message' => "Errore nell'aggiornamento dei dati."]);
            }
            exit;
    }    

    public function handleDeleteTransport() {
        $this->session->requireAdmin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit;
            }
    
        $id = (int) Validate::validate_input($_POST['id_transport'] ?? 0); 
            if (!$id) {
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                exit;
            }   

        $delete = $this->mTrans->deleteTransport($id);

            if ($delete) {
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode(['success' => true]);
            } else {
                header('Content-Type: application/json; charset=utf-8');
                echo json_encode(['success' => false, 'message' => "Errore nell'aggiornamento dei dati."]);
            }
            exit;
    }   
}