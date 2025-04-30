<?php
declare(strict_types=1);
use Liquimet\Controller\LoginController;
use Liquimet\Controller\AdminController;
use Liquimet\Controller\AdminUsersController;
use Liquimet\Controller\UserController;

    if (!isset($router)) {
        throw new \Exception("Router not initialized before loading routes.php");
    }

// Login Controller
$LoginController = new LoginController($twig, $session, $mUser);
$router->get('login', [$LoginController, 'loginPage']);
$router->post('login', [$LoginController, 'login']);
$router->get('password-lost', [$LoginController, 'lostPasswordPage']);
$router->post('password-lost', [$LoginController, 'sendResetLink']);
$router->get('logout', [$LoginController, 'logout']);

// Admin Controller
$AdminController = new AdminController($twig, $session, $mUser, $mTrans, $mQty);
$router->get('admin/dashboard', [$AdminController, 'renderDashboardPage']);     // Dashboard routes

// Admin Users Controller
$AdminUsersController = new AdminUsersController($twig, $session,  $mUser, $mTitle);
$router->get('admin/users', [$AdminUsersController, 'renderUsersPage']);        // Render users data
$router->get('admin/user', [$AdminUsersController, 'registerPage']);            // Register new user
$router->post('admin/user', [$AdminUsersController, 'register']);               // Handler for register

$router->get('admin/user-modal', [$AdminUsersController, 'renderUserModal']);   // Render user modal 
$router->post('admin/user-edit', [$AdminUsersController, 'getUserData']);       // Get user data for edit
$router->post('user-edit', [$AdminUsersController, 'handleEditUser']);          // Handler for user edit
$router->post('getUserDelete', [$AdminUsersController, 'getUserDelete']);       // Get user's name and surname for delete
$router->post('handleDeleteUser', [$AdminUsersController, 'handleDeleteUser']); // Handler for user delete

// User Controller
$UserController = new UserController($twig, $session, $mUser, $mTitle);
$router->get('profile', [$UserController, 'renderProfilePage']);        
$router->post('profile-edit', [$UserController, 'updateProfile']);      
$router->post('check-username', [$UserController, 'checkUsername']);
$router->post('check-email', [$UserController, 'checkEmail']);
$router->post('profile-password', [$UserController, 'updatePassword']);
$router->post('check-password', [$UserController, 'checkPassword']);