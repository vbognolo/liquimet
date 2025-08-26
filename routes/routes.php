<?php
declare(strict_types=1);
use Liquimet\Controller\LoginController;
use Liquimet\Controller\AdminController;
use Liquimet\Controller\AdminUsersController;
use Liquimet\Controller\UserController;
use Liquimet\Controller\PlatformController;

    if (!isset($router)) {
        throw new \Exception("Router not initialized before loading routes.php");
    }

/* ------------------------ *
 *     LOGIN CONTROLLER     *    
 * ------------------------ */
$LoginController = new LoginController($twig, $session, $mUser, $loginAttempt);
// GET methods
$router->get('login',             [$LoginController, 'renderLoginPage']);
$router->get('password-reset',    [$LoginController, 'renderResetPassword']);
$router->get('admin/login-audit', [$LoginController, 'showLoginAudit']);
$router->get('logout',            [$LoginController, 'logout']);
// POST methods
$router->post('login',            [$LoginController, 'login']);
$router->post('password-lost',    [$LoginController, 'sendResetLink']);
$router->post('password-reset',   [$LoginController, 'updatePassword']);


/* ------------------------ *
 *     ADMIN CONTROLLER     *    
 * ------------------------ */
$AdminController = new AdminController($twig, $session, $mUser, $mTrans, $mQty);
// GET methods
$router->get('admin/dashboard', [$AdminController, 'renderDashboardPage']);        // Dashboard routes

/* ---------------------------- *
 *    ADMIN USERS CONTROLLER    *    
 * ---------------------------- */
$AdminUsersController = new AdminUsersController($twig, $session,  $mUser, $mTitle);
// GET methods
$router->get('admin/users',       [$AdminUsersController, 'renderUsersPage']);     // Render users data
$router->get('admin/user',        [$AdminUsersController, 'registerPage']);        // Register new user
$router->get('admin/user-modal',  [$AdminUsersController, 'renderUserModal']);     // Render user modal 
// POST methods
$router->post('admin/user',       [$AdminUsersController, 'register']);            // Handler for register
$router->post('admin/user-edit',  [$AdminUsersController, 'getUserData']);         // Get user data for edit
$router->post('user-edit',        [$AdminUsersController, 'handleEditUser']);      // Handler for user edit
$router->post('getUserDelete',    [$AdminUsersController, 'getUserDelete']);       // Get user's name and surname for delete
$router->post('handleDeleteUser', [$AdminUsersController, 'handleDeleteUser']);    // Handler for user delete

/* ----------------------- *
 *     USER CONTROLLER     *    
 * ----------------------- */
$UserController = new UserController($twig, $session, $mUser, $mTitle);
// GET methods
$router->get('profile',           [$UserController, 'renderProfilePage']);    
// POST methods    
$router->post('profile-edit',     [$UserController, 'updateProfile']);      
$router->post('check-username',   [$UserController, 'checkUsername']);
$router->post('check-email',      [$UserController, 'checkEmail']);
$router->post('profile-password', [$UserController, 'updatePassword']);
$router->post('check-password',   [$UserController, 'checkPassword']);

/* --------------------------- *
 *     PLATFORM CONTROLLER     *    
 * --------------------------- */
$PlatformController = new PlatformController($twig, $session, $mUser, $mTrans, $mQty, $mPart);
// => GET methods
$router->get('transports',       [$PlatformController, 'viewAllTransports']);         // Render platform data 
$router->get('transports-full',  [$PlatformController, 'viewFullTransports']);        // Render full transports data
$router->get('transports-part',  [$PlatformController, 'viewPartTransports']);        // Render partial transports data
$router->get('transport-modals', [$PlatformController, 'viewTransportModals']);       // Render transport modals
$router->get('transport',        [$PlatformController, 'viewNewTransport']);          // Render new transport 
// => POST methods
$router->post('pagination',       [$PlatformController, 'viewPagination']);           // Render pagination for transports
$router->post('transport',        [$PlatformController, 'createTransport']);          // Handler for transport create
$router->post('get-transport',    [$PlatformController, 'getTransportData']);         // Get transport data for edit
$router->post('check-transport',  [$PlatformController, 'checkTransportExistence']);
$router->post('transport-edit',   [$PlatformController, 'editTransport']);            // Handler for transport edit
$router->post('get-quantity',     [$PlatformController, 'getQuantityData']);          // Get quantity data for edit
$router->post('quantity-edit',    [$PlatformController, 'editQuantity']);             // Handler for quantity edit
$router->post('get-partial',      [$PlatformController, 'getPartialData']);           // Get partial data for edit
$router->post('partial-edit',     [$PlatformController, 'editPartial']);              // Handler for partial edit
//$router->post('get-note',         [$PlatformController, 'getTransportNotes']);      // Get transport note for edit
//$router->post('transport-note',   [$PlatformController, 'editNote']);               // Handler for transport note edit
//router->post('transport-delete', [$PlatformController, 'handleDeleteTransport']);  // Handler for transport delete
