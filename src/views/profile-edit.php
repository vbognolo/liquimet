<?php
declare(strict_types = 1); 
use Liquimet\Validate\Validate;
require_login(); 
                           
$id = $model->getSession()->id_user;                            //get user's id from session
    if($id === 0){                                              //if not logged in
        redirect('login');                                      //redirect
    }

    if($_SERVER['REQUEST_METHOD'] != 'POST'){                               //if form not posted
        $user = $model->getUser()->get($model->getSession()->id_user);      //get user details
    }
   
    if($_SERVER['REQUEST_METHOD'] == 'POST'){                               //if form was posted, get input data
        if(isset($_POST['save'])){
            $user = [
                'username' => Validate::check_input($_POST['username']),
                'email' => Validate::check_input($_POST['email']),
                'name' => Validate::check_input($_POST['name']),               
                'surname' => Validate::check_input($_POST['surname']),
                'birthday' => date_format(new DateTime($_POST['birthday']), 'Y-m-d'),
                'city' => Validate::check_input($_POST['city']),
                'country' => Validate::check_input($_POST['country']), 
                //'id_role' => $_POST['id_role'],                                   //access
                //'id_title' => $_POST['id_title'],                                 //ruolo aziendale
                'modified' => date('Y-m-d'),
                'id_user' => $model->getSession()->id_user,   
            ];          
                
            $result = $model->getUser()->updateProfile($user);              //update member  
                if($result === false){                                                 
                    include APP_ROOT . '/src/views/page-not-found.php';                              
                } else{                                                     
                    redirect('profile/' . $user['id_user']); 
                    $model->getSession()->update($user);                    //update session
                }
        } 
    }

//login and session data
$data['user'] = $user;  

echo $twig->render('profile-edit.html', $data);   