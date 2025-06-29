<?php
namespace Liquimet\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Model\LoginAttempt;
use Liquimet\Validate\Validate;

class LoginController {
    private $twig;
    private $session;
    private $mUser;
    private $loginAttempt;

    public function __construct(Environment $twig, Session $session, User $mUser, LoginAttempt $loginAttempt) {
        $this->twig = $twig;
        $this->session = $session;
        $this->mUser = $mUser;
        $this->loginAttempt = $loginAttempt;
    }

    public function renderLoginPage() {
        //  Generate CSRF token when rendering the form
        $csrfToken = $this->session->generateCsrfToken();

        //  Determine if the forgot password form should be displayed
        $forgotForm = isset($_GET['forgot_password']);  // Example: /login?forgot=true

        //  Render the login page, passing CSRF token and whether to show the forgot password form
        echo $this->twig->render('login.twig', [
            'csrf_token'  => $csrfToken,
            'forgot_form' => $forgotForm  // Pass this variable to the template
        ]);
    }

    public function login() {
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])){
            $csrfToken = $_POST['csrf_token'] ?? '';
            $ip = $_SERVER['REMOTE_ADDR'];
            $errors = [];

                // Ensure CSRF token exists before validation
                if(!isset($_SESSION['csrf_token']) || !$this->session->verifyCsrfToken($csrfToken)){
                    $errors[] = "Si è verificato un problema. Riprovare.";
                    echo $this->twig->render('login.twig', [
                        'errors' => $errors, 
                        'csrf_token' => $this->session->generateCsrfToken()]);
                    return;
                }

                if ($this->loginAttempt->isLocked($ip)) {
                    $errors[] = "Troppi tentativi falliti. Riprova tra 15 minuti.";
                    echo $this->twig->render('login.twig', [
                        'status' => 'error',
                        'errors' => $errors,
                        'csrf_token' => $this->session->generateCsrfToken()]);
                    return;
                }

            $username = Validate::validate_input($_POST['username'] ?? '');
            $password = Validate::validate_input($_POST['password'] ?? '');

            if(empty($username) || empty($password)) {
                $errors[] = "Inserire username e password per accedere al sito.";
            } 

            if (!empty($errors)) {
                echo $this->twig->render('login.twig', [
                    'errors' => $errors, 
                    'csrf_token' => $this->session->generateCsrfToken()]);
                return;
            } else{
                $userData = $this->mUser->loginAuth($username, $password);

                if($userData){
                    if($userData['role'] === 'sospeso' || $userData['role'] === 'disattivato'){
                        $this->loginAttempt->logAttempt($ip, false);
                        $errors[] = "Credenziali sospese o revocate.";

                        if (!empty($errors)) {
                            echo $this->twig->render('login.twig', [
                                'errors' => $errors, 
                                'csrf_token' => $this->session->generateCsrfToken()]);
                            return;
                        }
                    }

                    $this->loginAttempt->logAttempt($ip, true);
                    $this->session->createSessionData($userData);
                    redirect($userData['role'] === 'admin' ? '/admin/dashboard' : '/index');
                    exit;
                } else{
                    $this->loginAttempt->logAttempt($ip, false);
                    $errors[] = "Login e password non corrispondono.";

                    if (!empty($errors)) {
                        echo $this->twig->render('login.twig', [
                            'errors' => $errors, 
                            'csrf_token' => $this->session->generateCsrfToken()]);
                        return;
                    }
                }
            }
        }
    }
/*
    public function lostPasswordPage() {
        $csrfToken = $this->session->generateCsrfToken();

        echo $this->twig->render('login.twig', [
            'csrf_token' => $csrfToken,
            'forget_form' => true
        ]);
    }
*/
    public function sendResetLink(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])){
            $csrfToken = $_POST['csrf_token'] ?? '';
            $errors = [];

                if(!isset($_SESSION['csrf_token']) || !$this->session->verifyCsrfToken($csrfToken)){
                    $errors[] = "Si è verificato un problema. Riprovare.";
                    echo $this->twig->render('login.twig', [
                        'forgot_form' => true,
                        'errors' => $errors, 
                        'csrf_token' => $this->session->generateCsrfToken()]);
                    return;
                }
    
            $email = Validate::validate_input($_POST['email'] ?? '');

            if(empty($email)){
                $errors[] = "Inserire l'indirizzo e-mail per inviare il link di reset.";
                echo $this->twig->render('login.twig', [
                    'forgot_form' => true,
                    'errors' => $errors, 
                    'csrf_token' => $this->session->generateCsrfToken()
                ]);
                return;
            } elseif (!Validate::validate_email($email)) {
                $errors[] = "Indirizzo e-mail non valido.";
                echo $this->twig->render('login.twig', [
                    'forgot_form' => true,
                    'errors' => $errors,
                    'csrf_token' => $this->session->generateCsrfToken()
                ]);
                return;
            } 
                
            $userInfo = $this->mUser->getUserByEmail($email);

            if (!$userInfo) {
                $errors[] = "Nessun utente trovato con questo indirizzo e-mail.";
                echo $this->twig->render('login.twig', [
                    'forgot_form' => true,
                    'errors' => $errors,
                    'csrf_token' => $this->session->generateCsrfToken()
                ]);
                return;
            }

            $token = bin2hex(random_bytes(32));
            $this->mUser->storePasswordResetToken($userInfo['id_user'], $token);

            $resetLink = 'https://liquimet.local/password-reset?token=' . $token;

            $mail = new PHPMailer(true);

            // Optional debug output
            $mail->SMTPDebug = 2;
            $mail->Debugoutput = function ($str, $level) {
                echo "SMTP Debug [$level]: $str<br>";
            };

            try {
                // Brevo SMTP
                $mail->isSMTP();
                $mail->Host       = 'smtp-relay.brevo.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = '8beb1e002@smtp-brevo.com';
                $mail->Password   = 'BDznxvPpHC9cEYJ2';
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port       = 587;
    
                $mail->setFrom('no-reply@liquimet.local', 'Liquimet');
                $mail->addAddress($email);
    
                $mail->isHTML(true);
                $mail->Subject = 'Reset password';
                $mail->Body    = 'Clicca sul link per reimpostare la password: <a href="' . $resetLink . '">' . $resetLink . '</a>';
                $mail->AltBody = 'Copia e incolla questo link nel browser per reimpostare la password: ' . $resetLink;
    
                $mail->send();
    
                echo $this->twig->render('login.twig', [
                    'forgot_form' => true,
                    'success' => "Link di reset inviato! A presto riceverai un'e-mail con il link per impostare la tua password.",
                    'csrf_token' => $this->session->generateCsrfToken()
                ]);
                return;
            } catch (Exception $e) {
                $errors[] = "Errore durante l'invio dell'e-mail: {$mail->ErrorInfo}";
                echo $this->twig->render('login.twig', [
                    'forgot_form' => true,
                    'errors' => $errors,
                    'csrf_token' => $this->session->generateCsrfToken()
                ]);
                return;
            }
        }
    }

//  Reset Password Form page
    public function renderResetPassword() {
        $csrfToken = $this->session->generateCsrfToken();
        $token = $_GET['token'] ?? '';

        $user = $this->mUser->getUserByResetToken($token);

            if (!$user) {
                echo $this->twig->render('password-reset.twig', [
                    'errors' => 'Token non valido o scaduto.',
                    'token' => $token,
                    'csrf_token' => $csrfToken
                ]);
                return;
            }
    
        echo $this->twig->render('password-reset.twig', [
            'token' => $token,
            'csrf_token' => $csrfToken
        ]);
    }

//  Update Password Action for Reset Password Form
    public function updatePassword() {
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['confirm'])){
            $csrfToken = $_POST['csrf_token'] ?? '';
            $token = $_POST['token'] ?? '';

                if(!isset($_SESSION['csrf_token']) || !$this->session->verifyCsrfToken($csrfToken)){
                    echo $this->twig->render('password-reset.twig', [
                        'errors' => "Si è verificato un problema. Riprovare.", 
                        'token' => $token,
                        'csrf_token' => $this->session->generateCsrfToken()]);
                    return;
                }

            $pass = Validate::validate_input($_POST['newPass']);
            $confirm = Validate::validate_input($_POST['confirmPass']);

            $errors = $this->mUser->validatePassword($pass, $confirm);

                if (!empty($errors)) {
                    echo $this->twig->render('password-reset.twig', [
                        'errors' => $errors,
                        'token' => $token,
                        'csrf_token' => $this->session->generateCsrfToken()
                    ]);
                    return;
                }
                /*if (!empty($pass) && Validate::validate_password($pass)) {
                    if (!empty($confirm) && $pass !== $confirm) {
                        $errors['confirm'] = 'La nuova password e la conferma non coincidono.';
                            echo $this->twig->render('password-reset.twig', [
                                'errors' => $errors,
                                'token' => $token,
                                'csrf_token' => $this->session->generateCsrfToken()
                            ]);
                            return;
                    }
                } elseif (!Validate::chars_length($pass, 8)) {
                    $errors['newPass'] = 'La password deve contenere almeno 8 caratteri.';
                        echo $this->twig->render('password-reset.twig', [
                            'errors' => $errors,
                            'token' => $token,
                            'csrf_token' => $this->session->generateCsrfToken()
                        ]);
                        return;
                } else {
                    $errors['newPass'] = 'La password deve contenere almeno 1 lettera maiuscola, 1 minuscola e 1 numero o carattere speciale.';
                        echo $this->twig->render('password-reset.twig', [
                            'errors' =>  $errors,
                            'token' => $token,
                            'csrf_token' => $this->session->generateCsrfToken()
                        ]);
                        return;
                }*/

            $userToken = $this->mUser->getUserByResetToken($token);

                if (!$userToken) {
                    echo $this->twig->render('password-reset.twig', [
                        'errors' => 'Token non valido o scaduto!',
                        'csrf_token' => $this->session->generateCsrfToken()
                    ]);
                    return;
                } 

            if (empty($errors)) {
                $change = $this->mUser->updatePassword($userToken['id_user'], $pass);
    
                if ($change) {
                    echo $this->twig->render('password-reset.twig', [
                        'success' => 'Password aggiornata con successo!',
                        'csrf_token' => $this->session->generateCsrfToken()
                    ]);
                }   
            } 
        }
    }

//  View Login Audit 
    public function showLoginAudit(): void {
        $this->session->requireAdmin(); // protects route

        $failures = $this->loginAttempt->getRecentFailures();

        echo $this->twig->render('admin/login-audit.twig', [
            'failures' => $failures
        ]);
    }

//  Logout
    public function logout() {
        $this->session->destroy();
        redirect('login');
    }
}