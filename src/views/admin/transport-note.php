<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;

//initialize variables that are needed for the the HTML page
$note = [];                                                 
$saved = null;
    
    //get modal value using the row id
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['update_note'])){  
            $note = [
                'note' => (isset($_POST['note'])) ? Validate::check_input($_POST['note']) : null,
                'id_transport' => $_POST['id_transport']
            ];  
   
            $saved = $model->getTransport()->updateNote($note); 
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
$data['note'] = $note;                        

echo $twig->render('admin/transport-note.html', $data);