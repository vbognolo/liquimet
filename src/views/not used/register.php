<?php
declare(strict_types = 1);                    
use Liquimet\Validate\Validate;                                  
require_login();
is_admin($session->role);        

$user = $model->getSession()->id_user;
$member = [];
$errors = [];



/*
if(isset($_POST['login'])){
    $username = Validate::validate_input($_POST['username']) ?? '';                            
    $password = Validate::validate_input($_POST['pass']) ?? '';                                

    if(empty($username) || empty($password)){
        $error = 'Inserire username e password per accedere al sito.';
    } else{
        $user = $model->getUser()->login($username, $password);

            if(!$user){
                $error = 'Credenziali utente errate. Riprovare';
            } else{
                if($user['role'] == 'sospeso' || $user['role'] == 'disattivato'){
                    $error = 'Credenziali sospese o revocate.';
                } elseif($user['role'] == 'admin'){
                    $model->getSession()->create($user);
                        redirect('admin/index');
                } else{
                    $model->getSession()->create($user);
                        redirect('index');
                }
            } 
    }
*/



    if($_SERVER['REQUEST_METHOD'] == 'POST'){                                                     //if form was posted, get input data
        if(isset($_POST['submit'])){
            $member = [
                'username' => Validate::validate_input($_POST['username']) ?? '',
                'password' => Validate::validate_input($_POST['password']) ?? '',
                'email' => Validate::validate_input($_POST['email']) ?? '',
                'name' => Validate::validate_input($_POST['name']) ?? '',               
                'surname' => Validate::validate_input($_POST['surname']) ?? '',
                'birthday' => date_format(new DateTime($_POST['bday']), 'Y-m-d') ?? '',
                'city' => Validate::validate_input($_POST['city']) ?? '',
                'country' => Validate::validate_input($_POST['country']) ?? '',
                'id_gender' => Validate::validate_input($_POST['id_gender']) ?? '',
                'id_role' => Validate::validate_input($_POST['id_role']) ?? '',                      //page access
                'id_title' => Validate::validate_input($_POST['id_title']) ?? '',                    //ruolo aziendale  
                'joined' => date('Y-m-d') ?? null,
            ];   

            //username validation
            if(!isset($member['username']) || empty($member['username'])){
                $errors['username'] = 'Tutti i campi sono obbligatori.';
            } else{
                $username = $model->getUser()->getUsername($member['username']);

                    if($username > 0){
                        $errors['username'] = 'Username già in uso.';
                    } elseif(!Validate::check_username($member['username'])){
                        $errors['username'] = 'Sono consentiti solo lettere e numeri. Caratteri min = 4, max = 20';
                    } else{
                        $error['username'] = 'Si e verificato un errore. Riprovare.';
                    }
            }

            //password validation
            if(!isset($member['password']) || empty($member['password'])){
                $errors['password'] = 'Tutti i campi sono obbligatori.';
            } else{
                $confirm = Validate::validate_input($_POST['confirm']);

                    if(!Validate::check_password($member['password']) || !Validate::check_password($confirm)){
                        $errors['password'] = 'Usare almeno una maiuscola, una minuscola ed un numero. Minima lunghezza = 8 caratteri';
                    } elseif($confirm != $member['password']){
                        $errors['password'] = 'Le password non coincidono.';
                    } else{
                        $errors['password'] = 'Si e verificato un errore. Riprovare.';
                    }
            }

            //email validation 
            if(!isset($member['email']) || empty($member['email'])){
                $errors['email'] = 'Tutti i campi sono obbligatori.';
            } else{
                $email = $model->getUser()->getEmail($member['email']);

                    if($email > 0){
                        $errors['email'] = 'Indirizzo e-mail già in uso.';
                    } elseif(!Validate::check_email($member['email'])){
                        $errors['email'] = 'Sono consentiti solo lettere e numeri. Caratteri min = 4, max = 20';
                    } else{
                        $errors['email'] = 'Si e verificato un errore. Riprovare.';
                    }
            }
                    
            
            
            /*
            $errors = [
                'username' => Validate::isText($member['username'], 6, 20) ? '' : 'Sono consentiti solo lettere e spazi bianchi. Caratteri min = 6, max = 20',
                'password' => Validate::isPassword($member['password']) ? '' : 'Usare almeno una maiuscola, una minuscola ed un numero. Minima lunghezza = 8 caratteri',
                'email' => Validate::isEmail($member['email']) ? '' : "Inserire un'e-mail valida.",
                'name' => Validate::isText($member['name']) ? '' : 'Sono consentiti solo lettere e spazi bianchi.',
                'surname' => Validate::isText($member['surname']) ? '' : 'Sono consentiti solo lettere e spazi bianchi.',
                'bday' => Validate::isDate($member['birthday']) ? '' : 'Inserire una data di nascita valida',
                'city' => Validate::isText($member['city'], 3, 50) ? '' : 'Sono consentiti solo lettere e spazi bianchi.',
                'country' => Validate::isText($member['country'], 3, 50) ? '' : 'Sono consentiti solo lettere e spazi bianchi.',
                'confirm' => ($member['password'] === $_POST['confirm']) ? '' : 'Le password non corrispondono.'
            ];
            
            $invalid = implode($errors);                //join error messages
            */
                if(!$errors){                                              //if no errors
                    $result = $model->getUser()->create($member);           //create member + store result
                    
                        if($result === false){                                   //if result is false
                            $errors['msg'] = 'Si e verificato un errore. Riprovare';    //store a warning
                        } else{                                             
                            redirect('admin/users');
                        }
                }
        } 
    }

//navigation menu data 
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user; 

//insert register form data
$data['titles'] = $model->getUser()->getTitles();
$data['roles'] = $model->getUser()->getRoles();
$data['gender'] = $model->getUser()->getGender();    
$data['member'] = $member; 
$data['confirm'] = $confirm;
$data['errors'] = $errors;                                               

echo $twig->render('admin/register.twig', $data);