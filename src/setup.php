<?php
define('APP_ROOT', dirname(__FILE__, 2));                       // root directory

require APP_ROOT . '/src/functions.php';                 
require APP_ROOT . '/config/config.php';      
require APP_ROOT . '/vendor/autoload.php';                      // autoload libraries

    if(DEV === false){
        set_exception_handler('handle_exception');              // set exception handler
        set_error_handler('handle_error');                      // set error handler
        register_shutdown_function('handle_shutdown');          // set shutdown handler
    }

    $model = new \Liquimet\Model\Model($dsn, $username, $password);                     // create model object
    unset($dsn, $username, $password);                                                   // remove database config data

$twig_options['cache'] = APP_ROOT . '/var/cache';                                   // path to twig cache folder
$twig_options['debug'] = DEV;                                                       // if dev mode, turn debug on

$loader = new Twig\Loader\FilesystemLoader(APP_ROOT . '/templates');                // twig loader
$twig = new Twig\Environment($loader, $twig_options);                               // twig environment

$twig->addGlobal('doc_root', DOC_ROOT);                                             // document root

$session = $model->getSession();                                                    // create session
$twig->addGlobal('session', $session);                                              // add session to twig global

    if(DEV === true){                                                               // if in development
        $twig->addExtension(new \Twig\Extension\DebugExtension());                  // add twig debug extension
    }