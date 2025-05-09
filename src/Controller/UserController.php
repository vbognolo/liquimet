<?php
namespace Liquimet\Controller;

use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Model\Title;
use Liquimet\Validate\Validate;

class UserController {
    private $twig;
    private $session;
    private $mUser;
    private $mTitle;

    public function __construct(Environment $twig, Session $session, User $mUser, Title $mTitle) {
        $this->twig = $twig;
        $this->session = $session;
        $this->mUser = $mUser;
        $this->mTitle = $mTitle;
    }

    public function indexPage() {
        $this->session->requireLogin();

            $sessionData = [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'id_gender' => $this->session->getGender(),
                'role' => $this->session->getRole(),
                'title' => $this->session->getTitle()
            ];

        $data = [
                // Fetch Login And Session Data
            'session' => $sessionData,
            'user' => $this->mUser->get($this->session->getID()),
                // Fetch Dashboard Data
            'allTransports' => $this->mTrans->totalTransport(),
            'fullTransports' => $this->mTrans->totalTransports('F'),
            'partTransports' => $this->mTrans->totalTransports('P'),
            'unloadedSum' => $this->mQty->sumUnloaded(),
            'recent' => $this->mTrans->getRecent()
        ];

    echo $this->twig->render('index.twig', $data);
    }

    public function renderProfilePage() {
        $this->session->requireLogin();
        $csrfToken = $this->session->generateCsrfToken();
            
            $sessionData = [
                'id_user' => $this->session->getID(),
                'username' => $this->session->getUsername(),
                'name' => $this->session->getName(),
                'role' => $this->session->getRole()
            ];

        $user = $this->mUser->get($this->session->getID()); 
        // Format date to long Italian
        $formatter = new \IntlDateFormatter(
            'it_IT',
            \IntlDateFormatter::LONG,
            \IntlDateFormatter::NONE,
            'Europe/Rome',
            null,
            'd MMMM yyyy'
        );
        $user['bday_display'] = strtolower($formatter->format(strtotime($user['birthday'])));
        $user['joined'] = strtolower($formatter->format(strtotime($user['joined'])));
        $user['modified_display'] = strtolower($formatter->format(strtotime($user['modified'])));
        $user['bday_input'] = date_format(new \DateTime($user['birthday']), 'd-m-Y');
            
        $data = [
                // Fetch Login And Session Data
            'session' => $sessionData,
            'user' => $user,
                // CSRF Token
            'csrf_token' => $csrfToken
        ];

        echo $this->twig->render('profile.twig', $data);
    }

    public function updateProfile() {
        $this->session->requireLogin();

        if(isset($_POST['update_profile'])){
            $csrfToken = $_POST['csrf_token'] ?? '';
                // Ensure CSRF token exists before validation
                if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                    die(json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']));
                }

                $sessionData = [
                    'id_user' => $this->session->getID(),
                    'username' => $this->session->getUsername(),
                    'name' => $this->session->getName(),
                    'role' => $this->session->getRole()
                ];
        
            $id = (int) $_POST['id_user'] ?? 0;
            $user = [
                'username' => Validate::validate_input($_POST['username']),
                'email' => Validate::validate_input($_POST['email']),
                'name' => Validate::validate_input($_POST['name']),               
                'surname' => Validate::validate_input($_POST['surname']),
                'bday' => date_format(new \DateTime($_POST['bday']), 'Y-m-d'),
                'city' => Validate::validate_input($_POST['city']),
                'country' => Validate::validate_input($_POST['country']),
                'modified' => date('Y-m-d'),
                'id_user' => $id
            ]; 

            $errors = $this->mUser->validateData($user);
            $email = Validate::validate_input($_POST['original_email']);
            $username = Validate::validate_input($_POST['original_username']);

                if ($email !== $user['email'] && $this->mUser->checkIfExists('email', $user['email'], $id)) {
                    $errors['email'] = "Indirizzo e-mail già in uso."; 
                }
            
                if (!Validate::validate_email($user['email'])) {
                    $errors['email'] = "Formato e-mail non valido.";
                }
            
                if ($username !== $user['username'] && $this->mUser->checkIfExists('username', $user['username'], $id)) {
                    $errors['username'] = "Username già in uso."; 
                }
            
                if (!Validate::validate_username($user['username'])) {
                    $errors['username'] = "Username deve avere almeno 1 lettera. Sono permesse lettere e numeri. (4-20 caratteri)";
                }
            
                if (!Validate::validate_string($user['name'], 3, 50)) {
                    $errors['name'] = 'Il nome può contenere solo lettere e spazi (3-50 caratteri).';
                }
            
                if (!Validate::validate_string($user['surname'], 3, 50)) {
                    $errors['surname'] = 'Il cognome può contenere solo lettere e spazi (3-50 caratteri).';
                }
            
                if (!Validate::validate_string($user['city'], 3, 50)) {
                    $errors['city'] = 'La città può contenere solo lettere e spazi (3-50 caratteri).';
                }
        
                if (!Validate::validate_string($user['country'], 3, 50)) {
                    $errors['country'] = 'Lo stato può contenere solo lettere e spazi (3-50 caratteri).';
                }
            
                if (!Validate::validate_age($user['bday'], 18)) {
                    $errors['bday'] = 'Inserire una data valida (18+). Non sono permesse date future.';
                }
        
            // If no errors, proceed with user update
            if (empty($errors)) {
                $edited = $this->mUser->updateProfile($user);

                if ($edited) {
                    // Format dates for display
                    $formatter = new \IntlDateFormatter(
                    'it_IT',
                    \IntlDateFormatter::LONG,
                    \IntlDateFormatter::NONE,
                    'Europe/Rome',
                    null,
                    'd MMMM yyyy'
                    );

                    $bdayFormatted = $formatter->format(new \DateTime($user['bday']));
                    $modifiedFormatted = $formatter->format(new \DateTime($user['modified']));
                    $bdayEdit = date_format(new \DateTime($_POST['bday']), 'd-m-Y');

                    echo json_encode([
                        'success' => $edited,
                        'session' => $sessionData,
                        'user' => [
                            'name' => $user['name'],
                            'surname' => $user['surname'],
                            'bday' => $user['bday'],
                            'bday_input' => $bdayEdit,
                            'bday_display' => $bdayFormatted, 
                            'modified' => date('Y-m-d'),
                            'modified_display' => $modifiedFormatted,
                            'city' => $user['city'],
                            'country' => $user['country'],
                            'username' => $user['username'],
                            'email' => $user['email']
                        ]
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
    }

    public function checkUsername(){
        if (!$this->session->isLoggedIn()) {
            http_response_code(403);
            echo json_encode(['available' => false]);
                return;
        }
    
        $username = Validate::validate_input($_POST['username'] ?? '');
        $userId = $this->session->getID();
    
        $exists = $this->mUser->checkIfExists('username', $username, $userId);
        echo json_encode(['available' => !$exists]);
    }

    public function checkEmail(){
        if (!$this->session->isLoggedIn()) {
            http_response_code(403);
            echo json_encode(['available' => false]);
            return;
        }
    
        $email = trim($_POST['email'] ?? '');
        $userId = $this->session->getID();
    
        $exists = $this->mUser->checkIfExists('email', $email, $userId);
        echo json_encode(['available' => !$exists]);
    }

    public function updatePassword() {
        $this->session->requireLogin();

        if(isset($_POST['update_password'])){
            $csrfToken = $_POST['csrf_token'] ?? '';
                // Ensure CSRF token exists before validation
                if (empty($csrfToken) || !$this->session->verifyCsrfToken($csrfToken)) {
                    die(json_encode(['success' => false, 'message' => 'Si è verificato un problema. Aggiornare la pagina e riprovare.']));
                }

                $sessionData = [
                    'id_user' => $this->session->getID(),
                    'username' => $this->session->getUsername(),
                    'name' => $this->session->getName(),
                    'role' => $this->session->getRole()
                ];
        
            $id = (int) $_POST['id_user'] ?? 0;
            $pass = Validate::validate_input($_POST['pass']);
            $newPass = Validate::validate_input($_POST['newPass']);
            $confirm = Validate::validate_input($_POST['confirm']);

            $error = $this->mUser->validatePassword($newPass, $confirm);

                if (!Validate::validate_password($newPass)) {
                    $error['newPass'] = "La password deve contenere almeno 1 lettera maiuscola, 1 minuscola e 1 numero o carattere speciale."; 
                }
            
                if ($newPass !== $confirm) {
                    $error['confirm'] = "La nuova password e la conferma non coincidono.";
                }

                if ($this->mUser->checkPassword($id, $pass)) {
                    $error['pass'] = "Password non corretta.";
                }

            if (empty($error)) {
                $change = $this->mUser->updatePassword($id, $newPass);
    
                if ($change) {
                    echo json_encode([
                        'success' => $change,
                        'session' => $sessionData,
                        'error' => $error
                    ]);
                    exit();
                } else {
                    echo json_encode(["success" => false, "message" => "Errore nell'aggiornamento dei dati."]);
                    exit();
                }   
            } else {
                echo json_encode(['success' => false, 'error' => $error]);
            }
            exit;
        }
    }

    public function checkPassword() {
        if (!$this->session->isLoggedIn()) {
            http_response_code(403);
            echo json_encode(['available' => false]);
                return;
        }
    
        $password = Validate::validate_input($_POST['pass'] ?? '');
        $userId = $this->session->getID();
    
        $correct = $this->mUser->checkPassword($userId, $password);
        echo json_encode(['available' => $correct]);
    }
}