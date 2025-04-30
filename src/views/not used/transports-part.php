<?php
declare(strict_types = 1);   
require_login();
is_admin($session->role);

//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups();  
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getUser()->get($model->getSession()->id_user);

//table data
$data['transports'] = $model->getTransport()->getPartial();
$data['partials'] = $model->getPartial()->getAll();
$data['total'] = $model->getTransport()->countPart(); 

echo $twig->render('transports-part.html', $data); 