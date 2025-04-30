<?php
declare(strict_types = 1);  
use Liquimet\Validate\Validate;
require_login();
is_admin($session->role);

//initialize variables that are needed for the the HTML page
$title = [];                                                    
$saved = null;
$errEmptyUpdate = false;
$errInputUpdate = false;
$output = [
    'status' => 0,
    'msg' => 'Invio del modulo non riuscito.', 
    'errUpdateName' => '',
    'errUpdateTitle' => '',
    'errUpdateAcronym' => ''
];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['id_title'])){
            $title = [
                'name' => Validate::check_input($_POST['name']),          
                'title' => Validate::check_input($_POST['title']),    
                'acronym' => Validate::check_input($_POST['acronym']), 
                'id_title' => $_POST['id_title'],
            ]; 
        //}
        //if(isset($_POST['name']) || isset($_POST['title']) || isset($_POST['acronym'])){    
            

            //name validation 
                if(!isset($title['name']) || empty($title['name'])){
                    $errEmptyUpdate = true;
                    $output['errUpdateName'] = "Campo obbligatorio."; 
                } elseif(!Validate::check_name($title['name'])){
                    $errInputUpdate = true;
                    $output['errUpdateName'] = "Sono consentiti solo lettere e spazi bianchi.";
                } elseif(!Validate::check_chars($title['name'], 3, 50)){
                    $errInputUpdate = true;
                    $output['errUpdateName'] = "Il nome (titolo) del ruolo aziendale deve essere lungo almeno 3 e al massimo 50 caratteri.";
                } /*elseif($model->getTitle()->checkName($title['name']) > 0){
                    $errInputUpdate = true;
                    $output['errUpdateName'] = "Nome già in uso.";
                } */

            //title validation
                if(!isset($title['title']) || empty($title['title'])){
                    $errEmptyUpdate = true;
                    $output['errUpdateTitle'] = "Campo obbligatorio."; 
                } elseif(!Validate::check_name($title['title'])){
                    $errInputUpdate = true;
                    $output['errUpdateTitle'] = "Sono consentiti solo lettere e spazi bianchi.";
                }  elseif(!Validate::check_chars($title['title'], 3, 50)){
                    $errInputUpdate = true;
                    $output['errUpdateTitle'] = "Il titolo inglese del ruolo aziendale deve essere lungo almeno 3 e al massimo 50 caratteri.";
                }/* elseif($model->gett()->checkt($title["title"]) > 0){
                    $errInputUpdate = true;
                    $output['errUpdatet'] = "Titolo già in uso.";
                }*/

            //acronym validation
                if(!isset($title['acronym']) || empty($title['acronym'])){
                    $errEmptyUpdate = true;
                    $output['errUpdateAcronym'] = "Campo obbligatorio."; 
                } elseif(!Validate::check_name($title['acronym'])){
                    $errInputUpdate = true;
                    $output['errUpdateAcronym'] = "Sono consentiti solo lettere e spazi bianchi.";
                } elseif(!Validate::check_chars($title['acronym'], 3, 10)){
                    $errInputUpdate = true;
                    $output['errUpdateAcronym'] = "L'acronimo deve essere lungo almeno 3 e al massimo 10 caratteri.";
                } /*elseif($model->gett()->checkAcronym($title['acronym']) > 0){
                    $errInputUpdate = true;
                    $output['errUpdateAcronym'] = "Acronimo già in uso.";
                }*/
            
                //if no errors insert data
                    if($errEmptyUpdate == false && $errInputUpdate == false){
                        $saved = $model->getTitle()->update($title);

                            if($saved){
                                $output['msg'] = "I dati sono stati modificati con successo.";
                                $output['status'] = 1;
                                $output['name'] = $title['name'];
                                $output['title'] = $title['title'];
                                $output['acronym'] = $title['acronym'];
                            } else{
                                $output['msg'] = "Si e verificato un problema. Riprovare.";
                            }
                    } 
        }
    }

echo json_encode($output);