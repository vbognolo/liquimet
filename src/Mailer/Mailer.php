<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    private $mail;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->setupSMTP();
    }

    private function setupSMTP() {
        $this->mail->isSMTP();
        $this->mail->Host       = 'smtp.gmail.com';
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = 'your-email@gmail.com';      // Replace
        $this->mail->Password   = 'your-app-password';         // Use Gmail App Password
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port       = 587;
        $this->mail->CharSet    = 'UTF-8';
    }

    public function sendPasswordReset(string $to, string $resetLink): bool {
        try {
            $this->mail->setFrom('your-email@gmail.com', 'Your App');
            $this->mail->addAddress($to);
            $this->mail->isHTML(true);
            $this->mail->Subject = 'Recupero password';
            $this->mail->Body    = "
                <p>Hai richiesto il reset della password.</p>
                <p>Clicca qui per reimpostare: <a href=\"$resetLink\">Reset Password</a></p>
                <p>Se non hai effettuato questa richiesta, ignora questa email.</p>
            ";

            $this->mail->send();
            return true;
        } catch (Exception $e) {
            // Log error if needed: $e->getMessage()
            return false;
        }
    }
}
