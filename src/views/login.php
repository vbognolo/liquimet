<?php
declare(strict_types = 1);           
//use Liquimet\Validate\Validate;                                       //import Validate class   

    /*if($model->getSession()->role === 'public'){                        //if user is not logged in
        redirect('login/');                                              //redirect to login page
        exit;                                                           //stop code running
    } */

$username = '';                                                         //initialize username variable
$errors = [];                                                           //initialize errors            
$success = $_GET['success'] ?? null;                                    //get success message              

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['login'])){
            $username = trim($_POST['username']);                            
            $password = trim($_POST['pass']);                                     

            $user = $model->getUser()->login($username, $password);
            
            if($user){
                if($user['role'] == 'sospeso'){
                    $errors['message'] = 'Account sospeso.';
                        redirect('login');
                } elseif($user['role'] == 'admin'){
                    $model->getSession()->create($user);
                        redirect('admin/index/' . $user['id_user']);
                } else{
                    $model->getSession()->create($user);
                        redirect('index/' . $user['id_user']);
                }
            } else{
                $errors['message'] = 'Riprovare';
                    redirect('login');
            }
        }                              
    }

$data['success'] = $success;                                            //success message
$data['username'] = $username;                                          //username
$data['errors'] = $errors;                                              //errors array

echo $twig->render('login.html', $data);