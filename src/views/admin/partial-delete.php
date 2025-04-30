<?php
declare(strict_types = 1);   
require_login();
is_admin($session->role);

$partial = [];                                     
$deleted = null;     

    if(!$id){                                               
        redirect('platform'); 
    }

    $partial = $model->getPartial()->get($id);                
    
        if(!$partial){                                         
            include APP_ROOT . '/src/views/page-not-found.php';
        }      
    
        if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
            if(isset($_POST['delete_partial'])){
                if($id){                                            
                    $deleted = $model->getPartial()->delete($partial['id_partial']);     
                    
                    if($deleted  === true){    
                        redirect('transports-part');
                    }                    
                }
            }
        }                             
    
//login and session data
$data['user'] = $user = $model->getSession()->id_user;

echo $twig->render('admin/partial-delete.html', $data);   