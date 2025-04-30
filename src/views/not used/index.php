<?php
declare(strict_types = 1);  
use Liquimet\Controller\AdminDashboardController;
use Liquimet\Session\Session;
use Liquimet\Model\Navigation;
use Liquimet\Model\User;
use Liquimet\Model\Transport;
use Liquimet\Model\Quantity;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Setup Twig environment
$twig = new Environment(new FilesystemLoader(APP_ROOT . '/templates'));

// Instantiate the session and user model
$session = new Session(); 
$modelNavigation = new Navigation($database); 
$modelUser = new User($database);
$modelTransport = new Transport($database);
$modelQuantity = new Quantity($database);

// Instantiate and handle login actions
$adminController = new AdminDashboardController($twig, $session, $modelNavigation, $modelUser, $modelTransport, $modelQuantity);

// Call the index method to load the admin dashboard
$adminController->dashboardPage();
/*
$session->requireLogin();
$session->requireAdmin();

$user = $model->getUser()->get($session->getID());

//navigation menu data 
$data['navigation'] = $model->getPlatform()->getAdminNavigation(); 
$data['totalAdminNav'] = $model->getPlatform()->totalAdminNav(); 

//login and session data
$data['user'] = $user; 

//dashboard data
$data['unloadedSum'] = $model->getQuantity()->sumUnloaded();

$data['allTransports'] = $model->getTransport()->totalTransport();
$data['fullTransports'] = $model->getTransport()->totalTransports('F');
$data['partTransports'] = $model->getTransport()->totalTransports('P');
$data['recent'] = $model->getTransport()->getRecent();

$data['activeUsers'] = $model->getUser()->totalUsers();
$data['adminUsers'] = $model->getUser()->totalUsersRole(1);
$data['memberUsers'] = $model->getUser()->totalUsersRole(2);
$data['suspendedUsers'] = $model->getUser()->totalUsersRole(3);

echo $twig->render('admin/index.twig', $data);        */    

