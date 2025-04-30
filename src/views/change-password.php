<?php
declare(strict_types = 1);       
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
            $pass = $_POST['pass'];   
            $new = $_POST['new'];
            $confirm  = $_POST['confirm'];          
            $user = $model->getUser()->get($id);

            if($user && password_verify($pass, $user['password'])){
                if($new == $confirm){
                    $result = $model->getUser()->passwordUpdate($id, $new);                     
                            
                        if($result === false){                                                 
                            include APP_ROOT . '/src/views/page-not-found.php';                              
                        } else{                                                     
                            redirect('profile/' . $user['id_user']); 
                            $model->getSession()->update($user);                    //update session
                        }
                }
            }
        } 
    }                                   

//login and session data
$data['user'] = $user;  

echo $twig->render('change-password.html', $data);   