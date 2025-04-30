<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;

//initialize variables that are needed for the the HTML page
$partial = [];
$saved = null;

//get modal value using the row id
//$id = intval($_GET['id_partial']);
//$partial = $model->getPartial()->get($id);                
    
    /*if(!$partial){                                         
        include APP_ROOT . '/src/views/page-not-found.php';
    }*/
    
    if(isset($_GET['id_partial'])){                                                    
        $id = intval($_GET['id_partial']);
        $partial = $model->getPartial()->get($id);                 
        
        if(!$partial){                                            
            include APP_ROOT . '/src/views/page-not-found.php';
        }
    }
    
    
    //if(isset($partial)){
        //$partial = $model->getPartial()->get($id);
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){   
            if(isset($_POST['update_partial'])){  
                $partial = [
                    'destination' => Validate::check_input($_POST['destination']),
                    'exw' => $_POST['exw'],
                    'date' => date_format(new DateTime($_POST['date']), 'Y-m-d'),
                    'place' => Validate::check_input($_POST['place']),
                    'q_unloaded' => $_POST['q_unloaded'],
                    'invoice' => $_POST['invoice'], 
                    'id_user' => $model->getSession()->id_user,
                    'id_partial' => $_POST['id_partial'],
                ];   

                $saved = $model->getPartial()->update($partial);        
                
                    if($saved === true){                               
                        redirect('admin/transports-part');
                    }
            }
        }
    //}

    
//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//insert form data
$data['partial'] = $partial;

echo $twig->render('admin/partial-edit.html', $data);                                   

    
                                      