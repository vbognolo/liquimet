<?php
declare(strict_types = 1);  
use Liquimet\Controller\AdminUsersController;
use Liquimet\Session\Session;
use Liquimet\Model\Navigation;
use Liquimet\Model\User;
use Liquimet\Model\Title;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Setup Twig environment
$twig = new Environment(new FilesystemLoader(APP_ROOT . '/templates'));

// Instantiate the session and user model
$session = new Session(); 
$navModel = new Navigation($database); 
$userModel = new User($database);
$titleModel = new Title($database);

// Instantiate and handle login actions
$controller = new AdminUsersController($twig, $session, $navModel, $userModel, $titleModel);

// Call the index method to load the admin dashboard
$controller->renderUsersPage();