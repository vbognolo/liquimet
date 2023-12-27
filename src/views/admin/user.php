<?php
declare(strict_types = 1);   
//is_admin($session->role);                                

    if(!$id){                                                       //if no valid id
        include APP_ROOT . '/src/views/page-not-found.php';         //page not found
    }

    $user = $model->getUser()->get($id);                            //get member data
        if(!$user){                                                 //if array is empty
            include APP_ROOT . '/src/views/page-not-found.php';     //page not found
        }

// navigation menu data 
$data['navigation'] = $model->getPlatform()->getGroups(); 
$data['categories'] = $model->getPlatform()->getAll();  
$data['group_count'] = $model->getPlatform()->countG();  

// dashboard data
$data['countU'] = $model->getUser()->count();
$data['countT'] = $model->getTransport()->count();
$data['countFull'] = $model->getTransport()->countFull();
$data['countPart'] = $model->getTransport()->countPart();
$data['recent'] = $model->getTransport()->getRecent();
$data['admins'] = $model->getUser()->countAdmin();
$data['members'] = $model->getUser()->countMember();
$data['offlines'] = $model->getUser()->countSuspended();

// other data
$data['user'] = $user;                                                                  // user data
$data['trans'] = $model->getTransport()->getAll($user['id_user'], 5);                          // get user's transports

$data['group'] = '';                                                                    // group id for link
$data['section'] = '';    

echo $twig->render('admin/user.html', $data);                       