<?php
namespace Liquimet\Controller;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Twig\Environment;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Validate\Validate;

class LoginController {
    private $twig;
    private $session;
    private $mUser;

    public function __construct(Environment $twig, Session $session, User $mUser) {
        $this->twig = $twig;
        $this->session = $session;
        $this->mUser = $mUser;
    }

    public function loginPage() {
        // Generate CSRF token when rendering the form
        $csrfToken = $this->session->generateCsrfToken();

        echo $this->twig->render('login.twig', ['csrf_token' => $csrfToken]);
    }

    public function login() {
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])){
            $csrfToken = $_POST['csrf_token'] ?? '';

                // Ensure CSRF token exists before validation
                if(!isset($_SESSION['csrf_token']) || !$this->session->verifyCsrfToken($csrfToken)){
                    echo $this->twig->render('login.twig', [
                        'error' => 'Si e verificato un problema. Riprovare.', 
                        'csrf_token' => $this->session->generateCsrfToken()]);
                    return;
                }

            $username = Validate::validate_input($_POST['login-username'] ?? '');
            $password = Validate::validate_input($_POST['login-password'] ?? '');
            

            if(empty($username) || empty($password)){
                echo $this->twig->render('login.twig', [
                    'error' => 'Inserire username e password per accedere.', 
                    'csrf_token' => $this->session->generateCsrfToken()]);
                return;
            } else{
                $userData = $this->mUser->loginAuth($username, $password);

                if($userData){
                    if($userData['role'] === 'sospeso' || $userData['role'] === 'disattivato'){
                        echo $this->twig->render('login.twig', [
                            'error' => 'Credenziali sospese o revocate.', 
                            'csrf_token' => $this->session->generateCsrfToken()]);
                        return;
                    }

                    $this->session->createSessionData($userData);
                    redirect($userData['role'] === 'admin' ? '/admin/dashboard' : '/index');
                    exit;
                } else{
                    echo $this->twig->render('login.twig', [
                        'error' => 'Login e password non corrispondono.', 
                        'csrf_token' => $this->session->generateCsrfToken()
                    ]);
                }
            }
        }
    }

    public function lostPasswordPage() {
        $csrfToken = $this->session->generateCsrfToken();

        echo $this->twig->render('password-lost.twig', ['csrf_token' => $csrfToken]);
    }

    public function sendResetLink(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
            $csrfToken = $_POST['csrf_token'] ?? '';
    
            // CSRF validation
            if (!isset($_SESSION['csrf_token']) || !$this->session->verifyCsrfToken($csrfToken)) {
                echo json_encode(['error' => 'Si è verificato un problema. Riprovare.']);
                return;
            }
    
            $email = Validate::validate_input($_POST['login-email'] ?? '');
    
            // Validate email input
            if (empty($email)) {
                echo json_encode(['error' => "Inserire l'indirizzo e-mail per inviare il link di reset."]);
                return;
            } elseif (!Validate::validate_email($email)) {
                echo json_encode(['error' => 'Indirizzo e-mail non valido.']);
                return;
            }
    
            // Check if the email exists in the database
            $userInfo = $this->mUser->getUserByEmail($email);

            if ($userInfo) {
                // Generate reset token
                $token = bin2hex(random_bytes(32));     // 64 hex chars
                $expires = (new \DateTime('+1 hour'))->format('Y-m-d H:i:s');
    
                // Save token in the database
                $this->mUser->savePasswordResetToken($userInfo['id_user'], $token, $expires);
    
                // Send email (PHPMailer)
                $this->sendResetEmail($email, $token);
    
                echo json_encode(['success' => true]);
                return;
            } else {
                echo json_encode(['error' => 'Nessun account trovato con questa email.']);
                return;
            }
        }
    }
    
    private function sendResetEmail($email, $token){
        $resetLink = "https://yourdomain.com/password-reset?token=" . urlencode($token);
    
        // PHPMailer configuration
        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP(); // Use SMTP
            $mail->Host = 'smtp.yourmailserver.com'; // SMTP server
            $mail->SMTPAuth = true;
            $mail->Username = 'your-email@domain.com'; // Your email
            $mail->Password = 'your-email-password'; // Your email password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587; // SMTP port
    
            $mail->setFrom('noreply@yourdomain.com', 'Your Team');
            $mail->addAddress($email);
    
            $mail->isHTML(true);
            $mail->Subject = 'Reset della tua password';
            $mail->Body    = "
                <html>
                    <head><title>Reset Password</title></head>
                    <body>
                        <p>Ciao,</p>
                        <p>Per resettare la tua password clicca su questo link:</p>
                        <p><a href='{$resetLink}'>Reset Password</a></p>
                        <p>Se non hai richiesto il reset, ignora questa email.</p>
                        <p>Il team</p>
                    </body>
                </html>";
    
            $mail->send();
        } catch (Exception $e) {
            echo json_encode(['error' => "Errore durante l'invio dell'e-mail: {$mail->ErrorInfo}"]);
        }
    }
    

    public function sendResetLink(){
        if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])){
            $csrfToken = $_POST['csrf_token'] ?? '';

                if(!isset($_SESSION['csrf_token']) || !$this->session->verifyCsrfToken($csrfToken)){
                    echo $this->twig->render('password-lost.twig', [
                        'error' => 'Si e verificato un problema. Riprovare.', 
                        'csrf_token' => $this->session->generateCsrfToken()]);
                    return;
                }
    
            $email = Validate::validate_input($_POST['login-email'] ?? '');

            if(empty($email)){
                echo $this->twig->render('password-lost.twig', [
                    'error' => "Inserire l'indirizzo e-mail per inviare il link di reset.", 
                    'csrf_token' => $this->session->generateCsrfToken()]);
                return;
            } elseif (!Validate::validate_email($email)) {
                echo $this->twig->render('password-lost.twig', [
                    'csrf_token' => $this->session->generateCSRFToken(),
                    'error' => 'Indirizzo e-mail non valido.'
                ]);
                return;
            } 
                
            $userInfo = $this->mUser->getUserByEmail($email);

                if($userInfo){
                    // Generate secure token
                    $token = bin2hex(random_bytes(32));     // 64 hex chars
                    $expires = (new \DateTime('+1 hour'))->format('Y-m-d H:i:s');

                    // Save in database
                    $this->mUser->savePasswordResetToken($userInfo['id_user'], $token, $expires);

                    // Prepare email
                    $resetLink = "https://liquimet.local/password-reset?token=" . urlencode($token);

                    // Simple HTML email
                    $subject = "Reset della tua password";
                    $body = "
                            <html>
                                <head><title>Reset Password</title></head>
                                <body>
                                    <p>Ciao,</p>
                                    <p>Per resettare la tua password clicca su questo link:</p>
                                    <p><a href='{$resetLink}'>Reset Password</a></p>
                                    <p>Se non hai richiesto il reset, ignora questa email.</p>
                                    <p>Il team</p>
                                </body>
                            </html>";

                    // PHPMailer section
                    $mail = new PHPMailer(true);

                        try {
                            $mail->isMail(); // Use PHP's mail() function

                            $mail->setFrom('noreply@yourdomain.com', 'Il team');
                            $mail->addAddress($email);

                            $mail->isHTML(true);
                            $mail->Subject = $subject;
                            $mail->Body = $body;

                            $mail->send();

                            echo json_encode(['success' => true]);
                            return;
                        } catch (Exception $e) {
                            echo $this->twig->render('password-lost.twig', [
                                'csrf_token' => $this->session->generateCSRFToken(),
                                'error' => "Errore durante l'invio dell'e-mail: {$mail->ErrorInfo}"
                            ]);
                            return;
                        }
                } else {
                    echo $this->twig->render('password-lost.twig', [
                        'csrf_token' => $this->session->generateCSRFToken(),
                        'error' => 'Nessun account trovato con questa email.'
                    ]);
                    return;
                }
        }
    }

    public function logout() {
        $this->session->destroy();
        redirect('login');
    }
}