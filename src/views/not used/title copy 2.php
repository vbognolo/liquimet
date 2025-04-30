<?php
declare(strict_types = 1);  
use Liquimet\Validate\Validate;
require_login();
is_admin($session->role);

//initialize variables that are needed for the the HTML page
$title = [];                                                    //initialize title array
$result = [];
$errors = [];
$saved = null;

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['submit'])){           
            $title = [
                'name' => Validate::check_input($_POST['name']) ?? '',           
                'title' => Validate::check_input($_POST['title']) ?? '',    
                'acronym' => Validate::check_input($_POST['acronym']) ?? '',
            ]; 

                //name validation
                $name = $model->getTitle()->checkName($title['name']);

                    if(!isset($title['name']) || empty($title['name'])){
                        $errors['num'] = roman_numeral(1);
                        $errors['name'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($title['name'])){
                        $errors['num'] = roman_numeral(1);
                        $errors['name'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } elseif($name > 0){
                        $errors['num'] = roman_numeral(1);
                        $errors['name'] = "Nome già in uso.";
                    } 
        
                //title validation
                $titleName = $model->getTitle()->checkTitle($title['title']);

                    if(!isset($title['title']) || empty($title['title'])){
                        $errors['num'] = roman_numeral(2);
                        $errors['title'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($title['title'])){
                        $errors['num'] = roman_numeral(2);
                        $errors['title'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } elseif($titleName > 0){
                        $errors['num'] = roman_numeral(2);
                        $errors['title'] = "Titolo già in uso.";
                    }

                //acronym validation
                $acronym = $model->getTitle()->checkAcronym($title['acronym']);

                    if(!isset($title['acronym']) || empty($_POST['acronym'])){
                        $errors['num'] = roman_numeral(3);
                        $errors['acronym'] = "Campo obbligatorio.";
                    } elseif(!Validate::check_name($title['acronym'])){
                        $errors['num'] = roman_numeral(3);
                        $errors['acronym'] = "Sono consentiti solo lettere e spazi bianchi.";
                    } elseif(!Validate::check_chars($title["acronym"], 2, 10)){
                        $errors['num'] = roman_numeral(3);
                        $errors["acronym"] = "L'acronimo deve essere lungo almeno 2 e al massimo 10 caratteri.";
                    } elseif($acronym > 0){
                        $errors['num'] = roman_numeral(3);
                        $errors['acronym'] = "Acronimo già in uso.";
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
            if(!empty($errors)){                                                               //if no errors
                $result['success'] = false;
                $result['errors'] = $errors;
            } else{
                $saved = $model->getTitle()->create($title);                      //create title + store result
                    
                if($saved === false){                                              //if result is false
                    $result['success'] = false;
                    $result['msg'] = "Si e verificato un errore. Riprovare.";
                } else{    
                    $result["success"] = true;
                    $result['msg'] = 'I dati sono stati pubblicati correttamente.';                                      
                    //redirect('admin/titles');
                }
            }
        }
    }
/*
//login and session data
$data['user'] = $user = $model->getSession()->id_user;  
*/
//error data
//$data['errors'] = $errors;

//header("Content-Type: application/json; charset=UTF-8");
$twig->render('admin/title.html');
echo json_encode($result);
