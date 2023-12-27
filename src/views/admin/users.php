<<<<<<< HEAD
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
=======
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
>>>>>>> fa83cdb56ec98407968a1c9bb5aa724a53e3bcd7
