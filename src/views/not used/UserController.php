<?php
declare(strict_types = 1); 
use Liquimet\Validate\Validate;
$session->requireLogin();
$session->requireAdmin();

//initialize variables that are needed for the the HTML page
$member = [];                                                    
$saved = null;
$errEmptyEdit = false;
$errInputEdit = false;
$resp = [
    'status' => 0,
    'msg' => 'Invio del modulo non riuscito.', 
    'errEditName' => '',
    'errEditSurname' => '',
    'errEditEmail' => '',
    'errEditUsername' => '',
    'errEditBday' => '',
    'errEditCity' => '',
    'errEditCountry' => '',
    'errEditGender' => '',
    'errEditmember' => '',
    'errEditRole' => '',
];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['id_user'])){
            $member = [
                'username' => Validate::check_input($_POST['username']),
                'email' => Validate::check_input($_POST['email']),
                'name' => Validate::check_input($_POST['name']),               
                'surname' => Validate::check_input($_POST['surname']),
                'birthday' => date_format(new DateTime($_POST['birthday']), 'Y-m-d'),
                'city' => Validate::check_input($_POST['city']),
                'country' => Validate::check_input($_POST['country']),
                'id_gender' => $_POST['id_gender'],
                'id_role' => $_POST['id_role'],                      //access
                'id_title' => $_POST['id_title'],                    //ruolo aziendale  
                'modified' => date('Y-m-d'),
                'id_user' => $_POST['id_user'],
            ];   

            //username validation
            $username = $model->getUser()->getUsername($member['username']);

                if(!isset($member['username']) || empty($member['username'])){
                    $errEmptyEdit = true;
                    $resp['errEditUsername'] = "Campo obbligatorio.";
                } elseif(!Validate::check_username($member['username'])){
                    $errInputEdit = true;
                    $resp['errEditUsername'] = "Sono consentiti solo lettere e numeri tra lunghezza minima di 4 e massima di 20 caratteri.";
                } elseif(($username > 1) && ($username != $member["username"])){
                    $errInputEdit = true;
                    $resp['errEditUsername'] = "Username già in uso.";
                }

            //email validation
            $email = $model->getUser()->getEmail($member['email']);

                if(!isset($member['email']) || empty($member['email'])){
                    $errEmptyEdit = true;
                    $resp['errEditEmail'] = "Campo obbligatorio.";
                } elseif(($email > 1) && ($email !== $member['email'])){
                    $errInputEdit = true;
                    $resp['errEditEmail'] = "Indirizzo e-mail già in uso.";
                } elseif(!Validate::check_email($member['email'])){
                    $errInputEdit = true;
                    $resp['errEditEmail'] = "Inserire un'indirizzo e-mail valido: sono consentiti solo lettere e numeri tra lunghezza minima di 4 e massima di 20 caratteri.";
                } 

            //name validation
                if(!isset($member['name']) || empty($member['name'])){
                    $errEmptyEdit = true;
                    $resp['errEditName'] = "Campo obbligatorio.";
                } elseif(!Validate::check_name($member['name'])){
                    $errInputEdit = true;
                    $resp['errEditName'] = "Sono consentiti solo lettere e spazi bianchi.";
                } 

            //surname validation
                if(!isset($member['surname']) || empty($member['surname'])){
                    $errEmptyEdit = true;
                    $resp['errEditSurname'] = "Campo obbligatorio.";
                } elseif(!Validate::check_name($member['surname'])){
                    $errInputEdit = true;
                    $resp['errEditSurname'] = "Sono consentiti solo lettere e spazi bianchi.";
                }  

            //birthday validation
                if(!isset($member['birthday']) || empty($member['birthday'])){
                    $errEmptyEdit = true;
                    $resp['errEditBday'] = "Campo obbligatorio.";
                } elseif(!Validate::check_age($member['birthday'], 18, 100)){
                    $errInputEdit = true;
                    $resp['errEditBday'] = "Accesso non consentito. Utente minorenne o data di nascita non valida.";
                } 

            //city validation
                if(!isset($member['city']) || empty($member['city'])){
                    $errEmptyEdit = true;
                    $resp['errEditCity'] = "Campo obbligatorio.";
                } elseif(!Validate::check_name($member['city'])){
                    $errInputEdit = true;
                    $resp['errEditCity'] = "Sono consentiti solo lettere e spazi bianchi.";
                } 

            //country validation
                if(!isset($member['country']) || empty($member['country'])){
                    $errEmptyEdit = true;
                    $resp['errEditCountry'] = "Campo obbligatorio.";
                } elseif(!Validate::check_name($member['country'])){
                    $errInputEdit = true;
                    $resp['errEditCountry'] = "Sono consentiti solo lettere e spazi bianchi.";
                } 

            //gender validation
                if(!isset($member['id_gender']) || empty($member['id_gender'])){
                    $errEmptyEdit = true;
                    $resp['errEditGender'] = "Campo obbligatorio.";
                }

            //role validation
                if(!isset($member['id_role']) || empty($member['id_role'])){
                    $errEmptyEdit = true;
                    $resp['errEditRole'] = "Campo obbligatorio.";
                }

            //member validation
                if(!isset($member['id_title']) || empty($member['id_title'])){
                    $errEmptyEdit = true;
                    $resp['errEditTitle'] = "Campo obbligatorio.";
                }


                    //if no resp insert data
                    if($errEmptyEdit == false && $errInputEdit == false){
                        $saved = $model->getUser()->update($member);

                            if($saved){
                                $resp['msg'] = "I dati sono stati modificati con successo.";
                                $resp['status'] = 1;
                            } else{
                                $resp['msg'] = "Si e verificato un problema. Riprovare.";
                            }
                    } 
        };
    };

echo json_encode($resp);