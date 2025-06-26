<?php
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
$loginAttempt = new \Liquimet\Model\LoginAttempt($database);
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