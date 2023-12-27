<?php
<<<<<<< HEAD
declare(strict_types = 1);  
//session_start();                                         //start or renew session
/*
    if(!$id){                                                               // If no valid id
        include APP_ROOT . '/src/views/page-not-found.php';                 // Page not found
    }

$user = $model->getUser()->get($id);                                        // Get member data
    if(!$user){                                                             // If array is empty
        include APP_ROOT . '/src/views/page-not-found.php';                 // Page not found
    }
*/
//navigation menu data 
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['categories'] = $model->getPlatform()->getAll();  
$data['group_count'] = $model->getPlatform()->countG();  
=======
declare(strict_types = 1);     
//is_admin($session->role);      
//session_start();

/*$admin = $_SESSION['admin'];

if(!isset($admin)){
   header('location:login.php');
}    */                     

if(!$id){                                                       // If no valid id
    include APP_ROOT . '/src/views/page-not-found.php';         // Page not found
}

$user = $model->getUser()->get($id);                            // Get member data
    if(!$user){                                                 // If array is empty
        include APP_ROOT . '/src/views/page-not-found.php';     // Page not found
    }

// navigation menu data 
$data['navigation'] = $model->getCategory()->getAdminGroups(); 
$data['categories'] = $model->getCategory()->getAll();  
$data['group_count'] = $model->getCategory()->countG();  
>>>>>>> fa83cdb56ec98407968a1c9bb5aa724a53e3bcd7

//login and session data
$data['user'] = $user = $model->getUser()->get($id);                                    //user data
$data['group'] = '';                                                                    //group id for link
//$data['section'] = ''; 

//dashboard data
$data['countU'] = $model->getUser()->count();
$data['countT'] = $model->getTransport()->count();
$data['sum'] = $model->getQuantity()->sum();
$data['countFull'] = $model->getTransport()->countFull();
$data['countPart'] = $model->getTransport()->countPart();
$data['recent'] = $model->getTransport()->getRecent();
$data['admins'] = $model->getUser()->countAdmin();
$data['members'] = $model->getUser()->countMember();
$data['offlines'] = $model->getUser()->countSuspended();
$data['trans'] = $model->getTransport()->getAll($user['id_user'], 5);                   //get user's transports

echo $twig->render('admin/index.html', $data);                       


<<<<<<< HEAD
     
=======
echo $twig->render('admin/index.html', $data);                       
>>>>>>> fa83cdb56ec98407968a1c9bb5aa724a53e3bcd7
