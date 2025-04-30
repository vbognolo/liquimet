<?php
declare(strict_types = 1);  
require_login();
is_admin($session->role);

$title = [];                                                            //initialize title array
$deleted = null;                                                        //did title delete

    if(!$id){                                               
        redirect('admin/titles'); 
    }

    $title = $model->getTitle()->get($id);                
        if(!$title){                                         
            include APP_ROOT . '/src/views/page-not-found.php';
        }

        if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
            if(isset($_POST['delete_title'])){
                if($title){                                            
                    $deleted = $model->getTitle()->delete($title['id_title']);     
                    
                    if($deleted  === true){                        
                        redirect('admin/titles'); 
                    }
                }
            }
        }


//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups();  
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getSession()->id_user;  

//insert or update date
$data['title'] = $title;

echo $twig->render('admin/title-delete.html', $data); 
