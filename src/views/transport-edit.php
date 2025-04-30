<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;
require_login();

//initialize variables that are needed for the the HTML page
$transport = [];                    
$saved = null;
    
    //get modal value using the row id
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['update_transport'])){  
            $transport = [
                'slot' => Validate::check_input($_POST['slot']),
                'cmr' => Validate::check_input($_POST['cmr']),
                'issuer' => Validate::check_input($_POST['issuer']),
                'supplier' => Validate::check_input($_POST['supplier']),
                'transport' => Validate::check_input($_POST['transport']),
                'date_load' => date_format(new DateTime($_POST['date_load']), 'Y-m-d'), 
                'date_unload' => date_format(new DateTime($_POST['date_unload']), 'Y-m-d'),
                'container' => Validate::check_input($_POST['container']),
                'seo' => substr($_POST['slot'], -4),
                'modified' => date("Y-m-d"),
                'modified_by' => $model->getSession()->id_user,
                'id_transport' => $_POST['id_transport'],
            ];   

            $type = $_POST['type'];
            $saved = $model->getTransport()->update($transport);        
            
                if($saved === true){                          
                    switch($type){
                        case 'F':
                            redirect('transports-full');
                        case 'P':
                            redirect('transports-part');
                    }
                } 
        }
    }
    
//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//insert form data
$data['transport'] = $transport;

echo $twig->render('transport-edit.html', $data);                                         