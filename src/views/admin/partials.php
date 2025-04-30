<?php
declare(strict_types = 1);
//use Liquimet\Validate\Validate;                               

if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id_partial'])){
    $id = $_GET['id_partial'];
    $partial = $model->getPartial()->get($id);
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
        if(isset($_POST['id_partial'])){
            //get transport data
            $partial['destination'] = $_POST['destination'];
            $partial['exw'] = $_POST['exw'];
            $partial['date'] = date_format(new DateTime($_POST['date']), 'Y-m-d');
            $partial['place'] = $_POST['place'];
            $partial['q_unloaded'] = $_POST['q_unloaded'];
            $partial['invoice'] = $_POST['invoice'];
            $partial['id_user'] = $model->getSession()->id_user;

            $update = $model->getPartial()->update($partial);

            if($update == true){
                redirect('admin/platform');
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

//table data
$data['transports'] = $model->getTransport()->getPartial();
$data['partials'] = $model->getPartial()->getAll();
$data['partial'] = $partial;
$data['total'] = $model->getTransport()->countPart(); 

echo $twig->render('admin/transports-part.html', $data);