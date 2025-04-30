<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;
require_login();

//initialize variables that are needed for the the HTML page
$note = [];                                                 
$saved = null;
    
    //get modal value using the row id
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['update_note'])){  
            $note = [
                'note' => isset($_POST['note']) ? Validate::check_input($_POST['note']) : null,
                'id_transport' => $_POST['id_transport']
            ];  
   
            $saved = $model->getTransport()->updateNote($note); 
            $type = $_POST['type'];
            
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
$data['note'] = $note;                        

echo $twig->render('transport-note.html', $data); 