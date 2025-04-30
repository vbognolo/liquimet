<?php
declare(strict_types = 1);  
use Liquimet\Controller\PlatformController;
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
$navModel = new Navigation($database); 
$userModel = new User($database);
$transModel = new Transport($database);
$qtyModel = new Quantity($database);

// Instantiate and handle login actions
$platformController = new PlatformController($twig, $session, $navModel, $userModel, $transModel, $qtyModel);

// Call the index method to load the admin dashboard
$platformController->allTransportsPage();