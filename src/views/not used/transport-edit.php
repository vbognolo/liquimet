<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;

//initialize variables that are needed for the the HTML page
$transport = [];                                                    //initialize title array
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
                'id_user' => $model->getSession()->id_user,
                'seo' => substr($_POST['slot'], -4),
                'id_transport' => $_POST['id_transport'],
            ];   

            $saved = $model->getTransport()->update($transport);        
            $type = $_POST['type'];
            
                if($saved === true){                               
                    if($type == 'F'){                               
                        redirect('admin/transports-full'); 
                    } else{
                        redirect('admin/transports-part');
                    }
                }
        }
    }
    
//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//insert form data
$data['transport'] = $transport;

echo $twig->render('admin/transport-edit.html', $data);                                         