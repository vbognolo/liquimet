<?php
declare(strict_types = 1);  
use Liquimet\Controller\AdminUsersController;
use Liquimet\Core\Router;
use Liquimet\Model\Title;
use Liquimet\Model\User;
use Liquimet\Session\Session;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Setup Twig environment
$twig = new Environment(new FilesystemLoader(APP_ROOT . '/templates'));

// Instantiate the router, session, navigation, user and title model
$session = new Session(); 
$router = new Router($session);
$userModel = new User($database);
$titleModel = new Title($database);

$controller = new AdminUsersController($twig, $session, $userModel, $titleModel);

// Register routes based on GET 'action'
$router->get('renderUserModal', fn() => $controller->renderUserModal());            // Render user modal

// Register routes based on POST 'action'
$router->post('getUserData', fn() => $controller->getUserData());                   // Get user data for edit
$router->post('handleEditSubmit', fn() => $controller->handleEditUser());         // Handler for user edit

$router->post('getUserDelete', fn() => $controller->getUserDelete());               // Get user's name and surname for delete
$router->post('handleDeleteUser', fn() => $controller->handleDeleteUser());         // Handler for user delete

// Fallback for invalid or missing actions
$action = $_POST['action'] ?? $_GET['action'] ?? null;
$router->dispatch($action);