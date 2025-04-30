<?php
declare(strict_types = 1);   

require_login();
is_admin($session->role);  
          
//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['categories'] = $model->getPlatform()->getAll();   
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getUser()->get($model->getSession()->id_user);   

//table data
$data['transports'] = $model->getQuantity()->getFull();
$data['total'] = $model->getTransport()->countFull(); 

echo $twig->render('transports-full.html', $data);