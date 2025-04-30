<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;
require_login();

//initialize variables that are needed for the the HTML page
$partial = [];                    
$saved = null;
    
    //get modal value using the row id
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['update_partial'])){  
            $partial = [
                'destination' => Validate::check_input($_POST['destination']),
                'exw' => $_POST['exw'],
                'date' => date_format(new DateTime($_POST['date']), 'Y-m-d'),
                'place' => Validate::check_input($_POST['place']),
                'q_unloaded' => $_POST['q_unloaded'],
                'invoice' => $_POST['invoice'], 
                'modified' => date("Y-m-d"),
                'modified_by' => $model->getSession()->id_user,
                'id_partial' => $_POST['id_partial'],
            ];   

            $saved = $model->getPartial()->update($partial);        
            
                if($saved === true){                          
                    redirect('transports-part');
                }
        }
    }
    
//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//insert form data
$data['partial'] = $partial;

echo $twig->render('partial-edit.html', $data);                                         