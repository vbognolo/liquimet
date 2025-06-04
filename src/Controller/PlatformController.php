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
 *      Transport Modal
 *      Quantity Modal
 ******************************************************/
    public function renderPlatformPage() {
        $this->session->requireLogin();
        $transports = $this->mTrans->getAllTransports();

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
            'transports' => $transports,
            'total' => $this->mTrans->totalTransport()
        ];

        echo $this->twig->render('platform.twig', $data);
    }

    public function renderFullTransportsPage() {
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();
        $fulls = $this->mTrans->getFull();
        $type = 'F';

            $sessionData = [
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'role' => $this->session->getRole()
            ];

        $data = [
                // Fetch Login And Session Data
            'session' => $sessionData,
            'user' => $this->mUser->get($this->session->getID()),
                // Fetch Platform Table Data
            'transports' => $fulls,
            'total' => $this->mTrans->totalTransports($type),
                // CSRF Token
            'csrf_token' => $csrfToken
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

    public function renderTransportModal(){
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();

        echo $this->twig->render('transport-modal.twig', ['csrf_token' => $csrfToken]);
    }

    public function renderQuantityModal(){
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();

        echo $this->twig->render('transport-modal.twig', ['csrf_token' => $csrfToken]);
    }
 
    public function getTransportData(){
        $this->session->requireLogin();
        $csrfToken = $_POST['csrf_token'] ?? '';
            // Ensure CSRF token exists before validation
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
            }
                
        $id = isset($_POST['id_transport']) ? (int) $_POST['id_transport'] : 0;
            // Validate the ID
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                exit;
            }

        $transport = $this->mTrans->get($id);

            if ($transport) {
                header('Content-Type: application/json');
                    echo json_encode([
                        'success' => true,
                        'transport' => [
                            'id_transport' => $transport['id_transport'],
                            'slot' => $transport['slot'],
                            'cmr' => $transport['cmr'],
                            'issuer' => $transport['issuer'],
                            'supplier' => $transport['supplier'],
                            'transport' => $transport['transport'],
                            'date_load' => Validate::formatDateForView($transport['date_load'], 'd-m-Y'),
                            'date_unload' => Validate::formatDateForView($transport['date_unload'], 'd-m-Y'), 
                            'container' => $transport['container'],
                            'modified' => Validate::formatDateForView(date('Y-m-d'), 'd-m-Y')
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

            // Ensure CSRF token exists before validation
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
            }
                
        $id = isset($_POST['id_transport']) ? (int) $_POST['id_transport'] : 0;
            // Validate the ID
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Quantita non trovato.']);
                exit;
            }

        $quantity = $this->mQty->get($id);

            if ($quantity) {
                // Format the date load field to d-m-Y
                header('Content-Type: application/json');
                    echo json_encode([
                        'success' => true,
                        'quantity' => [
                            'id_transport' => $quantity['id_transport'],
                            'kg_load' => $quantity['kg_load'],
                            'cooling' => $quantity['cooling'],
                            'price_typology' => $quantity['price_typology'],
                            'price_value' => $quantity['price_value'],
                            'kg_unload' => $quantity['kg_unload'],
                            'liquid_density' => $quantity['liquid_density'],
                            'gas_weight' => $quantity['gas_weight'],
                            'pcs_ghv' => $quantity['pcs_ghv'], 
                            'modified' => Validate::formatDateForView(date('Y-m-d'), 'd-m-Y')
                        ],
                        'csrf_token' => $csrfToken
                    ]);
                    exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Quantita non trovato.']);
                exit;
            }
    }

    public function handleEditTransport(){
        $this->session->requireLogin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            // Ensure CSRF token exists before validation
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

        // Merge in date-speciic validation errors
        $dateErrors = $this->mTrans->validate_dates($transport['date_load'], $transport['date_unload']);
            if (!empty($dateErrors)) {
                echo json_encode(['success' => false, 'errors' => $dateErrors]);
                exit;
            }

        // Overwrite transport dates with formatted versions
        $dateLoadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_load']);
        $dateUnloadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_unload']);

        $transport['date_load'] = $dateLoadObj->format('Y-m-d');
        $transport['date_unload'] = $dateUnloadObj->format('Y-m-d');
        
        $errors = $this->mTrans->validate_data($transport);

        $slot = Validate::validate_input($_POST['original_slot']);
        $cmr = Validate::validate_input($_POST['original_cmr']);

            if ($transport['slot'] !== $slot && $this->mTrans->check_existance('slot', $transport['slot'], $id)) {
                $errors['slot'] = "Slot ID già in uso."; 
            }
        
            if ($transport['cmr'] !== $cmr && $this->mTrans->check_existance('cmr', $transport['cmr'], $id)) {
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
            // Ensure CSRF token exists before validation
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

        // Merge in date-speciic validation errors
        $dateErrors = $this->mTrans->validate_dates($transport['date_load'], $transport['date_unload']);
            if (!empty($dateErrors)) {
                echo json_encode(['success' => false, 'errors' => $dateErrors]);
                exit;
            }

        // Overwrite transport dates with formatted versions
        $dateLoadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_load']);
        $dateUnloadObj = \DateTime::createFromFormat('d-m-Y', $transport['date_unload']);

        $transport['date_load'] = $dateLoadObj->format('Y-m-d');
        $transport['date_unload'] = $dateUnloadObj->format('Y-m-d');
        
        $errors = $this->mTrans->validate_data($transport);

        $slot = Validate::validate_input($_POST['original_slot']);
        $cmr = Validate::validate_input($_POST['original_cmr']);

            if ($transport['slot'] !== $slot && $this->mTrans->check_existance('slot', $transport['slot'], $id)) {
                $errors['slot'] = "Slot ID già in uso."; 
            }
        
            if ($transport['cmr'] !== $cmr && $this->mTrans->check_existance('cmr', $transport['cmr'], $id)) {
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


        public function createTransportPage(){
        $this->session->requireLogin();

        $data = [
            // Fetch Login And Session Data
            'session' => [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'id_gender' => $this->session->getGender(),
                'role' => $this->session->getRole(),
                'title' => $this->session->getTitle(),
            ],
            'isLoggedIn' => $this->session->isLoggedIn(),
            'user' => $this->mUser->get($this->session->getID()),
        ];

        echo $this->twig->render('transport.twig', $data);
    }
    
}