<?php
declare(strict_types = 1);   
require_login();

$transport = [];                                     
$deleted = null;     

    if(!$id){                                               
        redirect('platform'); 
    }

$transport = $model->getTransport()->get($id);                
    if(!$transport){                                         
        include APP_ROOT . '/src/views/page-not-found.php';
    }      
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
        if(isset($_POST['delete_transport'])){
            if($id){                                            
                $deleted = $model->getTransport()->delete($transport['id_transport']);     
                
                if($deleted  === true){                        
                    redirect('platform'); 
                }
            }
        }
    }                             

    /*if($_SERVER['REQUEST_METHOD'] == 'POST'){               
        if(isset($_POST['delete_transport'])){
            if($id){                                           
                $deleted = $model->getTransport()->delete($id); 
                
                if($deleted  === true){                         
                    redirect('admin/transports-part'); 
                }
            }
        }
    }*/
    
//login and session data
$data['user'] = $user = $model->getSession()->id_user;

echo $twig->render('admin/transport-delete.html', $data);   