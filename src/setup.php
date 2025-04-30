<?php
define('APP_ROOT', dirname(__FILE__, 2));  // Root directory

require APP_ROOT . '/src/functions.php';
require APP_ROOT . '/config/config.php';
require APP_ROOT . '/vendor/autoload.php';      // Autoload libraries

    if(DEV === false){
        set_exception_handler('handle_exception');              // Set exception handler
        set_error_handler('handle_error');                      // Set error handler
        register_shutdown_function('handle_shutdown');          // Set shutdown handler
    }

// Create Database instance first
$database = new \Liquimet\Model\Database($dsn, $username, $password);

// Pass the Database instance to Model instead of raw credentials
$model = new \Liquimet\Model\Model($database);

// Remove database config data from memory
unset($dsn, $username, $password);

$twig_options['cache'] = APP_ROOT . '/var/cache';            // Path to Twig cache folder
$twig_options['debug'] = DEV;                                // If dev mode, turn debug on

$loader = new Twig\Loader\FilesystemLoader(APP_ROOT . '/templates');        // Twig loader
$twig = new Twig\Environment($loader, $twig_options);             // Twig environment
$twig->addExtension(new Twig\Extra\Intl\IntlExtension());

$twig->addGlobal('doc_root', DOC_ROOT);          // Document root

$session = new \Liquimet\Session\Session;                     // Create session
$twig->addGlobal('session', $session);           // Add session to Twig global

    if(DEV === true){                                                               // If in development
        $twig->addExtension(new \Twig\Extension\DebugExtension());       // Add Twig debug extension
    }