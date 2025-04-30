<?php
declare(strict_types = 1);  
use Liquimet\Validate\Validate;
require_login();
is_admin($session->role);

//initialize variables that are needed for the the HTML page
$title = [];                                                    //initialize title array
//$response = ['success' => false, 'errors' => [], 'name' => roman_numeral(1), 'title' => roman_numeral(2), 'acronym' => roman_numeral(3)];
//$nameErr = $titleErr = $acronymErr = $message = '';
$saved = null;
$response = [
    'status' => 0,
    'message' => 'Invio del modulo non riuscito.', 
    'numN' => roman_numeral(1),
    'numT' => roman_numeral(2),
    'numA' => roman_numeral(3),
    'errName' => '',
    'errTitle' => '',
    'errAcronym' => ''
];

$errEmpty = false;
$errInput = false;
/*$errors = [
    'nameErr' => '',
    'titleErr' => '',
    'acronymErr' => ''
];*/
//$num = [];
//$output = ['error' => false];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['name']) || isset($_POSt['title']) || isset($_POST['acronym'])){   
                    
            $title = [
                'name' => Validate::check_input($_POST['name']),  // ?? '',        
                'title' => Validate::check_input($_POST['title']),    // ?? '',
                'acronym' => Validate::check_input($_POST['acronym']), // ?? '',
            ]; 

            if(!isset($title['name']) || empty($title['name'])){
                $errEmpty = true;
                $response['errName'] = "Campo obbligatorio."; 
            } elseif(!Validate::check_name($title['name'])){
                $errInput = true;
                $response['errName'] = "Sono consentiti solo lettere e spazi bianchi.";
            }  elseif(!Validate::check_chars($title['name'], 3, 30)){
                $errInput = true;
                $response['errName'] = "Il titolo del ruolo aziendale deve essere lungo almeno 3 e al massimo 30 caratteri.";
            } elseif($model->getTitle()->checkName($title['name']) > 0){
                $errInput = true;
                $response['errName'] = "Nome già in uso.";
            } 

            if(!isset($title['title']) || empty($title['title'])){
                $errEmpty = true;
                $response['errTitle'] = "Campo obbligatorio."; 
            } elseif(!Validate::check_name($title['title'])){
                $errInput = true;
                $response['errTitle'] = "Sono consentiti solo lettere e spazi bianchi.";
            }  elseif(!Validate::check_chars($title['title'], 3, 30)){
                $errInput = true;
                $response['errTitle'] = "Il titolo inglese del ruolo aziendale deve essere lungo almeno 3 e al massimo 30 caratteri.";
            } elseif($model->getTitle()->checkTitle($title["title"]) > 0){
                $errInput = true;
                $response['errTitle'] = "Titolo già in uso.";
            }

            if(!isset($title['acronym']) || empty($title['acronym'])){
                $errEmpty = true;
                $response['errAcronym'] = "Campo obbligatorio."; 
            } elseif(!Validate::check_name($title['acronym'])){
                $errInput = true;
                $response['errAcronym'] = "Sono consentiti solo lettere e spazi bianchi.";
            }  elseif(!Validate::check_chars($title['acronym'], 3, 30)){
                $errInput = true;
                $response['errAcronym'] = "L'acronimo deve essere lungo almeno 3 e al massimo 30 caratteri.";
            } elseif($model->getTitle()->checkAcronym($title['acronym']) > 0){
                $errInput = true;
                $response['errAcronym'] = "Acronimo già in uso.";
            }
            /*if(!empty($title['name']) && !empty($title['title']) && !empty($title['acronym'])){
                if(!Validate::check_name($title['name'])){
                    $response['errName'] = "Sono consentiti solo lettere e spazi bianchi.";
                    $errInput = true;
                } elseif(!Validate::check_chars($title['name'], 3, 30)){
                    $response['errName'] = "Il titolo del ruolo aziendale deve essere lungo almeno 3 e al massimo 30 caratteri.";
                    $errInput = true;
                }/* elseif($model->getTitle()->checkName($title['name']) > 0){
                    $response['errName'] = "Nome già in uso.";
                    $errInput = true;
                }*/

                /*if(!Validate::check_name($title['title'])){
                    $response['message'] = "Sono consentiti solo lettere e spazi bianchi.";
                    $errInput = true;
                } elseif(!Validate::check_chars($title['title'], 3, 30)){
                    $response['errTitle'] = "Il titolo inglese del ruolo aziendale deve essere lungo almeno 3 e al massimo 30 caratteri.";
                    $errInput = true;
                } /*elseif($model->getTitle()->checkTitle($title['title']) > 0){
                    $response['errTitle'] = "Titolo già in uso.";
                    $errInput = true;
                }*/

                /*if(!Validate::check_name($title['acronym'])){
                    $response['errAcronym'] = "Sono consentiti solo lettere e spazi bianchi.";
                    $errInput = true;
                } elseif(!Validate::check_chars($title["acronym"], 2, 10)){
                    $response['errAcronym'] = "L'acronimo deve essere lungo almeno 2 e al massimo 10 caratteri.";
                    $errInput = true;
                } /*elseif($model->getTitle()->checkAcronym($title['acronym']) > 0){
                    $response['errAcronym'] = "Acronimo già in uso.";
                    $errInput = true;
                } */
                
                if($errEmpty == false && $errInput == false){
                    $saved = $model->getTitle()->create($title);

                        if($saved){
                            $response['message'] = "I dati sono stati inseriti correttamente.";
                            $response['status'] = 1;
                        } else{
                            $response['message'] = "Si e verificato un problema. Riprovare.";
                        }
                } 
            }
        }
    //}
    echo json_encode($response);
                //name validation
                /*$checkName = $model->getTitle()->checkName($title['name']);

                    if(!isset($title['name']) || empty($title['name'])){
                        //$errors['name_num'] = roman_numeral(1);
                        $error = true;
                        $nameErr = "Campo obbligatorio.";
                        //$errors['name'] = "Campo obbligatorio";
                        //echo $nameErr;
                        //$output['error'] = true;
                        //$output['nameErr'] = "Campo obbligatorio";
                        //$output = [
                        //    'error' => true,
                        //    'nameErr' => 'Campo obbligatorio'
                        //];    
                    } elseif(!Validate::check_name($title['name'])){
                        //$errors['name_num'] = roman_numeral(1);
                        $error = true;
                        $nameErr = "Sono consentiti solo lettere e spazi bianchi.";
                        //$errors['name'] = "Sono consentiti solo lettere e spazi bianchi.";
                        //echo $nameErr;
                        //$output['error'] = true;
                        //$output['nameErr'] = "Sono consentiti solo lettere e spazi bianchi.";
                        //$output = [
                        //    'error' => true,
                        //    'nameErr' => 'Sono consentiti solo lettere e spazi bianchi.'
                        //];
                    } elseif($checkName > 0){
                        //$errors['name_num'] = roman_numeral(1);
                        $error = true;
                        $nameErr = "Nome già in uso.";
                        //$errors['name'] = "Nome già in uso.";
                        //echo $nameErr;
                        //$output['error'] = true;
                        //$output['nameErr'] = "Nome già in uso.";
                        //$output = [
                        //    'error' => true,
                        //    'nameErr' => 'Nome già in uso.'
                        //];
                    } 
                        //echo json_encode($output);

                //title validation
                $checkTitle = $model->getTitle()->checkTitle($title['title']);

                    if(!isset($title['title']) || empty($title['title'])){
                        //$errors['title_num'] = roman_numeral(2);
                        $error = true;
                        $titleErr = "Campo obbligatorio.";
                        //$errors['title'] = "Campo obbligatorio";
                        //echo $titleErr;
                        //$output['error'] = true;
                        //$output['titleErr'] = "Campo obbligatorio";
                        //$output = [
                        //    'error' => true,
                        //    'titleErr' => 'Campo obbligatorio.'
                        //];
                    } elseif(!Validate::check_name($title['title'])){
                        //$errors['title_num'] = roman_numeral(2);
                        $error = true;
                        $titleErr = "Sono consentiti solo lettere e spazi bianchi.";
                        //$errors['title'] = "Sono consentiti solo lettere e spazi bianchi.";
                        //echo $titleErr; 
                        //$output['error'] = true;
                        //$output['titleErr'] = "Sono consentiti solo lettere e spazi bianchi.";
                        //$output = [
                        //    'error' => true,
                        //    'titleErr' => 'Sono consentiti solo lettere e spazi bianchi.'
                        //];
                        //echo json_encode($output);    
                    } elseif($checkTitle > 0){
                        //$errors['title_num'] = roman_numeral(2);
                        $error = true;
                        $titleErr = "Titolo già in uso.";
                        //$errors['title'] = "Titolo già in uso.";
                        //echo $titleErr;
                        //$output['error'] = true;
                        //$output['titleErr'] = "Titolo già in uso.";
                        //$output = [
                        //    'error' => true,
                        //    'titleErr' => 'Titolo già in uso.'
                        //];
                        //echo json_encode($output);   
                    }
                    //echo json_encode($output);

                //acronym validation
                $checkAcr = $model->getTitle()->checkAcronym($title['acronym']);

                    if(!isset($title['acronym']) || empty($_POST['acronym'])){
                        //$errors['acronym_num'] = roman_numeral(3);
                        $error = true;
                        $acronymErr = "Campo obbligatorio.";
                        //$errors['acronym'] = "Campo obbligatorio";
                        //echo $acronymErr;
                        //$output['error'] = true;
                        //$output['acronymErr'] = "Campo obbligatorio.";
                        //$output = [
                        //    'error' => true,
                        //    'acronymErr' => 'Campo obbligatorio.'
                        //];
                        //echo json_encode($output);
                    } elseif(!Validate::check_name($title['acronym'])){
                        //$errors['acronym_num'] = roman_numeral(3);
                        $error = true;
                        $acronymErr = "Sono consentiti solo lettere e spazi bianchi.";
                        //$output['error'] = true;
                        //$output['acronymErr'] = "Sono consentiti solo lettere e spazi bianchi.";
                        //$output = [
                        //    'error' => true,
                        //    'acronymErr' => 'Sono consentiti solo lettere e spazi bianchi.'
                        //];
                        //echo json_encode($output);
                    } elseif(!Validate::check_chars($title["acronym"], 2, 10)){
                        //$errors['acronym_num'] = roman_numeral(3);
                        $error = true;
                        $acronymErr = "L'acronimo deve essere lungo almeno 2 e al massimo 10 caratteri.";
                        //$errors['acronym'] = "L'acronimo deve essere lungo almeno 2 e al massimo 10 caratteri.";
                        //echo $acronymErr;
                        //$output['error'] = true;
                        //$output['acronymErr'] = "L'acronimo deve essere lungo almeno 2 e al massimo 10 caratteri.";
                        //$output = [
                        //    'error' => true,
                        //    'acronymErr' => "L'acronimo deve essere lungo almeno 2 e al massimo 10 caratteri."
                        //];
                        //echo json_encode($output);    
                    } elseif($checkAcr > 0){
                        //$errors['acronym_num'] = roman_numeral(3);
                        $error = true;
                        $acronymErr = "Acronimo già in uso.";
                        //$errors['acronym'] = "Acronimo già in uso.";
                        //$output['error'] = true;
                        //$output['acronymErr'] = "Acronimo già in uso.";
                        //$output = [
                        //    'error' => true,
                        //    'acronymErr' => 'Acronimo già in uso.'
                        //];
                        //echo json_encode($output);  
                    } 
                    //echo json_encode($output);
            
            if($error === false){
                $saved = $model->getTitle()->create($title);                      //create title + store result
                    
                    if($saved){                                              //if result is false
                        //$output['message'] = 'I dati sono stati pubblicati correttamente.';
                        //$output['success'] = true;
                        //$output = [
                        //    'error' => false,
                        //    'message' => 'I dati sono stati pubblicati correttamente.'
                        //];
                        //echo json_encode($output);
                        $message = 'I dati sono stati pubblicati correttamente.';
                    } else{    
                        //$output['error'] = true;
                        //$output['message'] = 'Si e verificato un problema. Riprovare.';    
                        $message = 'Si e verificato un problema. Riprovare.';
                        //$output = [
                        //    'error' => true,
                        //    'message' => 'Si e verificato un problema. Riprovare.'
                        //];
                        //echo json_encode($output);
                        
                    }
            } 
        //}
    }
    
        /*$output = [
            'error' => $error,
                    //'success' => $success,
            'nameErr' => $nameErr,
            'titleErr' => $titleErr,
            'acronymErr' => $acronymErr,
            'message' => $message
        ];

            echo json_encode($output);*/

//login and session data
//$data['user'] = $user = $model->getSession()->id_user;  

//error data
//$data['errors'] = $output['error'];
//$data['nameErr'] = $output['nameErr'];
//$data['titleErr'] = $output['titleErr'];
//$data['acronymErr'] = $output['acronymErr'];
//$data['message'] = $output['message'];
//$data['success'] = $success;
//$data['output'] = $output;

//$response['errors'] = json_encode($response);

//send the response back to the client
//echo json_encode($response); 
//echo json_encode(['error' => $error, 'nameErr' => $nameErr, 'titleErr' => $titleErr, 'acronymErr' => $acronymErr]);
//echo json_encode(['error' => $error, 'success' => $success, 'nameErr' => $nameErr, 'titleErr' => $titleErr, 'acronymErr' => $acronymErr, 'message' => $message]);
//echo json_encode($output);
//echo $twig->render('admin/title.html'); 

//header('Content-Type: text/javascript; charset=utf-8');
//header('Content-Type: application/x-www-form-urlencoded');
//header('Content-Type: text/plain');
//header('Content-Type: application/json');