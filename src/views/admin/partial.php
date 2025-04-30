<?php
declare(strict_types = 1);
//use Liquimet\Validate\Validate; 

//initialize variables that are needed for the the HTML page
$partial = $model->getPartial()->get($id);;
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['submit'])){   
            $partial = [
                'destination' => $_POST['destination'],
                'exw' => $_POST['exw'],
                'date' => $_POST['date'],
                'place' => $_POST['place'],
                'q_unloaded' => $_POST['q_unloaded'],
                'invoice' => $_POST['invoice'],
                'id_user' => $model->getSession()->id_user,
                'id_partial' => $partial['id_partial'],
            ];
            
            foreach($partials['date'] as &$date){
                $date = date('Y-m-d', strtotime($date)); 
            }
        }
    }
    

//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//insert form data
$data['partial'] = $partial;

echo $twig->render('admin/partial.html', $data);