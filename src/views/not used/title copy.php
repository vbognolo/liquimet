<?php
declare(strict_types = 1);  
use Liquimet\Validate\Validate;
require_login();
is_admin($session->role);

//initialize variables that are needed for the the HTML page
$title = [];                                                    //initialize title array
$saved = [];

    if($id){                                                    //if id and not submitted
        $title = $model->getTitle()->get($id);                  //get title data
        
        if(!$title){                                            
            redirect('admin/titles'); 
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['update_title'])){           
            $title['name'] = Validate::check_input($_POST['name']);           
            $title['title'] = Validate::check_input($_POST['title']);    
            $title['acronym']  = Validate::check_input($_POST['acronym']); 


            if($id){                                                //if have id
                $saved = $model->getTitle()->update($title);        //try to update title
            } else{                                                 //if no id
                $saved = $model->getTitle()->create($title);        //try to create title
            }

            if($saved === true){                               
                redirect('admin/titles'); 
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

echo $twig->render('admin/title.html', $data); 
