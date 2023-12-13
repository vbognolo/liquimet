<?php
declare(strict_types = 1);           
//use Liquimet\Validate\Validate;                                       //import Validate class   

//$username = '';                                                           // initialize username variable
//$errors = [];                                                             // initialize errors                          

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
    	if(isset($_POST['login'])){
            $username = trim($_POST['username']);                                        
            $password = trim($_POST['pass']);      
            
            $user = $model->getUser()->login($username, $password);       //get user details
             
                if($user['role'] == 'admin'){
                    redirect('admin/index/' . $user['id_role']);
                }elseif($user['role'] == 'membro'){
                    redirect('index/' . $user['id_role']);
                }else{
                    $message[] = 'no user found!';
                }
                   
        }else{
            $message[] = 'incorrect email or password!';
        }
    }

$data['username'] = $username;                                              //username if validation successfull
$data['errors'] = $errors;                                                  //errors array

echo $twig->render('login.html', $data);                 