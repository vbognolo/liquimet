<?php
declare(strict_types = 1);  
use Liquimet\Controller\LoginController;
use Liquimet\Session\Session;
use Liquimet\Model\User;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

$twig = new Environment(new FilesystemLoader(APP_ROOT . '/templates'));
$session = new Session(); 
$userModel = new User( $database);  

$loginController = new LoginController($twig, $session, $userModel);
$loginController->logout();               