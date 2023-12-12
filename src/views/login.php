<?php
declare(strict_types = 1);           
use Liquimet\Validate\Validate;                                       //import Validate class   
/*
if($model->getSession()->role !== 'public'){                         // If user is already logged in
    redirect('index/' . $model->getSession()->id_user);        // Redirect to their page
    exit;                                                           // Stop code running
}
*/
$username = '';                                                           // initialize username variable
$errors = [];                                                             // initialize errors                          

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['submit'])){
            $username = $_POST['username'];                                         // get username
            $pass = $_POST['pass'];                                         // get password

            $errors['pass'] = Validate::isPassword($pass) ? '' : "Password non valida.";                // validate password
            $invalid = implode($errors);                                                                        // join errors

            if($invalid){                                               // If data is not valid
                $errors['message'] = 'Riprovare.';                      // Store error message
            } else{                                                     // If data was valid
                $user = $model->getUser()->login($username, $pass);    // Get member details
                
                    if($user and $user['role'] == 'sospeso'){      // If member is suspended
                        $errors['message'] = 'Account suspended';          // Store message
                    } elseif($user){                                   // Otherwise for members
                        $model->getSession()->create($user);               // Create session
                        redirect('index/' . $user['id_user']);               // Redirect to their page
                    } else{
                        $errors['message'] = 'Please try again.';          // Store error message
                    }
            }
        }                            // if form submitted
        
    }

$data['username'] = $username;                                                    // email if validation failed
$data['errors'] = $errors;                                                  // errors array

echo $twig->render('login.html', $data);                 