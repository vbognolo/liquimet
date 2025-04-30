<?php
declare(strict_types = 1);  
require_login();
is_admin($session->role);

//initialize variables that are needed for the the HTML page
$title = [];                                                    
$deleted = null;
$data = [
    'status' => 0,
    'msg' => 'Invio del modulo non riuscito.'
];

    //if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
        if(isset($_POST['id_title'])){
            $id = intval($_POST['id_title']);
            $title = $model->getTitle()->get($id);

                if($title){  
                    $data['id_title'] = $title['id_title'];                                      
                    $deleted = $model->getTitle()->delete($title['id_title']);     
                        
                    if($deleted){                        
                        $data['status'] = 1; 
                        $data['msg'] = 'la richiesta di rimozione è stata effettuata con successo';
                    } else{
                        $data['msg'] = 'la richiesta di rimozione fallita. riprovare';
                    }    
                } 
        }
    //}

echo json_encode($data);
