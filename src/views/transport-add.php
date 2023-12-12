<?php
declare(strict_types = 1);
//use Liquimet\Validate\Validate;                             // use validate class   

$transport = [];                                              
$quantity = [];                                             
$partials = [];                                              

    if($id){                                                                                // if valid id
        $transport = $model->getTransport()->get($id);                                      // get transport data
        
        if(mb_strtolower($parts[2]) != mb_strtolower($transport['seo'])){                       // if seo title wrong
            redirect('transport-edit/' . $id . '/' . $transport['seo'], [], 301);                // redirect to correct url
        }
        
        if(!$transport){                                                                    // if no transport
            redirect('transport-add/', [], 301);                                            // redirect
        }
    }       
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){                           // if form submitted
        if(isset($_POST['submit'])){
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
        //       $transport['id_user'] = $model->getSession()->id_user;
        $transport['id_user'] = 1;
        $transport['seo'] = substr($transport['slot'], -4);
        $transport['created'] = date('Y-m-d H:i:s'); 

    // get quantity data
        $quantity['kg_load'] = $_POST['kg_load'];
        $quantity['cooling'] = $_POST['cooling'];
        $quantity['price_typology'] = $_POST['price_typology'];
            
            if($quantity['price_typology'] == 1){
                $quantity['price_value'] = $_POST['price_value'];
            } else{
                $quantity['price_value'] = 0;
            }
        
        $quantity['kg_unload'] = $_POST['kg_unload'];
        $quantity['liquid_density'] = $_POST['liquid_density'];
        $quantity['gas_weight'] = $_POST['gas_weight'];
        $quantity['pcs_ghv'] = $_POST['pcs_ghv'];
        $quantity['created'] = date('Y-m-d H:i:s'); 
        //       $quantity['id_user'] = $model->getSession()->id_user;
        $quantity['id_user'] = 1;

    // get partial data
        $partial[] = [
            'destination' => $_POST['destination'],
            'exw' => $_POST['exw'],
            'date' => $_POST['date'],
            'place' => $_POST['place'],
            'q_unloaded' => $_POST['q_unloaded'],
            'invoice' => $_POST['invoice'],
            'id_user' => 1,
            'created' => $_POST['created'],
            'modified' => $_POST['modified'],
            'modified_by' => $_POST['modified_by']
        ];

        /*        $partial['destination'] = $_POST['destination'];
                $partial['exw'] = $_POST['exw'];
                $partial['date'] = $_POST['date'];
                
                    foreach($partial['date'] as $date){
                        $date = date('Y-m-d', strtotime($partial['date']));
                    }
                        //$partial['date'] = date('Y-m-d', strtotime($_POST['date']));

                $partial['place'] = $_POST['place'];
                $partial['q_unloaded'] = $_POST['q_unloaded'];
                $partial['invoice'] = $_POST['invoice'];
                $partial['created'] = date('Y-m-d H:i:s');
        //       $partial['id_user'] = $model->getSession()->id_user;
                $partial['id_user'] = 1;
                $partial['modified'] = null;
                $partial['modified_by'] = null;
        */

            if(!$id){                                                                                           // if no id, create transaction
                if($transport['type'] == 0){
                    $transaction = $model->getTransaction()->createFull($transport, $quantity);  
                } else{
                    $transaction = $model->getTransaction()->createPart($transport, $quantity, $partial);  
                }                    
            } 
            
                if($transaction === true){      
                    redirect('category/1/piattaforma', [], 301);                                                                  
                } else{
                    $transaction = false;          
                }   
        }
    }

// navigation menu data
$data['navigation'] = $model->getCategory()->getGroups(); 
$data['categories'] = $model->getCategory()->getAll();   
$data['group_count'] = $model->getCategory()->countG();  

// insert form data
$data['transport'] = $transport;
$data['quantity'] = $quantity;
$data['partial'] = $partial;

// login and session data
//$data['user'] = $model->getUser()->get($id);

echo $twig->render('transport-add.html', $data);