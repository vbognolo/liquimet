<?php
declare(strict_types = 1);
//use Liquimet\Validate\Validate;                             //use validate class   

$transport = [];  
$quantity = [];                                                                                        
$partial = [];                                             
$user = $model->getSession()->id_user;

    if($id){                                                                                //if valid id
        $transport = $model->getTransport()->get($id);                                      //get transport data
            if(mb_strtolower($parts[2]) != mb_strtolower($transport['seo'])){               //if seo title wrong
                redirect('transport-edit/' . $id . '/' . $transport['seo'], [], 301);       //redirect to correct url
            }
            
            if(!$transport){                                                                //if no transport
                redirect('transport-add/', [], 301);                                        //redirect
            }
    }       

    if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
        if(isset($_POST['submit'])){
        //get transport data
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
            $transport['id_user'] = $user;
            $transport['seo'] = substr($transport['slot'], -4);
            //$transport['created'] = (new DateTime)->format('Y-m-d');

        //get quantity data
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
            //$quantity['created'] = date('Y-m-d H:i:s'); 
            $quantity['id_user'] = $user;

        //get partial data  
            if($transport['type'] == 1){
                $partial['destination'] = $_POST['destination'];
                $partial['exw'] = $_POST['exw'];
                $partial['date'] = $_POST['date'];

                foreach($partial['date'] as &$date){
                    $date = date('Y-m-d', strtotime($date)); 
                }

                $partial['place'] = $_POST['place'];
                $partial['q_unloaded'] = $_POST['q_unloaded'];
                $partial['invoice'] = $_POST['invoice'];
                $partial['id_user'] = $user; 
            }
            
            if(!$id){                                                                           //if no id, create transaction
                if($transport['type'] == 0){
                    $transaction = $model->getTransaction()->createFull($transport, $quantity);  
                        if($transaction === true){
                            redirect('platform/1/piattaforma', [], 301);                                                                  
                        } else{
                            $transaction = false;
                                redirect('transport-add', [], 301); 
                        }
                } else{
                    $transaction = $model->getTransaction()->createPart($transport, $quantity, $partial);
                        if($transaction === true){
                            redirect('index/' . $user);                                                                  
                        } else{
                            $transaction = false;
                                redirect('transport-add'); 
                        }
                } 
            }         
        }
    }

//navigation menu data
$data['navigation'] = $model->getPlatform()->getGroups(); 
$data['categories'] = $model->getPlatform()->getAll();   
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user;

//insert form data
$data['transport'] = $transport;
$data['quantity'] = $quantity;
$data['partial'] = $partial;

echo $twig->render('transport-add.html', $data); 