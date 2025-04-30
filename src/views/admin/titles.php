<?php
declare(strict_types = 1);  
use Liquimet\Controller\AdminTitlesController;
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
$modelNavigation = new Navigation($database); 
$modelUser = new User($database);
$modelTitle = new Title($database);

// Instantiate and handle login actions
$adminTitlesController = new AdminTitlesController($twig, $session, $modelNavigation, $modelUser, $modelTitle);

// Call the index method to load the admin dashboard
$adminTitlesController->allTitlesPage();