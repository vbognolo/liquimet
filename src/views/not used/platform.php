<?php
declare(strict_types = 1);    
require_login();
is_admin($session->role);                 

//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups();   
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//table data
$data['quantities'] = $model->getQuantity()->getAll(); 
//$data['partials'] = $model->getPartial()->getAll();
$data['total'] = $model->getTransport()->count();

echo $twig->render('platform.html', $data);   