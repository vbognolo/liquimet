<?php
declare(strict_types = 1);  
use Liquimet\Controller\AdminUsersController;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Liquimet\Model\Title;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Setup Twig environment
$twig = new Environment(new FilesystemLoader(APP_ROOT . '/templates'));

// Instantiate the session and user model
$session = new Session(); 
$userModel = new User($database);
$titleModel = new Title($database);

// Instantiate and handle login actions
$adminUsersController = new AdminUsersController($twig, $session,  $userModel, $titleModel);

    $adminUsersController->getUserData();