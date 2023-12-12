<?php
declare(strict_types = 1);   

    if(!$id){                                                   
        include APP_ROOT . '/src/views/page-not-found.php';    
    }

    $category = $model->getCategory()->get($id);                 
        if(!$category){                                          
            include APP_ROOT . '/src/views/page-not-found.php';    
        } 

        if(mb_strtolower($parts[2]) != mb_strtolower($category['seo_group'])) {                  // if seo name wrong
            redirect('category/' . $id . '/' . $category['seo_group'], [], 301);                 // redirect to correct url
        }     
     
// navigation menu data
$data['navigation'] = $model->getCategory()->getGroups(); 
$data['categories'] = $model->getCategory()->getAll();   
$data['group_count'] = $model->getCategory()->countG();  

// login and session data
$data['user'] = $model->getUser()->get($id);

// table data
$data['transports'] = $model->getTransport()->getAll();
$data['quantities'] = $model->getQuantity()->getAll();
$data['partials'] = $model->getPartial()->getAll();
$data['total'] = $model->getTransport()->count();

// current category data
$data['category'] = $category;                                                        // current group
$data['group'] = $category['id_group'];                                               // group id for link     
$data['section'] = $category['id_category'];                                          // category id for nav  

echo $twig->render('category.html', $data);                                         
