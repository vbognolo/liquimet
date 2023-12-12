<?php
declare(strict_types = 1);      

    if(!$id){                                                   
        include APP_ROOT . '/src/views/page-not-found.php';    
    }

    $transport = $model->getTransport()->get($id);                 
        if(!$transport){                                          
            include APP_ROOT . '/src/views/page-not-found.php';    
        } 

        if(mb_strtolower($parts[2]) != mb_strtolower($transport['seo'])) {                      // if seo name wrong
            redirect('transport/' . $id . '/' . $transport['seo'], [], 301);                   // redirect to correct url
        }

$data['navigation'] = $model->getCategory()->getGroups(); 
$data['categories'] = $model->getCategory()->getAll();   
$data['transports'] = $model->getTransport()->getFull();

$data['transport'] = $transport;                                                            
$data['section'] = $transport['id_category'];                                            // category for transport
$data['trans'] = $transport['id_transport'];                                             // current transport
                                                                                                                    

echo $twig->render('transport.html', $data);                                         
