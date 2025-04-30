<?php
declare(strict_types = 1);                    
use Liquimet\Validate\Validate;                                  
require_login();
is_admin($session->role);        

$user = $model->getSession()->id_user;
$member = [];
$errors = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){                                                     //if form was posted, get input data
        if(isset($_POST['save'])){
            $member = [
                'username' => Validate::check_input($_POST['username']) ?? '',
                'password' => Validate::check_input($_POST['password']) ?? '',
                'email' => Validate::check_input($_POST['email']) ?? '',
                'name' => Validate::check_input($_POST['name']) ?? '',               
                'surname' => Validate::check_input($_POST['surname']) ?? '',
                'birthday' => date_format(new DateTime($_POST['birthday']), 'Y-m-d') ?? '',
                'city' => Validate::check_input($_POST['city']) ?? '',
                'country' => Validate::check_input($_POST['country']) ?? '',
                'id_gender' => Validate::check_input($_POST['id_gender']) ?? '',
                'id_role' => Validate::check_input($_POST['id_role']) ?? '',                      //page access
                'id_title' => Validate::check_input($_POST['id_title']) ?? '',                    //ruolo aziendale  
                'joined' => date('Y-m-d') ?? null,
            ];   

                //username validation
                $username = $model->getUser()->getUsername($member['username']);

                    if(!isset($member['username']) || empty($member['username'])){
                        $errors['username'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_username($member['username'])){
                        $errors['username'] = "Sono consentiti solo lettere e numeri tra lunghezza minima di 4 e massima di 20 caratteri.";
                    } elseif($username > 0){
                        $errors['username'] = "Username già in uso.";
                    }
                
                //password validation
                $confirm = Validate::check_input($_POST['confirm']);

                    if(!isset($member['password']) || empty($member['password'])){
                        $errors['password'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_password($member['password']) || !Validate::check_password($confirm)){
                        $errors['password'] = "Usare almeno una maiuscola, una minuscola ed un numero. Lunghezza minima di 8 caratteri.";
                    } elseif($confirm !== $member['password']){
                        $errors['password'] = "Le password non coincidono.";
                    }

                //email validation
                $email = $model->getUser()->getEmail($member['email']);

                    if(!isset($member['email']) || empty($member['email'])){
                        $errors['email'] = "Campo obbligatorio.";
                    } elseif($email > 0){
                        $errors['email'] = "Indirizzo e-mail già in uso.";
                    } elseif(!Validate::check_email($member['email'])){
                        $errors['email'] = "Sono consentiti solo lettere e numeri tra lunghezza minima di 4 e massima di 20 caratteri.";
                    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                        $errors['email'] = "Inserire un'indirizzo e-mail valido.";
                    }  

                //name validation
                    if(!isset($member['name']) || empty($member['name'])){
                        $errors['name'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($member['name'])){
                        $errors['name'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } 

                //surname validation
                    if(!isset($member['surname']) || empty($member['surname'])){
                        $errors['surname'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($member['surname'])){
                        $errors['surname'] = "Sono consentiti solo lettere e spazi bianchi.";
                    }  
                
                //birthday validation
                    if(!isset($member['bday']) || empty($member['bday'])){
                        $errors['bday'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_age($member['birthday'], 18, 100)){
                        $errors['bday'] = "Utente minorenne. Accesso non consentito.";
                    } 

                //city validation
                    if(!isset($member['city']) || empty($member['city'])){
                        $errors['city'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($member['city'])){
                        $errors['city'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } 

                //country validation
                    if(!isset($member['country']) || empty($member['country'])){
                        $errors['country'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($member['country'])){
                        $errors['country'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } 

                //gender validation
                    if(!isset($member['gender']) || empty($member['gender'])){
                        $errors['gender'] = "Campo obbligatorio.";
                    }

                //role validation
                    if(!isset($member['role']) || empty($member['role'])){
                        $errors['role'] = "Campo obbligatorio.";
                    }

                //title validation
                    if(!isset($member['title']) || empty($member['title'])){
                        $errors['title'] = "Campo obbligatorio.";
                    }
        /*    }*/
            
/*
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
                $confirm = Validate::check_input($_POST['confirm']);

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
                    
            
  */          
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
                            $errors['msg'] = 'Si e verificato un errore. Riprovare.';    //store a warning
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
$data['errors'] = $errors;                                               

echo $twig->render('admin/user.html', $data);