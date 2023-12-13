<?php
declare(strict_types = 1);                                 
/*
if(!$id){                                                   // If no valid id
    include APP_ROOT . '/src/views/page-not-found.php';     // Page not found
}

$user = $model->getUser()->get($id);                   // Get member data
    if(!$user){                                          // If array is empty
        include APP_ROOT . '/src/views/page-not-found.php';     // Page not found
    }
*/
// navigation menu data 
$data['navigation'] = $model->getCategory()->getAdminGroups(); 
$data['categories'] = $model->getCategory()->getAll();  
$data['group_count'] = $model->getCategory()->countG();  

// users data
$data['users'] = $model->getUser()->getAll();

// other data
$data['group'] = '';                                                                    // group id for link
$data['section'] = '';    

echo $twig->render('admin/users.html', $data);                       