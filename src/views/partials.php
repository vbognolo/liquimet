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
$data['navigation'] = $model->getCategory()->getGroups(); 
$data['categories'] = $model->getCategory()->getAll();   
$data['group_count'] = $model->getCategory()->countG(); 

// table data
$data['transports'] = $model->getTransport()->getPart();
$data['quantities'] = $model->getQuantity()->getPart();
$data['countPart'] = $model->getTransport()->countPart();
// $data['partials'] = $model->getPartial()->getAll();
 
// login and session data
$data['user'] = $model->getUser()->get($id);

// current category data
//$data['transport'] = $transport = $model->getTransport()->get($id);                                                            
//$data['section'] = $transport['id_category'];                                                                                           

echo $twig->render('partials.html', $data);                                                                                                                                                             
