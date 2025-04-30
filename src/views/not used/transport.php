<?php
declare(strict_types = 1);
//use Liquimet\Validate\Validate; 

require_login();                              

//initialize variables that are needed for the the HTML page
$transport = [];                                                
$quantity = [];
$partials = [];

//initialize variable that the php code needs  
$transaction = [];                                                                                         

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
            $transport['id_user'] = $model->getSession()->id_user;
            $transport['seo'] = substr($transport['slot'], -4);
            //$transport['created'] = (new DateTime)->format('Y-m-d');

            //get quantity data
            $quantity['kg_load'] = $_POST['kg_load'];
            $quantity['cooling'] = $_POST['cooling'];
            $quantity['price_typology'] = $_POST['price_typology'];
                
                if($quantity['price_typology'] == 'Si'){
                    $quantity['price_value'] = $_POST['price_value'];
                } else{
                    $quantity['price_value'] = 0;
                }
            
            $quantity['kg_unload'] = $_POST['kg_unload'];
            $quantity['liquid_density'] = $_POST['liquid_density'];
            $quantity['gas_weight'] = $_POST['gas_weight'];
            $quantity['pcs_ghv'] = $_POST['pcs_ghv'];
            $quantity['id_user'] = $model->getSession()->id_user;
            
            //get partial data  
            if($transport['type'] == 'P'){
                $partials['destination'] = $_POST['destination'];
                $partials['exw'] = $_POST['exw'];
                $partials['date'] = $_POST['date'];

                    foreach($partials['date'] as &$date){
                        $date = date('Y-m-d', strtotime($date)); 
                    }

                $partials['place'] = $_POST['place'];
                $partials['q_unloaded'] = $_POST['q_unloaded'];
                $partials['invoice'] = $_POST['invoice'];
                $partials['id_user'] = $model->getSession()->id_user;
                $partials['id_transport'] = $transport['id_transport'];

            /*foreach($partial as $part){
                foreach($part as $key => $p){
            	    $result[$key][] = $p;
                }
            }
                $partial[$key]['destination'] = $_POST['destination'];
                $partial[$key]['exw'] = $_POST['exw'];
                $partial[$key]['date'] = $_POST['date'];

                    foreach($part['date'] as &$date){
                        $date = date('Y-m-d', strtotime($date)); 
                    }

                $partial[$key]['place'] = $_POST['place'];
                $partial[$key]['q_unloaded'] = $_POST['q_unloaded'];
                $partial[$key]['invoice'] = $_POST['invoice'];
                $partial[$key]['id_user'] = $user; */
                
                
                /*$part = [
                    'destination' => $_POST['destination'],
                    'exw' => $_POST['exw'],
                    'date' => date_format(new DateTime($_POST['date']), 'Y-m-d'),
                    'place' => $_POST['place'],
                    'q_unloaded' => $_POST['q_unloaded'],
                    'invoice' => $_POST['invoice'],
                    'id_user' => $user
                ];
                
                foreach($dates as &$date){
                    $date = date('Y-m-d', strtotime($date)); 
                }*/
            }
            
            if(!$id){                                                                           //if no id, create transaction
                if($transport['type'] == 'F'){
                    $transaction = $model->getTransaction()->createFull($transport, $quantity);  
                        if($transaction === true){
                            redirect('transports-full');                                                                  
                        } else{
                            $transaction = false;
                                redirect('transport'); 
                        }
                } else{
                    $transaction = $model->getTransaction()->createPart($transport, $quantity, $partials);
                        if($transaction === true){
                            redirect('transports-part');                                                                  
                        } else{
                            $transaction = false;
                                redirect('transport'); 
                        }
                } 
            } else{
                if($transport['type'] == 'F'){
                    $transaction = $model->getTransaction()->updateFull($transport, $quantity);  
                        if($transaction === true){
                            redirect('transports-full');                                                                  
                        } else{
                            $transaction = false;
                                redirect('transport'); 
                        }
                } else{
                    $transaction = $model->getTransaction()->updatePart($transport, $quantity, $partials);
                        if($transaction === true){
                            redirect('transports-part');                                                                  
                        } else{
                            $transaction = false;
                                redirect('transport'); 
                        }
                } 
            }         
        }
    }

//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['categories'] = $model->getPlatform()->getAll();   
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getUser()->get($model->getSession()->id_user);

//insert form data
$data['transport'] = $transport;
$data['quantity'] = $quantity;
$data['partials'] = $partials;

echo $twig->render('transport.html', $data);