<?php
declare(strict_types = 1);                                 

if(!$id){                                                   // If no valid id
    include APP_ROOT . '/src/views/page-not-found.php';     // Page not found
}

$user = $model->getUser()->get($id);                   // Get member data
    if(!$user){                                          // If array is empty
        include APP_ROOT . '/src/views/page-not-found.php';     // Page not found
    }

// navigation menu data 
$data['navigation'] = $model->getPlatform()->getGroups();  
$data['group_count'] = $model->getPlatform()->countG(); 

//login and session data
$data['user'] = $user;    

echo $twig->render('user.html', $data);                       