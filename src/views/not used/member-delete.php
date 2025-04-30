<?php
declare(strict_types = 1); 
require_login();
is_admin($session->role);

$member = [];                                           // Initialize category array
$deleted = null;                                        // Did category delete

    if(!$id){                                               // If valid id
        redirect('admin/users'); // Redirect with error
    }

$member = $model->getUser()->get($id);                // Get category
    if(!$member){                                         // If valid id
        redirect('admin/users'); // Redirect with error
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){               // If form was submitted
        if(isset($_POST['submit'])){
            if($id){                                            // If valid id
                $deleted = $model->getUser()->delete($id);     // Delete category
                
                if($deleted  === true){                         // If it worked
                    redirect('admin/users'); // Redirect with error
                }
            }
        }
    }

//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups();  
$data['categories'] = $model->getPlatform()->getAll(); 
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getSession()->id_user;  

//insert or update date
$data['member'] = $member;

echo $twig->render('admin/member-delete.html', $data); 
