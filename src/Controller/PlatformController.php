<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Model\Transport;
use Liquimet\Model\Quantity;
use Liquimet\Model\Partial;
use Liquimet\Validate\Validate;

class PlatformController {
    private $twig, $session,  $mUser, $mTrans, $mQty, $mPart;

    public function __construct(Environment $twig, Session $session, User $mUser, Transport $mTrans, Quantity $mQty, Partial $mPart) {
        $this->twig = $twig;
        $this->session = $session;
        $this->mUser = $mUser;
        $this->mTrans = $mTrans;
        $this->mQty = $mQty;
        $this->mPart = $mPart;
    }
/*------------------------------------------------------------------------------------------------------------------------ RENDERING ------------------/
/                           ◦ view All Transports()                                                                                                    /
/                           ◦ view Full Transports()                                                                                                   /
/                           ◦ view Part Transports()                                                                                                   /
/                           ◦ view Pagination()                                                                                                        /
/                           ◦ view Transport Modals()                                                                                                  /
/                           ◦ view New Transport()                                                                                                     /
/-----------------------------------------------------------------------------------------------------------------------------------------------------*/
    public function viewAllTransports() {                                                                            // Render ALL transports 
        $this->viewTransportsByType(null);
    }

    public function viewFullTransports() {                                                                           // Render FULL transports
        $this->viewTransportsByType('F');
    }

    public function viewPartTransports() {                                                                           // Render PARTIAL transports
        $this->viewTransportsByType('P');
    }

        private function viewTransportsByType(?string $type) {                                                       // Helper method for view
            $this->session->requireLogin();                                                                                // Loads data based on $type

            $page = (int) ($_GET['page'] ?? 1);
            $limit = 5;
            $offset = ($page - 1) * $limit;
/*
            $total = $this->mTrans->totalTransports($type);
            $pagination = max(1, ceil($total / $limit));
            $transports = $this->mTrans->getAllTransports($limit, $offset, $type);

            $partials = [];
                if ($type === null || $type === 'P') {
                    foreach ($this->mPart->getAll() as $p) {
                        $partials[$p['id_transport']][] = $p;
                    }
                }
*/
            /*$data = [
                'session'     => [
                    'id_user'  => $this->session->getID(),
                    'username' => $this->session->getUsername(),
                    'name'     => $this->session->getName(),
                    'role'     => $this->session->getRole()
                ],
                'transports'  => $transports,
                'partials'    => $partials,
                'page'        => $page,
                'limit'       => $limit,
                'pagination'  => $pagination,
                'total'       => $total,
                'csrf_token'  => $this->session->generateCsrfToken(),
                'show_type'   => true,
                'type'        => $type 
            ];*/

            $data = $this->buildTransportData($type, $limit, $offset, $page);
                echo $this->twig->render('transports.twig', $data);
        }

    public function viewPagination() {                                                                              // Render PAGINATION
        $this->session->requireLogin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit();
            }

        //  Accept null if no specific type is provided (view both 'F' and 'P')
        $type = isset($_POST['type']) && in_array($_POST['type'], ['F', 'P'], true) ? $_POST['type'] : null;
        $page = max(1, (int) ($_POST['page'] ?? 1));
        $limit = 5;
        $offset = ($page - 1) * $limit;

        //  If $type is null, it returns all
        /*$total = $this->mTrans->totalTransports($type);                                         
        $transports = $this->mTrans->getAllTransports($limit, $offset, $type);
        $pagination = (int) ceil($total / $limit);

        //  Group partials only if $type is 'P' or null (to support mixed type display)
        $partials = [];
            if ($type === null || $type === 'P') {
                foreach ($this->mPart->getAll() as $p) {
                    $partials[$p['id_transport']][] = $p;
                }
            }

       /* $data = [
            'csrf_token'  => $csrfToken,
            'transports'  => $transports,
            'partials'    => $partials,
            'type'        => $type,
            'page'        => $page,
            'limit'       => $limit,
            'pagination'  => $pagination,
            'total'       => $total,
            'show_type'   => true
        ];*/

        $data = $this->buildTransportData($type, $limit, $offset, $page, $csrfToken);
        
            //  Choose template
            if ($type === 'P') {
                $template = 'transports-part-ajax.twig';
            } elseif ($type === 'F') {
                $template = 'transports-full-ajax.twig';
            } else {
                $template = 'transports-ajax.twig'; 
            }

        $tbody = $this->twig->render($template, $data);
        $tfoot = $this->twig->render('shared/pagination.twig', $data); 

        header('Content-Type: application/json');
        echo json_encode([
            'success'    => true,
            'tbody'      => $tbody,
            'pagination' => $tfoot
        ]);
        exit();
    }

        private function buildTransportData(?string $type, int $limit, int $offset, int $page, ?string $csrfToken = null): array {
            $transports = $this->mTrans->getAllTransports($limit, $offset, $type);
            $total      = $this->mTrans->totalTransports($type);
            $pagination = max(1, ceil($total / $limit));

            $partials = [];
                if ($type === null || $type === 'P') {
                    foreach ($this->mPart->getAll() as $p) {
                        $partials[$p['id_transport']][] = $p;
                    }
                }

            return [
                'session'     => [
                    'id_user'  => $this->session->getID(),
                    'username' => $this->session->getUsername(),
                    'name'     => $this->session->getName(),
                    'role'     => $this->session->getRole()
                ],
                'transports'  => $transports,
                'partials'    => $partials,
                'page'        => $page,
                'limit'       => $limit,
                'pagination'  => $pagination,
                'total'       => $total,
                'csrf_token'  => $csrfToken ?? $this->session->generateCsrfToken(),
                'show_type'   => $type === null, // true only if showing all
                'type'        => $type
            ];
        }

    public function viewTransportModals(){                                                                            // Render transport MODALS
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();

        echo $this->twig->render('transport-modals.twig', ['csrf_token' => $csrfToken]);
    }

    public function viewNewTransport() {
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();

        $data = [ 
            'session' => [
                'id_user'  => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name'     => $this->session->getName(),
                'role'     => $this->session->getRole() 
            ],
            'csrf_token'   => $csrfToken
        ];

        echo $this->twig->render('transport.twig', $data);
    }
/*--------------------------------------------------------------------------------------------------------------------- GETTING DATA ------------------/
/                           ◦ getTransportData()                                                                                                       /
/                           ◦ getQuantityData()                                                                                                        /
/                           ◦ getPartialData()                                                                                                         /
/                           ◦ checkTransportExistance()                                                                                                /
/-----------------------------------------------------------------------------------------------------------------------------------------------------*/
    public function getTransportData(){
        $this->session->requireLogin();
        
        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit();
            }
                
        $id = isset($_POST['id_transport']) ? (int) $_POST['id_transport'] : 0;
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                exit();
            }

        $transport = $this->mTrans->selectTransport($id);
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
                        'date_load'    => Validate::format_view($transport['date_load'], 'd-m-Y'),
                        'date_unload'  => Validate::format_view($transport['date_unload'], 'd-m-Y'), 
                        'container'    => $transport['container'],
                    ],
                    'csrf_token' => $csrfToken
                ]);
                exit();
            } else {
                echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                exit();
            }
    }

    public function getQuantityData(){
        $this->session->requireLogin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit();
            }
                
        $id = isset($_POST['id_transport']) ? (int) $_POST['id_transport'] : 0;
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Quantità non trovata.']);
                exit();
            }

        $quantity = $this->mQty->getQtyByTransportID($id);
            if (!$quantity) {
                echo json_encode(['success' => false, 'message' => 'Quantity not found.']);
                exit();
            }

        //  Calculations
        $mwh        = ($quantity['kg_unload'] * $quantity['pcs_ghv']) / 1000;
        $mj_kg      = $quantity['pcs_ghv'] * 3.6;
        $volume_mc  = ($quantity['liquid_density'] != 0) ? ($quantity['kg_unload'] / $quantity['liquid_density']) : 0;
        $volume_nmc = ($quantity['gas_weight'] != 0) ? ($quantity['liquid_density'] / $quantity['gas_weight']) : 0;
        $smc_mc     = ($volume_nmc / 273.15) * 288.15;
        $gas_smc    = $volume_mc * $smc_mc;
        $smc_kg     = ($quantity['kg_unload'] != 0) ? ($gas_smc / $quantity['kg_unload']) : 0;
        $gas_nmc    = $volume_mc * $volume_nmc;
                
        $fmt = fn($v) => number_format((float)$v, 2, '.', '');

        header('Content-Type: application/json');
        echo json_encode([
            'success' => true,
            'quantity' => [
                'id_quantity'    => $quantity['id_quantity'],
                'kg_load'        => $quantity['kg_load'],
                'cooling'        => $quantity['cooling'],
                'price_typology' => $quantity['price_typology'],
                'price_value'    => $quantity['price_value'],
                'kg_unload'      => $quantity['kg_unload'],
                'liquid_density' => $fmt($quantity['liquid_density']),
                'gas_weight'     => $fmt($quantity['gas_weight']),
                'pcs_ghv'        => $fmt($quantity['pcs_ghv']), 
                'mwh'            => $fmt($mwh),
                'mj_kg'          => $fmt($mj_kg),
                'volume_mc'      => $fmt($volume_mc),
                'volume_nmc'     => $volume_nmc,
                'smc_mc'         => $fmt($smc_mc),
                'gas_nmc'        => $fmt($gas_nmc),
                'gas_smc'        => $fmt($gas_smc),
                'smc_kg'         => $fmt($smc_kg),
                'id_transport'   => $quantity['id_transport']
            ],
            'csrf_token' => $csrfToken
        ]);
        exit();
            /*} else {
                echo json_encode(['success' => false, 'message' => 'Quantità non trovata.']);
                exit();
            }*/
    }

    public function getPartialData(){
        $this->session->requireLogin();
        
        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit;
            }
                
        $id = isset($_POST['id_partial']) ? (int) $_POST['id_partial'] : 0;
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Quantita non trovata.']);
                exit;
            }

        $partial = $this->mPart->get($id);
        $transport = $this->mTrans->selectTransport($partial['id_transport']);

            if ($partial) {
                header('Content-Type: application/json');
                    echo json_encode([
                        'success' => true,
                        'partial' => [
                            'id_partial' => $partial['id_partial'],
                            'destination' => $partial['destination'],
                            'exw' => $partial['exw'],
                            'date' => Validate::format_view($partial['date']),
                            'place' => $partial['place'],
                            'q_unloaded' => $partial['q_unloaded'],
                            'invoice' => $partial['invoice'],
                            'id_transport' => $partial['id_transport']
                        ],
                        'transport' => $transport,
                        'csrf_token' => $csrfToken
                    ]);
                    exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Scarico parziale non trovato.']);
                exit();
            }
    }

    public function checkTransportExistence(){
        $this->session->requireLogin();
        
        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                exit();
            }

        $field = $_POST['field'] ?? '';
        $value = Validate::validate_input($_POST['value']) ?? '';
        $id = (int) ($_POST['id_transport'] ?? 0);
    
            if (!in_array($field, ['slot', 'cmr'], true)) {
                echo json_encode(['success' => false, 'message' => 'Campo non valido.']);
                exit();
            }

            if ($value === '') {
                echo json_encode(['success' => false, 'message' => 'Il campo è obbligatorio.']);
                exit();
            }

        $existing = $this->mTrans->check_transport_existence($field, $value, $id);
            if ($existing) {
                $msg = $field === 'slot' ? 'Slot ID già in uso.' : 'Numero CMR già in uso.';
                echo json_encode(['success' => false, 'message' => $msg]);
                exit();
            } else {
                echo json_encode(['success' => true]);
                exit();
            }
    }
/*------------------------------------------------------------------------------------------------------------ CRUD HANDLERS ---------------/
/                     ◦ createTransport()                                                                                                   /
/                     ◦ updateTransport()                                                                                                   /
/                     ◦ getPartialData()                                                                                                    /
/                     ◦ checkTransportExistance()                                                                                           /
/------------------------------------------------------------------------------------------------------------------------------------------*/
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
                $errors = $this->mTrans->validate_transport_data($transport);

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

                $errors = $this->mQty->validate_quantity_data($quantity);

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
                    
                        $this->mTrans->createTransport($transport);
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

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {        
                $csrfToken = $_POST['csrf_token'] ?? '';
                    if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                        echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                        exit();
                    }
            
                $id = isset($_POST['id_transport']) ? (int) $_POST['id_transport'] : 0;
                    if ($id <= 0) {
                        echo json_encode(['success' => false, 'message' => 'Trasporto non trovato.']);
                        exit();
                    }

                $transport = [
                    'slot'          => Validate::validate_input($_POST['slot']),
                    'cmr'           => Validate::validate_input($_POST['cmr']),
                    'issuer'        => Validate::validate_input($_POST['issuer']),               
                    'supplier'      => Validate::validate_input($_POST['supplier']),
                    'transport'     => Validate::validate_input($_POST['transport']),
                    'date_load'     => Validate::validate_input($_POST['date_load'] ?? ''),
                    'date_unload'   => Validate::validate_input($_POST['date_unload'] ?? ''),
                    'container'     => Validate::validate_input($_POST['container']),
                    'modified_by'   => $this->session->getID(),
                    'id_transport'  => $id,
                    'original_slot' => Validate::validate_input($_POST['original_slot']),
                    'original_cmr'  => Validate::validate_input($_POST['original_cmr']),
                ]; 

                //  merge in date-specific validation errors
                $dateErrors = $this->mTrans->validate_transport_dates($transport['date_load'], $transport['date_unload']);
                    if (!empty($dateErrors)) {
                        echo json_encode(['success' => false, 'errors' => $dateErrors]);
                        exit();
                    }

                //  overwrite transport dates with formatted versions
                $transport['date_load'] = Validate::format_database($transport['date_load']);
                $transport['date_unload'] = Validate::format_database($transport['date_unload']);
                
                $errors = $this->mTrans->validate_transport_data($transport, $id);

                    if (!empty($errors)) {
                        echo json_encode([
                            'success' => false, 
                            'errors' => $errors,
                        ]);
                        exit();
                    }

                    if ($this->mTrans->updateTransport($transport)) {
                        $edited = $this->mTrans->selectTransport((int) $transport['id_transport']);                          // re-fetch updated user
                        $edited['date_load'] = Validate::format_view($edited['date_load'], 'd/m/Y');
                        $edited['date_unload'] = Validate::format_view($edited['date_unload'], 'd/m/Y');

                        header('Content-Type: application/json; charset=utf-8');
                        echo json_encode([
                            'success' => true,
                            'csrf_token' => $csrfToken,
                            'edited' => $edited,
                        ]);
                        exit();
                    } 
            } 
    }

    public function editQuantity(){
        $this->session->requireLogin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $csrfToken = $_POST['csrf_token'] ?? '';
                if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                    echo json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']);
                    exit();
                }
    
            $id = (int) (Validate::validate_input($_POST['id_quantity']) ?? 0); //isset($_POST['id_quantity']) ? (int) $_POST['id_quantity'] : 0;
                if ($id <= 0) {
                    echo json_encode(['success' => false, 'message' => 'Quantità non trovata.']);
                    exit();
                }

            $quantity = [
                'kg_load'           => Validate::validate_input($_POST['kg_load']) ?? '',
                'cooling'           => Validate::validate_input($_POST['cooling']) ?? null,
                'price_typology'    => Validate::validate_input($_POST['price_typology']) ?? '',
                'price_value'       => Validate::validate_input($_POST['price_value']) ?? 0,
                'kg_unload'         => Validate::validate_input($_POST['kg_unload']) ?? '',
                'liquid_density'    => Validate::validate_input($_POST['liquid_density']) ?? '',
                'gas_weight'        => Validate::validate_input($_POST['gas_weight']) ?? '',
                'pcs_ghv'           => Validate::validate_input($_POST['pcs_ghv']) ?? '',
                'modified_by'       => $this->session->getID(),
                'id_quantity'       => $id,
            ]; 

            $errors = $this->mQty->validate_quantity_data($quantity);
                if (!empty($errors)) {
                    echo json_encode([
                        'success' => false, 
                        'errors' => $errors,
                    ]);
                    exit();
                }

                if ($this->mQty->updateQuantity($quantity)) {
                    $updated = $this->mQty->getQtyByTransportID((int) Validate::validate_input($_POST['id_transport']));    
                    
                    $updated['kg_load']        = number_format((float)$updated['kg_load'], 2, '.', '');
                    $updated['price_value']    = number_format((float)$updated['price_value'], 2, '.', '');
                    $updated['kg_unload']      = number_format((float)$updated['kg_unload'], 2, '.', '');
                    $updated['liquid_density'] = number_format((float)$updated['liquid_density'], 2, '.', '');
                    $updated['gas_weight']     = number_format((float)$updated['gas_weight'], 2, '.', '');
                    $updated['pcs_ghv']        = number_format((float)$updated['pcs_ghv'], 2, '.', '');
                    
                    header('Content-Type: application/json; charset=utf-8');
                    echo json_encode([
                        'success' => true,
                        'csrf_token' => $csrfToken,
                        'updated' => $updated,
                    ]);
                    exit();
                } 
            }
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
        $transport = $this->mTrans->selectTransport($id_transport);

        $dateLoadStr = \DateTime::createFromFormat('d-m-Y', $transport['date_load']);
        $dateUnloadStr = \DateTime::createFromFormat('d-m-Y', $transport['date_unload']);

        $errors = $this->mPart->validate_partial($partial, $dateLoadStr, $dateUnloadStr);
            //  If no errors, proceed with user update
            if (!empty($errors)) {
                echo json_encode(['success' => false, 'errors' => $errors]);
                exit;
            }

        /*$partial['date'] = Validate::validate_date($partial['date']);
            if ($partial['date'] === null) {
                echo json_encode(['success' => false, 'errors' => ['date' => 'Data non valida']]);
                exit;
            }*/
                
        $modified = $this->mPart->update($partial, $this->session->getID());
            
            if ($modified) {
                $data = $this->mPart->get((int) $partial['id_partial']);
                    echo json_encode(['success' => true, 'csrf_token' => $csrfToken, 'modified' => $data]);
            } else {
                echo json_encode(['success' => false, 'message' => "Errore nell'aggiornamento dei dati."]);
            }
            exit;
    }
}