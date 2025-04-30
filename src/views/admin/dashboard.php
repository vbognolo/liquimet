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
$adminController->renderDashboardPage();