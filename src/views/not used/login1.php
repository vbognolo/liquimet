<?php
declare(strict_types = 1); 
use Liquimet\Controller\LoginController;
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
$loginController = new LoginController($twig, $session, $userModel);

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $loginController->login();
    } else {
        $loginController->loginPage();
    }