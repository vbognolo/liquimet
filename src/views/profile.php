<?php
declare(strict_types = 1);  
use Liquimet\Controller\ProfileController;
use Liquimet\Model\Navigation;
use Liquimet\Model\User;
use Liquimet\Model\Title;
use Liquimet\Session\Session;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Setup Twig environment
$twig = new Environment(new FilesystemLoader(APP_ROOT . '/templates'));

// Instantiate the models
$session = new Session(); 
$navModel = new Navigation($database); 
$userModel = new User($database);
$titleModel = new Title($database);

$profileController = new ProfileController($twig, $session, $navModel, $userModel, $titleModel);

$profileController->renderProfilePage();