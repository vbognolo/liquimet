<?php
declare(strict_types = 1);  
use Liquimet\Controller\UserController;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Setup Twig environment
$twig = new Environment(new FilesystemLoader(APP_ROOT . '/templates'));

// Instantiate the session and user model
$session = new Session(); 
$userModel = new User( $database);  

// Instantiate and handle login actions
$userController = new UserController($twig, $session, $userModel);

// Call the index method to load the admin dashboard
$userController->indexUser();

/*
$session->requireLogin();

$user = $model->getUser()->get($session->getID());

//navigation menu data 
$data['navigation'] = $model->getPlatform()->getNavigation(); 
$data['totalAdminNav'] = $model->getPlatform()->totalAdminNav();  

//login and session data
$data['user'] = $user;  

//dashboard data
$data['unloadedSum'] = $model->getQuantity()->sumUnloaded();

$data['allTransports'] = $model->getTransport()->totalTransport();
$data['fullTransports'] = $model->getTransport()->totalTransports('F');
$data['partTransports'] = $model->getTransport()->totalTransports('P');
$data['recent'] = $model->getTransport()->getRecent($user['id_user']);

echo $twig->render('index.twig', $data);

//$logged_in = $model->getSession()->username ?? false;
//require_login($logged_in);
/*require_login();

//navigation menu data 
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getUser()->get($model->getSession()->id_user);;     

//dashboard data
$data['countU'] = $model->getUser()->countActive();
$data['countT'] = $model->getTransport()->count();
$data['sum'] = $model->getQuantity()->sum();
$data['countFull'] = $model->getTransport()->countFull();
$data['countPart'] = $model->getTransport()->countPart();
$data['recent'] = $model->getTransport()->getRecent($user['id_user']);
//$data['trans'] = $model->getTransport()->getAll($user['id_user'], 7);       //get user's transports

echo $twig->render('index.html', $data);       */                   