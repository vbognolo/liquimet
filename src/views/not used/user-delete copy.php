<?php
declare(strict_types = 1); 
require_login();
is_admin($session->role);

//initialize variables that are needed for the the HTML page
$member = [];                                                    
$deleted = null;
$data = [
    'status' => 0,
    'msg' => 'Invio del modulo non riuscito.'
];

    //if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
        if(isset($_POST['id_title'])){
            $id = intval($_POST['id_title']);
            $member = $model->getUser()->get($id);

                if($member){  
                    $data['id_user'] = $member['id_user'];                                      
                    $deleted = $model->getUser()->delete($member['id_user']);     
                        
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

$member = [];                                           //initialize member array
$deleted = null;                                        //did member delete

    if(!$id){                                               
        redirect('admin/users'); 
    }

    $member = $model->getUser()->get($id);                
        if(!$member){                                        
            include APP_ROOT . '/src/views/page-not-found.php'; 
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){               
            if(isset($_POST['delete_user'])){
                if($id){                       
                    $deleted = $model->getUser()->delete($member['id_user'] );     
                    
                    if($deleted === true){  
                        redirect('admin/users');
                    }
                }
            }
        }

//login and session data
$data['user'] = $user = $model->getSession()->id_user;  

echo $twig->render('admin/user-delete.html', $data); 
