<?php
declare(strict_types = 1); 
use Liquimet\Validate\Validate;

require_login();
is_admin($session->role);

// Initialize variables that are needed for the the HTML page
$member = [];                                                // Initialize category array
$saved = [];

    if($id){                                                    // If id and not submitted
        $member = $model->getUser()->get($id);                  // Get member data
        
        if(!$member){                                            // If no member data
            redirect('admin/users'); 
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['submit'])){           
            $member = [
                'username' => $_POST['username'],
                'email' => $_POST['email'],
                'name' => $_POST['name'],               
                'surname' => $_POST['surname'],
                'birthday' => date_format(new DateTime($_POST['bday']), 'Y-m-d'),
                'city' => $_POST['city'],
                'country' => $_POST['country'],
                'gender' => $_POST['gender'],
                'role' => $_POST['role'],                      //access
                'title' => $_POST['title'],                    //ruolo aziendale  
                'id_user' => $member['id_user'],
            ];   

            $saved = $model->getUser()->update($member); // Try to update category
            
            if($saved === true){                               
                redirect('admin/users'); 
            }
        }
    }

//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups();  
$data['categories'] = $model->getPlatform()->getAll(); 
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getSession()->id_user;  

//form data
$data['member'] = $member;
$data['titles'] = $model->getUser()->getTitles();
$data['roles'] = $model->getUser()->getRoles(); 
$data['gender'] = $model->getUser()->getGender(); 

echo $twig->render('admin/member.html', $data);   

                 