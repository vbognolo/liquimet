<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Model\Title;
use Liquimet\Validate\Validate;

class AdminUsersController {
    private $twig;
    private $session;
    private $userModel;
    private $titleModel;

    public function __construct(Environment $twig, Session $session, User $userModel, Title $titleModel) {
        $this->twig = $twig;
        $this->session = $session;
        $this->userModel = $userModel;
        $this->titleModel = $titleModel;
    }

    public function renderUsersPage() {
        $this->session->requireAdmin();
        $csrfToken = $this->session->generateCsrfToken();
        $users = $this->userModel->getAll();

            $sessionData = [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'role' => $this->session->getRole()
            ];

        $data = [
                // Fetch Login And Session Data
            'session' => $sessionData,
            //'user' => $this->userModel->get($this->session->getID()),
                // Fetch Users Table Data
            'users' => $users,
            'activeUsers' => $this->userModel->totalUsers(),
                // Fetch Select Options Table
            'gender' => $this->userModel->getGender(),
            'roles' => $this->userModel->getRoles(),
            'titles' => $this->titleModel->getAll(),
                // Fetch Highlighted New Row
            'added' => $_GET['added'] ?? null,        // Get url_id from URL query (if exists)
            'edited' => $_GET['edited'] ?? null,
                // CSRF Token
            'csrf_token' => $csrfToken
        ];

        echo $this->twig->render('admin/users.twig', $data);
    }

    public function registerPage(){
        $this->session->requireAdmin();
        $csrfToken = $this->session->generateCsrfToken();

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
            'user' => $this->userModel->get($this->session->getID()),
            'csrf_token' => $csrfToken,
                // Fetch Select Option Data
            'gender' => $this->userModel->getGender(),
            'roles' => $this->userModel->getRoles(),
            'titles' => $this->titleModel->getAll()
        ];

        echo $this->twig->render('admin/user.twig', $data);
    }

    public function register(){
        $this->session->requireAdmin();
        $csrfToken = $this->session->generateCsrfToken();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $csrfToken = $_POST['csrf_token'] ?? '';

            // Ensure CSRF token exists before validation
            if (!isset($_SESSION['csrf_token']) || !$this->session->verifyCsrfToken($csrfToken)) {
                die(json_encode(['success' => false, 'message' => 'Si e verificato un problema. Aggiornare la pagina e riprovare.']));
            }

            $member = [
                'username' => Validate::validate_input($_POST['username']),
                'password' => Validate::validate_input($_POST['password']),
                'email' => Validate::validate_input($_POST['email']),
                'name' => Validate::validate_input($_POST['name']),               
                'surname' => Validate::validate_input($_POST['surname']),
                'bday' => date_format(new \DateTime($_POST['bday']), 'Y-m-d'),
                'city' => Validate::validate_input($_POST['city']),
                'country' => Validate::validate_input($_POST['country']),
                'id_gender' => Validate::validate_input($_POST['id_gender']),
                'id_role' => Validate::validate_input($_POST['id_role']),                      //access
                'id_title' => Validate::validate_input($_POST['id_title']),                    //ruolo aziendale  
                'joined' => date('Y-m-d')
            ]; 

            $errors = $this->userModel->validateData($member);
            $error = $this->userModel->validatePassword($member['password'], $_POST['confirm'] );

            // Check if username or email exists
            if ($this->userModel->checkIfExists($member['email'], $member['username'])) {
                $errors['email'] = "Indirizzo e-mail già in uso.";
                $errors['username'] = "Username già in uso.";
            }

            if (!Validate::validate_email($member['email'])) {
                $errors['email'] = "Indirizzo e-mail non valido.";
            }

            if (!Validate::validate_username($member['username'])) {
                $errors['username'] = "Username deve avere almeno 1 lettera. Sono permesse lettere e numeri. (4-20 caratteri)";
            }

            if (Validate::validate_password($member['password'])) {
                $confirm = Validate::validate_input($_POST['confirm']);
                if ($member['password'] !== $confirm) {
                    $error['confirm'] = 'Le password non corrispondono.';
                    $errors['confirm'] = $error['confirm'];
                }
            } else {
                $error['password'] = 'Usare almeno 1 lettera maiuscola, 1 minuscola ed 1 numero (min. 8 caratteri).';
                $errors['password'] = $error['password'];
            }

            if (!Validate::validate_string($member['name'], 3, 50)) {
                $errors['name'] = 'Il nome può contenere solo lettere e spazi (3-50 caratteri).';
            }

            if (!Validate::validate_string($member['surname'], 3, 50)) {
                $errors['surname'] = 'Il cognome può contenere solo lettere e spazi (3-50 caratteri).';
            }

            if (!Validate::validate_string($member['city'], 3, 50)) {
                $errors['city'] = 'La città può contenere solo lettere e spazi (3-50 caratteri).';
            }

            if (!Validate::validate_string($member['country'], 3, 50)) {
                $errors['country'] = 'Lo stato può contenere solo lettere e spazi (3-50 caratteri).';
            }

            if (!Validate::validate_age($member['bday'], 18)) {
                $errors['bday'] = 'Inserire una data valida (18+). Non sono permesse date future.';
            }

            // If no errors, proceed with user creation
            if (empty($errors)) {
                $this->userModel->create($member);
                $added = $this->userModel->getLastInsertId();  // Get the ID of the newly inserted user
                    echo json_encode(['success' => true, 'added' => $added]);
            } else {
                echo json_encode(['success' => false, 'errors' => $errors]);
            }  
            exit;
        }

        $data = [
                // Fetch Login And Session Data
            'user' => $this->userModel->get($this->session->getID()),
            'csrf_token' => $csrfToken,
                // Fetch Update Select Options
            'gender' => $this->userModel->getGender(),
            'roles' => $this->userModel->getRoles(),
            'titles' => $this->titleModel->getAll(),
        ];

        echo $this->twig->render('admin/user.twig', $data);
    }

//  Render user modals
    public function renderUserModal(){
        $this->session->requireAdmin();
        $csrfToken = $this->session->generateCsrfToken();

        echo $this->twig->render('admin/user-modal.twig', ['csrf_token' => $csrfToken]);
    }

//  Get user data for edit modal
    public function getUserData(){
        $this->session->requireAdmin();
        $csrfToken = $_POST['csrf_token'] ?? '';
            // Ensure CSRF token exists before validation
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                die(json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']));
            }
                
        $id = (int)$_POST['id_user'] ?? 0;
            // Validate the ID
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Utente ID invalido.']);
                exit;
            }

        $member = $this->userModel->get($id);
    
            if ($member) {
                // Format the birthday field to d-m-Y
                if (isset($member['birthday'])) {
                    $formatBday = Validate::formatDateForView($member['birthday'], 'd-m-Y');
                    $member['birthday'] = $formatBday;
                }

                header('Content-Type: application/json');
                    echo json_encode([
                        'success' => true,
                        'member' => $member,
                        'format_bday' => $formatBday,
                        'crf_token' => $csrfToken
                    ]);
                    exit;
            } else {
                echo json_encode(['success' => false, 'message' => 'Utente non trovato.']);
                exit;
            }
    }

//  Handler for edit submit
    public function handleEditUser(){
        $this->session->requireAdmin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            // Ensure CSRF token exists before validation
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                die(json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']));
            }
    
        $id = (int) $_POST['id_user'] ?? 0;
        $member = [
            'existing_id_user' => $id,
            'check_username' => Validate::validate_input($_POST['username']),
            'check_email' => Validate::validate_input($_POST['email']),
            'new_username' => Validate::validate_input($_POST['username']),
            'new_email' => Validate::validate_input($_POST['email']),
            'username' => Validate::validate_input($_POST['username']),
            'email' => Validate::validate_input($_POST['email']),
            'name' => Validate::validate_input($_POST['name']),               
            'surname' => Validate::validate_input($_POST['surname']),
            'bday' => date_format(new \DateTime($_POST['bday']), 'Y-m-d'),
            'city' => Validate::validate_input($_POST['city']),
            'country' => Validate::validate_input($_POST['country']),
            'id_gender' => Validate::validate_input($_POST['id_gender']),
            'id_role' => Validate::validate_input($_POST['id_role']), 
            'id_title' => Validate::validate_input($_POST['id_title']), 
            'modified' => date('Y-m-d'),
            'id_user' => $id
        ]; 
    
        $errors = $this->userModel->validateData($member);

            if ($this->userModel->checkIfExists('email', $member['email'], $id)) {
                $errors['email'] = "Indirizzo e-mail già in uso."; 
            }
        
            if (!Validate::validate_email($member['email'])) {
                $errors['email'] = "Formato e-mail non valido.";
            }
        
            if ($this->userModel->checkIfExists('username', $member['username'], $id)) {
                $errors['username'] = "Username già in uso."; 
            }
        
            if (!Validate::validate_username($member['username'])) {
                $errors['username'] = "Username deve avere almeno 1 lettera. Sono permesse lettere e numeri. (4-20 caratteri)";
            }
        
            if (!Validate::validate_string($member['name'], 3, 50)) {
                $errors['name'] = 'Il nome può contenere solo lettere e spazi (3-50 caratteri).';
            }
        
            if (!Validate::validate_string($member['surname'], 3, 50)) {
                $errors['surname'] = 'Il cognome può contenere solo lettere e spazi (3-50 caratteri).';
            }
        
            if (!Validate::validate_string($member['city'], 3, 50)) {
                $errors['city'] = 'La città può contenere solo lettere e spazi (3-50 caratteri).';
            }
    
            if (!Validate::validate_string($member['country'], 3, 50)) {
                $errors['country'] = 'Lo stato può contenere solo lettere e spazi (3-50 caratteri).';
            }
        
            if (!Validate::validate_age($member['bday'], 18)) {
                $errors['bday'] = 'Inserire una data valida (18+). Non sono permesse date future.';
            }
      
        // If no errors, proceed with user update
        if (empty($errors)) {
            $saved = $this->userModel->update($id, $member);
    
            if ($saved) {
                $updated = $this->userModel->get($id);          // Re-fetch updated user
                $bday = Validate::formatDateForView($updated['birthday']);

                    echo json_encode([
                        'success' => true,
                        'csrf_token' => $csrfToken,
                        'edited' => $id,
                        'updated' => $updated,
                        'bday' => $bday
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

    public function getUserDelete() {
        $this->session->requireAdmin();

        $id = (int)($_POST['id_user'] ?? 0);
            if ($id) {
                $delete_user = $this->userModel->getUserDelete($id);

                if ($delete_user) {
                    echo json_encode([
                        'success' => true,
                        'info' => $delete_user
                    ]);
                    exit;
                } else {
                    echo json_encode(['success' => false, 'message' => 'Utente non trovato.']);
                    exit;
                }
            }
        exit;
    }

//  Get ID for delete user modal
    public function handleDeleteUser() {
        $this->session->requireAdmin();

        $csrfToken = $_POST['csrf_token'] ?? '';
            if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                die(json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']));
            }

        $id = (int)($_POST['id_user'] ?? 0);
            if ($id <= 0) {
                echo json_encode(['success' => false, 'message' => 'Utente non trovato.']);
                exit;
            }

        $this->userModel->moveUserToDeleted($id);
        
            echo json_encode([
                'success' => true,
                'csrf_token' => $csrfToken
            ]);
            exit;
    }
}