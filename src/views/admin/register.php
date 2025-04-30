<?php
declare(strict_types = 1);          
//is_admin($session->role);                     
//use Liquimet\Validate\Validate;                                 //import Validate class          
               
$member = [];                                                     //initialize member array
//$errors = '';                                                   //initialize errors array

    if($_SERVER['REQUEST_METHOD'] == 'POST'){                     //if form was posted, get input data
        if(isset($_POST['submit'])){
            $member['username'] = $_POST['user']; 
            $member['password'] = $_POST['pass'];            
            $member['email'] = $_POST['email'];
            $member['name'] = $_POST['name'];               
            $member['surname'] = $_POST['surname'];
            $member['gender'] = $_POST['gender'];     
            $member['role'] = $_POST['role'];                     //access
            $member['title'] = $_POST['title'];                   //ruolo aziendale
            $confirm = $_POST['confirm'];                         //get password confirmation 
                
            
            
            //$errors = ($member['password'] = $confirm) ? '' : 'Passwords do not match';
            
            if($member['password'] === $confirm){                                                        //if no errors
                $result = $model->getUser()->create($member);                             //create member
                    
                    if($result === false){                                                  //if result is false
                        echo "Kurcina";                             //store a warning
                    } else{                                                                 //otherwise send to index page
                        redirect('admin/index/' . $session->id_user); 
                    }
            } 
        }
        //$errors['confirm'] = ($member['password'] = $confirm) ? '' : 'Passwords do not match';
        //$invalid = implode($errors);                            //join error messages
    }

//navigation menu data 
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getUser()->get($id); 

//insert register form data
$data['titles'] = $model->getUser()->getTitles();
$data['member'] = $member;                                                   //member data

//$data['errors'] = $errors;                                                   //error messages

echo $twig->render('admin/register.html', $data);                            //render template