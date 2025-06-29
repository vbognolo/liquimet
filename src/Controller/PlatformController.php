<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Model\Transport;
use Liquimet\Model\Quantity;
use Liquimet\Validate\Validate;

class PlatformController {
    private $twig;
    private $session;
    private $mUser;
    private $mTrans;
    private $mQty;

    public function __construct(Environment $twig, Session $session, User $mUser, Transport $mTrans, Quantity $mQty) {
        $this->twig = $twig;
        $this->session = $session;
        $this->mUser = $mUser;
        $this->mTrans = $mTrans;
        $this->mQty = $mQty;
    }

/******************************************************
 *  Render Transports Pages:
 *      Platform
 *      Full Transports
 *      Partial Transports
 *      Transport Modals
 *      New Transport
 ******************************************************/
    public function renderPlatformPage() {
        $this->session->requireLogin();
        $transports = $this->mTrans->getAllTransports();

            $sessionData = [ 'id_user'  => $this->session->getID(),
                             'username' => $this->session->getUsername(),
                             'name'     => $this->session->getName(),
                             'role'     => $this->session->getRole()
                            ];

        $data = [ 'session'     => $sessionData,
                  'transports'  => $transports,
                  'total'       => $this->mTrans->totalTransport()
                ];

        echo $this->twig->render('platform.twig', $data);
    }

    public function renderFullTransportsPage() {
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();
        $fulls = $this->mTrans->getFull();
        $type = 'F';

            $sessionData = [ 'username' => $this->session->getUsername(),
                             'name'     => $this->session->getName(),
                             'role'     => $this->session->getRole()
                            ];

        $data = [ 'session'     => $sessionData,
                  'user'        => $this->mUser->get($this->session->getID()),
                  'transports'  => $fulls,
                  'total'       => $this->mTrans->totalTransports($type),
                  'csrf_token'  => $csrfToken
                ];

        echo $this->twig->render('transports-full.twig', $data);
    }

    public function renderPartTransportsPage() {
        $this->session->requireLogin();
        $partials = $this->mTrans->getPartial();
        $type = 'P';

            $sessionData = [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'role' => $this->session->getRole()
            ];

        $data = [
                // Fetch Login And Session Data
            'session' => $sessionData,
                // Fetch Platform Table Data
            'transports' => $partials,
            'total' => $this->mTrans->totalTransports($type)
        ];

        echo $this->twig->render('transports-part.twig', $data);
    }

    public function renderTransportModals (){
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();

        echo $this->twig->render('transport-modal.twig', ['csrf_token' => $csrfToken]);
    }

    public function renderNewTransportPage() {
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();

            $sessionData = [ 'id_user'  => $this->session->getID(),
                             'username' => $this->session->getUsername(),
                             'name'     => $this->session->getName(),
                             'role'     => $this->session->getRole()
                            ];

        $data = [ 'session'     => $sessionData,
                  'csrf_token'  => $csrfToken
                ];

        echo $this->twig->render('transport.twig', $data);
    }

/*************************************************************
 *  Get Data For Transport Pages:
 *      Get Transport By ID             => getTransportData()
 *      Get Quantity By Transport ID    => getQuantityData()
 *      Partial Transports
 *      Transport Modals
 *      
 *************************************************************/
    public function getTransportData(){
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

        $transport = $this->mTrans->get($id);

            if ($transport) {
                header('Content-Type: application/json');
                echo json_encode([
                    'success'   => true,
                    'transport' => [
                        'id_transport' => $transport['id_transport'],
                        'slot'         => $transport['slot'],
                        'cmr'          => $transport['cmr'],
                        'issuer'       => $transport['issuer'],
                        'supplier'     => $transport['supplier'],
                        'transport'    => $transport['transport'],
                        'date_load'    => Validate::formatDateForView($transport['date_load'], 'd-m-Y'),
                        'date_unload'  => Validate::formatDateForView($transport['date_unload'], 'd-m-Y'), 
                        'container'    => $transport['container'],
                        'modified'     => Validate::formatDateForView(date('Y-m-d'), 'd-m-Y')
                    ],
                    'csrf_token' => $csrfToken
                ]);
                exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                exit;
            }
    }

    public function getQuantityData(){
        $this->session->requireLogin();
        $csrfToken = $_POST['csrf_token'] ?? '';

            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit;
            }
                
        $id = isset($_POST['id_transport']) ? (int) $_POST['id_transport'] : 0;

            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Quantita non trovata.']);
                exit;
            }

        $quantity = $this->mQty->get($id);

            if ($quantity) {
                header('Content-Type: application/json');
                    echo json_encode([
                        'success' => true,
                        'quantity' => [
                            'id_quantity' => $quantity['id_quantity'],
                            'kg_load' => $quantity['kg_load'],
                            'cooling' => $quantity['cooling'],
                            'price_typology' => $quantity['price_typology'],
                            'price_value' => $quantity['price_value'],
                            'kg_unload' => $quantity['kg_unload'],
                            'liquid_density' => $quantity['liquid_density'],
                            'gas_weight' => $quantity['gas_weight'],
                            'pcs_ghv' => $quantity['pcs_ghv'], 
                            'mwh' => $quantity['mwh'],
                            'mj_kg' => $quantity['mj_kg'],
                            'volume_mc' => $quantity['volume_mc'],
                            'volume_nmc' => $quantity['volume_nmc'],
                            'smc_mc' => $quantity['smc_mc'],
                            'gas_nmc' => $quantity['gas_nmc'],
                            'gas_smc' => $quantity['gas_smc'],
                            'smc_kg' => $quantity['smc_kg'],
                            'id_transport' => $quantity['id_transport'],
                            'modified' => Validate::formatDateForView(date('Y-m-d'), 'd-m-Y')
                        ],
                        'csrf_token' => $csrfToken
                    ]);
                    exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Quantità non trovata.']);
                exit;
            }
    }

    public function getTransportNotes(){
        $this->session->requireLogin();
        $csrfToken = $_POST['csrf_token'] ?? '';

            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit;
            }
                
        $id = (int) ($_POST['id_transport']);
            if (!$id) {
                echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                exit;
            }

        $notes = $this->mTrans->getNote($id);

            if (!empty($notes)) {
                header('Content-Type: application/json');
                    echo json_encode([
                        'success' => true,
                        'notes' => $notes,
                        'id' => $id,
                        'id_note' => $notes['id_note'],
                        'csrf_token' => $csrfToken
                    ]);
                    exit;
            } 
    }

/**********************************************************
 *  Handlers For CRUD Operations:
 *      Create New Transport    => handleCreateTransport()
 *      Edit Transport          => handleEditTransport()
 *      
 *      Partial Transports
 *      Transport Modals
 *      
 **********************************************************/
    public function handleCreateTransport() {
        $this->session->requireLogin();
        
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $csrfToken = $_POST['csrf_token'] ?? '';

                    if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                        echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                        exit;
                    }

                //  Prepare transport data
                $transport = [
                    'type'          => Validate::validate_input($_POST['type']),
                    'slot'          => Validate::validate_input($_POST['slot']),
                    'cmr'           => Validate::validate_input($_POST['cmr']),
                    'issuer'        => Validate::validate_input($_POST['issuer']),               
                    'supplier'      => Validate::validate_input($_POST['supplier']),
                    'transport'     => Validate::validate_input($_POST['transport']),
                    'date_load'     => Validate::validate_input($_POST['date_load']),
                    'date_unload'   => Validate::validate_input($_POST['date_unload']),
                    'container'     => Validate::validate_input($_POST['container'])
                ]; 

                //  Validate dates
                $dateErrors = $this->mTrans->validate_dates($transport['date_load'], $transport['date_unload']);
                    if (!empty($dateErrors)) {
                        echo json_encode(['success' => false, 'errors' => $dateErrors]);
                        exit;
                    }

                //  Overwrite transport dates with formatted versions (converts to SQL format)
                $dateLoadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_load']);
                $dateUnloadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_unload']);

                $transport['date_load'] = $dateLoadObj->format('Y-m-d');
                $transport['date_unload'] = $dateUnloadObj->format('Y-m-d');
                
                //  Field validation
                $errors = $this->mTrans->validate_transport($transport);

                    if ($this->mTrans->check_transport('slot', $transport['slot'])) {
                        $errors['slot'] = "Slot ID già in uso."; 
                    }
        
                    if ($this->mTrans->check_transport('cmr', $transport['cmr'])) {
                        $errors['cmr'] = "Numero CMR già in uso."; 
                    }

                    //  If validation errors, proceed with error messages 
                    if (!empty($errors)) {
                        echo json_encode(['success' => false, 'errors' => $errors]);
                        exit;
                    }  

                //  Prepare quantity data
                $quantity = [
                    'kg_load'         => Validate::validate_input($_POST['kg_load']),
                    'cooling'         => Validate::validate_input($_POST['cooling']),
                    'price_typology'  => Validate::validate_input($_POST['price_typology']),
                    'price_value'     => Validate::validate_input($_POST['price_value']),
                    'kg_unload'       => Validate::validate_input($_POST['kg_unload']),
                    'liquid_density'  => Validate::validate_input($_POST['liquid_density']),
                    'gas_weight'      => Validate::validate_input($_POST['gas_weight']),
                    'pcs_ghv'         => Validate::validate_input($_POST['pcs_ghv'])
                ];

                //  Save transport + quantity in transaction
                try {
                    $this->mTrans->begin();
                    
                        $this->mTrans->createTransport($transport, $this->session->getID());
                        $lastID = $this->mTrans->getLastInsertId();

                        $this->mQty->createQuantity($lastID, $quantity, $this->session->getID());

                    $this->mTrans->commit();
                    echo json_encode(['success' => true, 'created' => $lastID]);
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

    public function handleEditTransport(){
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
            'date_load' => Validate::validate_input($_POST['date_load']),//date_format(new \DateTime($_POST['date_load']), 'Y-m-d'),
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

            if ($transport['slot'] !== $slot && $this->mTrans->check_transport('slot', $transport['slot'], $id)) {
                $errors['slot'] = "Slot ID già in uso."; 
            }
        
            if ($transport['cmr'] !== $cmr && $this->mTrans->check_transport('cmr', $transport['cmr'], $id)) {
                $errors['cmr'] = "Numero CMR già in uso."; 
            }
        
        //  Slot validation
            if (!Validate::validate_string($transport['slot'], 'letters_numbers')) {
                $errors['slot'] = "Slot ID può contenere lettere, numeri e underscore (_). Spazi non consentiti.";
            } elseif (!Validate::chars_length($transport['slot'], 11, 35)) {
                $errors['slot'] = "Usare almeno 11 e al massimo 35 caratteri.";
            }
        
        //  Cmr validation
            if (!Validate::validate_string($transport['cmr'], 'letters-numbers')) {
                $errors['cmr'] = "CMR può contenere lettere, numeri e underscore (_). Spazi non consentiti.";
            } elseif (!Validate::chars_length($transport['cmr'], 7, 35)) {
                $errors['cmr'] = "Usare almeno 7 e al massimo 35 caratteri.";
            }
        
        //  Issuer validation
            if (!Validate::validate_string($transport['issuer'], 'lettersSpaces')) {
                $errors['issuer'] = "Emittente può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!Validate::chars_length($transport['issuer'], 3, 50)) {
                $errors['issuer'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }
        
        //  Supplier validation
            if (!Validate::validate_string($transport['supplier'], 'lettersSpaces')) {
                $errors['supplier'] = "Fornitore può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!Validate::chars_length($transport['supplier'], 3, 50)) {
                $errors['supplier'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }
    
        //  Transport validation    
            if (!Validate::validate_string($transport['transport'], 'lettersSpaces')) {
                $errors['transport'] = "Trasporto può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!Validate::chars_length($transport['transport'], 3, 50)) {
                $errors['transport'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }

        //  Container validation
            if (!Validate::validate_string($transport['container'], 'lettersSpaces')) {
                $errors['container'] = "Container può contenere solo lettere e spazi (senza spazio iniziale).";
            } elseif (!Validate::chars_length($transport['container'], 3, 50)) {
                $errors['container'] = "Usare almeno 3 e al massimo 50 caratteri.";
            }
      
        // If no errors, proceed with user update
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

    public function handleEditQuantity(){
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
        
        //  Kg Load validation
    /*        if (!Validate::validate_number($quantity['kg_load'], 'number')) {
                $errors['kg_load'] = "Quantita caricata può contenere numeri interi positivi o numeri decimali.";
            } elseif (!Validate::validate_number($quantity['kg_load'], 'min')) {
                $errors['kg_load'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }
        
        //  Cooling validation
            if (!Validate::validate_number($quantity['cooling'], 'digits')) {
                $errors['cooling'] = "Raffredamento può contenere solo numeri interi positivi, senza segni o decimali.";
            } 

        //  Price Typology validation
            if (!Validate::validate_string($quantity['price_typology'], 'letters')) {
                $errors['price_typology'] = "Tipologia costo può contenere solo lettere.";
            } elseif ($quantity['price_typology'] === 'yes') {
            //  Price Value validation
                if (!Validate::validate_number($quantity['price_value'], 'digits')) {
                    $errors['price_value'] = "Valore costo extra può contenere solo numeri interi positivi, senza segni o decimali.";
                } elseif (!isset($quantity['price_value']) || !Validate::validate_number($quantity['price_value'], 'min', 1)) {
                    $errors['price_value'] = "Il valore minimo deve essere maggiore o uguale a 1.";
                } 
            } else {
                $quantity['price_value'] = 0;
            }

        //  Kg Unload validation
            if (!Validate::validate_number($quantity['kg_unload'], 'number')) {
                $errors['kg_unload'] = "Quantita scaricata può contenere numeri interi positivi o numeri decimali.";
            } elseif (!Validate::validate_number($quantity['kg_unload'], 'min')) {
                $errors['kg_unload'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }

        //  Liquid Density validation
            if (!Validate::validate_number($quantity['liquid_density'], 'number')) {
                $errors['liquid_density'] = "Densita liquido può contenere numeri interi positivi o numeri decimali.";
            } elseif (!Validate::validate_number($quantity['liquid_density'], 'min')) {
                $errors['liquid_density'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }

        //  Gas Weight validation
            if (!Validate::validate_number($quantity['gas_weight'], 'number')) {
                $errors['gas_weight'] = "Peso specifico (gas) può contenere numeri interi positivi o numeri decimali.";
            } elseif (!Validate::validate_number($quantity['gas_weight'], 'min')) {
                $errors['gas_weight'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }

        //  PCS GHV validation
            if (!Validate::validate_number($quantity['pcs_ghv'], 'number')) {
                $errors['pcs_ghv'] = "PCS/GHV può contenere numeri interi positivi o numeri decimali.";
            } elseif (!Validate::validate_number($quantity['pcs_ghv'], 'min')) {
                $errors['pcs_ghv'] = "Il valore minimo deve essere maggiore o uguale a 0.";
            }
      */
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

    public function handleEditNote() {
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