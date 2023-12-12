<?php
declare(strict_types = 1);     
//is_admin($session->role);                               

if(!$id){                                              // If no valid id
    include APP_ROOT . '/src/views/page-not-found.php';     // Page not found
}

$user = $model->getUser()->get($id);                   // Get member data
    if(!$user){                                          // If array is empty
        include APP_ROOT . '/src/views/page-not-found.php';     // Page not found
    }

// navigation menu data 
$data['navigation'] = $model->getCategory()->getGroups(); 
$data['categories'] = $model->getCategory()->getAll();  
$data['group_count'] = $model->getCategory()->countG();  

// dashboard data
$data['countU'] = $model->getUser()->count();
$data['countT'] = $model->getTransport()->count();
$data['sum'] = $model->getQuantity()->sum();
$data['countFull'] = $model->getTransport()->countFull();
$data['countPart'] = $model->getTransport()->countPart();
$data['recent'] = $model->getTransport()->getRecent();
$data['admins'] = $model->getUser()->countAdmin();
$data['members'] = $model->getUser()->countMember();
$data['offlines'] = $model->getUser()->countSuspended();

// other data
$data['user'] = $user;                                                                  // user data
$data['tra'] = $model->getTransport()->getAll($user['id_user'], 5);                          // get user's transports

$data['group'] = '';                                                                    // group id for link
$data['section'] = '';    

echo $twig->render('admin/index.html', $data);                       
