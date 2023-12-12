<?php
declare(strict_types = 1);                               
use Liquimet\Validate\Validate;                                     // import Validate class           
               
    $user = [];                                                     // initialize user array
    $errors = [];                                                   // initialize errors array

        if($_SERVER['REQUEST_METHOD'] == 'POST'){                   // if form was posted, get input data
            $user['email'] = $_POST['email'];
            $user['username'] = $_POST['username'];
            $user['name'] = $_POST['name'];               
            $user['surname'] = $_POST['surname'];                        
            $user['role'] = $_POST['role'];             
            $user['password'] = $_POST['password'];            
            $confirm = $_POST['confirm'];                           // get password confirmation

                // validate form data
            $errors['email'] = Validate::isEmail($user['email']) ? '' : 'Please enter a valid email';
            $errors['name'] = Validate::isText($user['name'], 1, 254) ? '' : 'Name must be 1-254 characters';
            $errors['surname'] = Validate::isText($user['surname'], 1, 254) ? '' : 'Surname must be 1-254 characters';
            $errors['username'] = Validate::isText($user['username']) ? '' : 'Please enter a valid email';
            $errors['password'] = Validate::isPassword($user['password']) ? '' : 'Passwords must be at least 8 characters and have:<br> 
                                                                                    A lowercase letter<br>An uppercase letter<br>A number 
                                                                                    <br>And a special character';
            $errors['confirm'] = ($user['password'] = $confirm) ? '' : 'Passwords do not match';
            $invalid = implode($errors);                                                    // join error messages

                if(!$invalid){                                                              // if no errors
                    $result = $model->getUser()->create($user);                             // create user
                    
                    if($result === false){                                                  // if result is false
                        $errors['username'] = 'Username already used';                      // store a warning
                    } else{                                                                 // otherwise send to login
                        redirect('admin/index/', ['success' => 'Registration successfull']); 
                    }
                }
        }

$data['navigation'] = $model->getCategory()->getGroups();  
$data['categories'] = $model->getCategory()->getAll();
$data['user'] = $user;                                   // user data
$data['errors'] = $errors;                               // error messages

echo $twig->render('register.html', $data);              // render template