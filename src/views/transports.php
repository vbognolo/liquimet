<?php
declare(strict_types = 1);      

    if(!$id){                                                   
        include APP_ROOT . '/src/views/page-not-found.php';    
    }
/*
    $transport = $model->getTransport()->get($id);                 
        if(!$transport){                                          
            include APP_ROOT . '/src/views/page-not-found.php';    
        } 
        
    $quantity = $model->getQuantity()->get($id);
        if(!$quantity){                                          
            include APP_ROOT . '/src/views/page-not-found.php';    
        } 
*/
// navigation menu data
$data['navigation'] = $model->getPlatform()->getGroups(); 
$data['categories'] = $model->getPlatform()->getAll();   
$data['group_count'] = $model->getPlatform()->countG(); 

// table data
$data['transports'] = $model->getTransport()->getFull();
$data['quantities'] = $model->getQuantity()->getFull();
$data['countFull'] = $model->getTransport()->countFull();
 
// login and session data
$data['user'] = $model->getUser()->get($id);

// current category data
$data['transport'] = $transport = $model->getTransport()->get($id);                                                            
$data['section'] = $transport['id_category'];                                                                                           

echo $twig->render('transports.html', $data);                                                                                
