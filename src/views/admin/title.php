<?php
declare(strict_types = 1);  
use Liquimet\Controller\AdminTitlesController;
use Liquimet\Session\Session;
use Liquimet\Model\Navigation;
use Liquimet\Model\User;
use Liquimet\Model\Title;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

// Setup Twig environment
$twig = new Environment(new FilesystemLoader(APP_ROOT . '/templates'));

// Instantiate the session, navigation and models
$session = new Session(); 
$modelNavigation = new Navigation($database); 
$modelUser = new User($database);
$modelTitle = new Title($database);

// Instantiate and handle login actions
$adminTitlesController = new AdminTitlesController($twig, $session, $modelNavigation, $modelUser, $modelTitle);

// Call the index method to load the admin dashboard
$adminTitlesController->titleModalPage();
/*
//initialize variables that are needed for the the HTML page
$title = [];                                                    
$saved = null;
$errEmpty = false;
$errInput = false;
$response = [
    'status' => 0,
    'message' => 'Invio del modulo non riuscito.', 
    'errName' => '',
    'errTitle' => '',
    'errAcronym' => ''
];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['name']) || isset($_POSt['title']) || isset($_POST['acronym'])){     
            $title = [
                'name' => Validate::check_input($_POST['name']),          
                'title' => Validate::check_input($_POST['title']),    
                'acronym' => Validate::check_input($_POST['acronym']),
            ]; 

            //name validation 
                if(!isset($title['name']) || empty($title['name'])){
                    $errEmpty = true;
                    $response['errName'] = "Campo obbligatorio."; 
                } elseif(!Validate::check_name($title['name'])){
                    $errInput = true;
                    $response['errName'] = "Sono consentiti solo lettere e spazi bianchi.";
                } elseif(!Validate::check_chars($title['name'], 3, 30)){
                    $errInput = true;
                    $response['errName'] = "Il nome (titolo) del ruolo aziendale deve essere lungo almeno 3 e al massimo 30 caratteri.";
                } elseif($model->getTitle()->checkName($title['name']) > 0){
                    $errInput = true;
                    $response['errName'] = "Nome già in uso.";
                } else{
                    $errInput = false;
                }

            //title validation
                if(!isset($title['title']) || empty($title['title'])){
                    $errEmpty = true;
                    $response['errTitle'] = "Campo obbligatorio."; 
                } elseif(!Validate::check_name($title['title'])){
                    $errInput = true;
                    $response['errTitle'] = "Sono consentiti solo lettere e spazi bianchi.";
                } elseif(!Validate::check_chars($title['title'], 3, 30)){
                    $errInput = true;
                    $response['errTitle'] = "Il titolo inglese del ruolo aziendale deve essere lungo almeno 3 e al massimo 30 caratteri.";
                } elseif($model->getTitle()->checkTitle($title["title"]) > 0){
                    $errInput = true;
                    $response['errTitle'] = "Titolo già in uso.";
                } else{
                    $errInput = false;
                }

            //acronym validation
                if(!isset($title['acronym']) || empty($title['acronym'])){
                    $errEmpty = true;
                    $response['errAcronym'] = "Campo obbligatorio."; 
                } elseif(!Validate::check_name($title['acronym'])){
                    $errInput = true;
                    $response['errAcronym'] = "Sono consentiti solo lettere e spazi bianchi.";
                } elseif(!Validate::check_chars($title['acronym'], 3, 30)){
                    $errInput = true;
                    $response['errAcronym'] = "L'acronimo deve essere lungo almeno 3 e al massimo 30 caratteri.";
                } elseif($model->getTitle()->checkAcronym($title['acronym']) > 0){
                    $errInput = true;
                    $response['errAcronym'] = "Acronimo già in uso.";
                } else{
                    $errInput = false;
                }
                
                //if no errors insert data
                    if($errEmpty == false && $errInput == false){
                        $saved = $model->getTitle()->create($title);

                            if($saved){
                                $response['message'] = "Il ruolo aziendale è stato inserito con successo.";
                                $response['status'] = 1;
                            } else{
                                $response['message'] = "Si è verificato un problema. Riprovare.";
                            }
                    } 
            }
        }

echo json_encode($response);*/