<?php
/*include_once '../src/setup.php';

// Force HTTPS if not already enabled
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}

// Initialize session
$session = new \Liquimet\Session\Session();
$isAdmin = $session->isAdmin();
$isLoggedIn = $session->isLoggedIn();

// Get the current path
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    // Only redirect if the user is at the root ("/") to prevent loops
    if ($path === '' || $path === 'index.php') {
        if (!$isLoggedIn) {
            redirect('login');
            /*header('Location: https://liquimet.local/login');
            exit();*/
/*        } elseif ($isAdmin) {
            redirect('admin/dashboard');
            /*header('Location: https://liquimet.local/admin/dashboard');
            exit();*/
/*        } else {
            redirect('index');
            /*header('Location: https://liquimet.local/index');
            exit();*/
 /*       }
    }

// Process request normally
$view = $path ?: 'index';
$php_view = APP_ROOT . '/src/views/' . $view . '.php';

    // Handle admin pages
    if (strpos($view, 'admin/') === 0 && !$isAdmin) {
        $php_view = APP_ROOT . '/src/views/errors/403.php';
    }

    // If the view file doesn't exist, load a "Page Not Found" page
    if (!file_exists($php_view)) {
        $php_view = APP_ROOT . '/src/views/page-not-found.php';
    }

// Include the resolved view file
include $php_view;*/

/*include_once '../src/setup.php'; // Ensure this includes everything needed for setup

// Force HTTPS if not already enabled
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit();
}

// Initialize session
$session = new \Liquimet\Session\Session();
$isAdmin = $session->isAdmin();
$isLoggedIn = $session->isLoggedIn();

// Get the current path (strip leading /)
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Default route (login)
if ($path === '' || $path === 'index.php') {
    if (!$isLoggedIn) {
        redirect('login'); // Make sure this function is in place to redirect users
    } elseif ($isAdmin) {
        redirect('admin/dashboard');
    } else {
        redirect('index');
    }
}

// Resolve the view path (check for existing view file)
$view = $path ?: 'index';
$php_view = APP_ROOT . '/src/views/' . $view . '.php';

// Handle restricted admin pages
if (strpos($view, 'admin/') === 0 && !$isAdmin) {
    $php_view = APP_ROOT . '/src/views/errors/403.php';
}

// If the view file doesn't exist, load a "Page Not Found" page
if (!file_exists($php_view)) {
    $php_view = APP_ROOT . '/src/views/page-not-found.php';
}

// Include the resolved view file
include $php_view;*/
declare(strict_types=1);
require_once __DIR__ . '/../src/setup.php';

    // Force HTTPS
    if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
        header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], true, 301);
        exit();
    }

// Instantiate Router
$router = new \Liquimet\Core\Router($session);

// DEFINE your models here 
$mUser = new \Liquimet\Model\User($database);
$mTitle = new \Liquimet\Model\Title($database);
$mTrans = new \Liquimet\Model\Transport($database);
$mQty = new \Liquimet\Model\Quantity($database);

// Only now include the routes (since models exist) 
require_once APP_ROOT . '/routes/routes.php';

// Dispatch request
$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

    // Default route (login)
    if ($path === '' || $path === 'index.php') {
        if (!$isLoggedIn) {
            redirect('login'); // Make sure this function is in place to redirect users
        } elseif ($isAdmin) {
            redirect('admin/dashboard');
        } else {
            redirect('index');
        }
    }

    // Strip DOC_ROOT from beginning if needed
if (DOC_ROOT !== '' && str_starts_with($path, ltrim(DOC_ROOT, '/'))) {
    $path = substr($path, strlen(DOC_ROOT));
    $path = ltrim($path, '/');
}

$router->dispatch($path);