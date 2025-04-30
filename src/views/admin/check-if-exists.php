<?php
declare(strict_types = 1); 
use Liquimet\Model\User;

header('Content-Type: application/json');

$response = ['exists' => false, 'message' => ''];

    // Check if email or username exist in the database
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['field'], $_POST['value'])) {
        $field = $_POST['field'];
        $value = $_POST['value']; 
        $id = $_POST['id_user'] ?? null;     // Optional ID for executing current user

        $userModel = new User($database);
       /* $email = ($field === 'email');
        $username = $field === 'username' ? $value : null;*/

        if ($userModel->checkIfExists($field, $value, $id)) {
            $response['exists'] = true;
            $response['message'] = $field === 'email' ? "Indirizzo e-mail già in uso." : "Username già in uso.";
        }  
        
      /*  if ($userModel->checkIfExists($username, $value, $id)) {
            $response['exists'] = true;
            $response['message'] = ($field === 'username') ? "Username già in uso." : "";
        } */
        /*($field === 'email' || $field === 'username') {
            $exists = $userModel->checkIfExists($field === 'email' ? $value : null, $field === 'username' ? $value : null);
            if ($exists) {
                $response['exists'] = true;
                $response['message'] = $field === 'email' ? "Indirizzo e-mail già in uso." : "Username già in uso.";
            }
        }*/
       /* 
        if ($field === 'email') {
            $checkEmail = $userModel->checkIfExists(email: $value);
            if ($checkEmail) {
                $response['checkEmail'] = true;
                $response['messageE'] = "Indirizzo e-mail già in uso."; 
            }
        } elseif ($field === 'username') {
            $checkUsername = $userModel->checkIfExists(username: $value);
            if ($checkUsername) {
                $response['checkUsername'] = true;
                $response['messageU'] = "Username già in uso."; 
            }
        }*/
    }
echo json_encode($response);