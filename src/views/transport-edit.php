<?php
declare(strict_types = 1);                               
use Liquimet\Validate\Validate;                           

$transport = $model->getTransport()->get($id);                                              // get transport data
    if(!$transport){                                                                        // if no transport
        include APP_ROOT . '/src/pages/page-not-found.php';                                 // page not found
    }

    if(mb_strtolower($parts[2]) != mb_strtolower($transport['seo'])){                       // if seo title wrong
        redirect('transport-edit/' . $id . '/' . $transport['seo'], [], 301);               // redirect to correct url
    }
/*
$user = $model->getSession()->id;                            // Get user's id from session
    if($id === 0){                                           // If not logged in
        redirect('login/');                                  // Page not found
    }
*/

/*
    if($_SERVER['REQUEST_METHOD'] != 'POST'){                           // If form not posted
        $user = $model->getUser()->get($model->getSession()->id);       // Get member details
    }
*/
    if($_SERVER['REQUEST_METHOD'] == 'POST'){                                       // if form was posted
    // get transport data
        $transport['type'] = $_POST['type'];
        $transport['slot'] = $_POST['slot'];
        $transport['cmr'] = $_POST['cmr'];
        $transport['issuer'] = $_POST['issuer'];
        $transport['supplier'] = $_POST['supplier'];
        $transport['transport'] = $_POST['transport'];
        $transport['date_load'] = date_format(new DateTime($_POST['date_load']), 'Y-m-d');
        $transport['date_unload'] = date_format(new DateTime($_POST['date_unload']), 'Y-m-d');
        $transport['container'] = $_POST['container'];
        $transport['note'] = $_POST['note'];
        $transport['seo'] = substr($transport['slot'], 27, 4);
//       $transport['id_user'] = $model->getSession()->id_user;
        $transport['modified'] = date('Y-m-d H:i:s'); 
        $transport['modified_by'] = 1;

    // get quantity data
        $quantity['kg_load'] = $_POST['kg_load'];
        $quantity['cooling'] = $_POST['cooling'];
        $quantity['price_typology'] = $_POST['price_typology'];
        $quantity['price_value'] = $_POST['price_value'];
        $quantity['kg_unload'] = $_POST['kg_unload'];
        $quantity['liquid_density'] = $_POST['liquid_density'];
        $quantity['gas_weight'] = $_POST['gas_weight'];
        $quantity['pcs_ghv'] = $_POST['pcs_ghv'];
        $quantity['modified'] = date('Y-m-d H:i:s'); 
//       $quantity['id_user'] = $model->getSession()->id_user;
        $quantity['modified_by'] = 2;


    // get partial data
        $partial['destination'] = $_POST['destination'];
        $partial['exw'] = $_POST['exw'];
        $partial['date'] = date_format(new DateTime($_POST['date']), 'Y-m-d');
        $partial['place'] = $_POST['place'];
        $partial['q_unloaded'] = $_POST['q_unloaded'];
        $partial['invoice'] = $_POST['invoice'];
        $partial['modified'] = date('Y-m-d H:i:s'); 
//       $partial['id_user'] = $model->getSession()->id_user;
        $partial['modified_by'] = 2;    
        
            if($transport){                                                                                           // if no id, create transaction
                if($transport['type'] == '0'){
                    $transaction = $model->getTransaction()->updateFull($transport, $quantity);  
                } else{
                    $transaction = $model->getTransaction()->updatePart($transport, $quantity, $partial);  
                }                    
            } 
            
                if($transaction === true){      
                    redirect('category/1/piattaforma', [], 301);                                                                  
                } else{
                    $errors['message'] = 'Transport Slot ID already in use';          
                } 
    }

// navigation menu data
$data['navigation'] = $model->getCategory()->getGroups(); 
$data['categories'] = $model->getCategory()->getAll();   
$data['group_count'] = $model->getCategory()->countG();  

// edit form data
$data['transport'] = $transport;
$data['section'] = $transport['id_category'];
$data['quantity'] = $quantity = $model->getQuantity()->get($transport['id_transport']);
$data['partial'] = $partial = $model->getPartial()->get($id);

echo $twig->render('transport-edit.html', $data);