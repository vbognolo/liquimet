<?php
declare(strict_types = 1);   

//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['categories'] = $model->getPlatform()->getAll();   
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//table data
$data['transports'] = $model->getTransport()->getPartial();
$data['partials'] = $model->getPartial()->getAll();
$data['total'] = $model->getTransport()->countPart(); 

echo $twig->render('admin/trasportiParziali.html', $data);                                         