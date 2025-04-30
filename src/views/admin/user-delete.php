<?php
declare(strict_types = 1); 
require_login();
is_admin($session->role);

//initialize variables that are needed for the the HTML page
$member = [];                                                    
$deleted = null;
$r = [
    'status' => 0,
    'msg' => 'Invio del modulo non riuscito.'
];

    //if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
        if(isset($_POST['id_user'])){
            $id = intval($_POST['id_user']);
            $member = $model->getUser()->get($id);

                if($member){  
                    $r['id_user'] = $member['id_user'];                                      
                    $deleted = $model->getUser()->delete($member['id_user']);     
                        
                    if($deleted){                        
                        $r['status'] = 1; 
                        $r['msg'] = 'la richiesta di rimozione è stata effettuata con successo';
                    } else{
                        $r['msg'] = 'la richiesta di rimozione fallita. riprovare';
                    }    
                } 
        }
    //}

echo json_encode($r);