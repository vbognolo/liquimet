<?php
declare(strict_types = 1);  
use Liquimet\Validate\Validate;
require_login();
is_admin($session->role);

//initialize variables that are needed for the the HTML page
$title = [];                                                    //initialize title array
$response = ['success' => false, 'errors' => [], 'name' => roman_numeral(1), 'title' => roman_numeral(2), 'acronym' => roman_numeral(3)];
//$errors = [];
$saved = null;
//$num = [];

    //if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        //if(isset($_POST['submit'])){           
            $title = [
                'name' => Validate::check_input($_POST['name']) ?? '',           
                'title' => Validate::check_input($_POST['title']) ?? '',    
                'acronym' => Validate::check_input($_POST['acronym']) ?? '',
            ]; 

                //name validation
                $name = $model->getTitle()->checkName($title['name']);

                    if(!isset($title['name']) || empty($title['name'])){
                        //$response['name'] = roman_numeral(1);
                        $response['errors']['name'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($title['name'])){
                        //$response['name'] = roman_numeral(1);
                        $response['errors']['name'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } elseif($name > 0){
                        //$response['name'] = roman_numeral(1);
                        $response['errors']['name'] = "Nome già in uso.";
                    } 
        
                //title validation
                $titleName = $model->getTitle()->checkTitle($title['title']);

                    if(!isset($title['title']) || empty($title['title'])){
                        //$response['title'] = roman_numeral(2);
                        $response['errors']['title'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($title['title'])){
                        //$response['title'] = roman_numeral(2);
                        $response['errors']['title'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } elseif($titleName > 0){
                        //$response['title'] = roman_numeral(2);
                        $response['errors']['title'] = "Titolo già in uso.";
                    }

                //acronym validation
                $acronym = $model->getTitle()->checkAcronym($title['acronym']);

                    if(!isset($title['acronym']) || empty($_POST['acronym'])){
                        //$response['acronym'] = roman_numeral(3);
                        $response['errors']['acronym'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($title['acronym'])){
                        //$response['acronym'] = roman_numeral(3);
                        $response['errors']['acronym'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } elseif(!Validate::check_chars($title["acronym"], 2, 10)){
                        //$response['acronym'] = roman_numeral(3);
                        $response['errors']['acronym'] = "L'acronimo deve essere lungo almeno 2 e al massimo 10 caratteri.";
                    } elseif($acronym > 0){
                        //$response['acronym'] = roman_numeral(3);
                        $response['errors']['acronym'] = "Acronimo già in uso.";
                    } 
/*
            if($errors){  
                $json = json_encode($errors);
                echo $json;
            } else{
                $saved = $model->getTitle()->create($title);

                    if($saved === false){                                              //if result is false
                        $errors['msg'] = "Si e verificato un errore. Riprovare.";
                    } else{    
                        $errors['success'] = 'I dati sono stati pubblicati correttamente.';                                      
                        //redirect('admin/titles');
                    }
            }
*/          
            //if there are no validation errors
            if(empty($response['errors'])){                                                               //if no errors
                /*$response['success'] = false;
            } else{*/
                $saved = $model->getTitle()->create($title);                      //create title + store result
                    
                if($saved === false){                                              //if result is false
                    $response['success'] = false;
                    $response['msg'] = "Si e verificato un errore. Riprovare.";
                    echo json_encode($response);
                } else{    
                    $response['success'] = true;
                    $response['errors']['message'] = 'I dati sono stati pubblicati correttamente.';    
                    echo json_encode($response);                                  
                    //redirect('admin/titles');
                }
            }
        //}
    //}
/*
//login and session data
$data['user'] = $user = $model->getSession()->id_user;  
*/
//error data
//$data['errors'] = $errors;
//$response['errors'] = json_encode($response);

//send the response back to the client
//header('Content-Type: application/json');
//echo json_encode($response);
echo $twig->render('admin/title.html', $response);
