<?php
declare(strict_types = 1);                                 

    if(!$id){                                                   
        include APP_ROOT . '/src/views/page-not-found.php';    
    }

$category = $model->getPlatform()->get($id);                 
    if(!$category){                                          
        include APP_ROOT . '/src/views/page-not-found.php';    
    } 

    if(mb_strtolower($parts[1]) != mb_strtolower($category['seo_group'])) {                  //if seo name wrong
        redirect('admin/' . $category['seo_group'] . '/' . $id, [], 301);                    //redirect to correct url
    }  
    
//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups();  
$data['categories'] = $model->getPlatform()->getAll(); 
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getUser()->get($id); 

//table data
$data['users'] = $model->getUser()->getAll();
$data['total'] = $model->getUser()->count();

//current category data
$data['category'] = $category;                                                        //current group
$data['group'] = $category['id_group'];                                               //group id for link     

echo $twig->render('admin/users.html', $data);                     