<?php
declare(strict_types = 1); 
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Validate\Validate;

// Instantiate the session and user model
$session = new Session();  
$userModel = new User($database);
$errors = [];
$member = [];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $csrfToken = $_POST['csrf_token'] ?? '';  

            // Ensure CSRF token exists before validation
            if (!isset($_SESSION['csrf_token']) || !$session->verifyCsrfToken($csrfToken)) {
                $errors['csrf_token'] = "Si e verificato un problema. Riprovare.";
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
            'gender' => $_POST['gender'],
            'role' => $_POST['role'],                      //access
            'title' => $_POST['title'],                    //ruolo aziendale  
            'joined' => date('Y-m-d')
        ]; 

            if (empty($member['username']) || empty($member['password']) || empty($member['email']) || empty($member['name']) ||
                empty($member['surname']) || empty($member['bday']) || empty($member['city']) || empty($member['country']) ||
                empty($member['gender']) || empty($member['role']) || empty($member['title'])) {
                    $errors['empty'] = "Tutti i campi sono obbligatori.";
            } else {
                if ($userModel->checkIfExists($member['check_email'], $member['check_username'])) {
                    $errors['email'] = "Indirizzo e-mail già in uso.";
                    $errors['username'] = "Username già in uso.";
                }

                // E-mail validation
                if (!Validate::validate_email($member['email'])) {
                    $errors['email'] = "Indirizzo e-mail invalido.";
                }

                // Username validation
                if (!Validate::validate_username($member['username'])) {
                    $errors['username'] = 'Username puo contenere solo lettere e numeri. (4-20 caratteri)';
                }

                // Password validation
                if (Validate::validate_password($member['password'])) {
                    $confirm = Validate::validate_input($_POST['confirm']);
                    if ($member['password'] !== $confirm) {
                        $errors['confirm'] = 'Le password non corrispondono.';
                    }
                } else {
                    $errors['password'] = 'Usare almeno 1 lettera maiuscola, 1 minuscola ed 1 numero (min. 8 caratteri).';
                }

                // Name, surname, city, country validation
                if (!Validate::validate_string($member['name'], 3, 100) || 
                    !Validate::validate_string($member['surname'], 3, 100) || 
                    !Validate::validate_string($member['city'], 3, 100) || 
                    !Validate::validate_string($member['country'], 3, 100)) {
                        $errors['name'] = 'Sono consentite solo lettere e spazi bianchi. (3-100 caratteri)';
                }

                if (!Validate::validate_age($member['bday'], 18)) {
                    $errors['bday'] = 'Inserire una data valida (18+).';
                }
            }

            // If no errors, insert into db
            if (empty($errors)) {
                $member['password'] = password_hash($member['password'], PASSWORD_DEFAULT);
                $userModel->create($member);
                        
                // Get the ID of the newly inserted user
                $added = $userModel->getLastInsertId();  // This should return the last inserted ID
    
                echo json_encode( ['success' => true, 'url_id' => $added]);
                    exit();
            } else {
                // Display errors if validation fails
                echo json_encode( ["success" => false, "errors" => $errors]);
                exit();
            }    
    }

// Return validation errors as JSON
echo json_encode(["success" => false, "errors" => $errors]);