<?php
declare(strict_types = 1);    

require_login();
is_admin($session->role);                             
   
//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups();  
$data['categories'] = $model->getPlatform()->getAll(); 
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getSession()->id_user;  

//table data
$data['users'] = $model->getUser()->getAll();
$data['total'] = $model->getUser()->countActive();

echo $twig->render('admin/members.html', $data);   
