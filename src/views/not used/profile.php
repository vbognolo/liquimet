<?php
declare(strict_types = 1);                                 

require_login();
is_admin($session->role);  

    /*if(!$id){                                                   //if no valid id
        include APP_ROOT . '/src/pages/page-not-found.php';     //page not found
    }*/

$user = $model->getUser()->get($model->getSession()->id_user);                            //get user data
    if(!$user){                                                 //if array is empty
        include APP_ROOT . '/src/pages/page-not-found.php';     //page not found
    }

// navigation menu data 
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['group_count'] = $model->getPlatform()->countG(); 

//login and session data
$data['user'] = $user;  

//edit data
$data['titles'] = $model->getUser()->getTitles();
$data['roles'] = $model->getUser()->getRoles();

echo $twig->render('profile.html', $data);                       