<?php
declare(strict_types = 1);
//use Liquimet\Validate\Validate;                             // use validate class   

$transport = [];                                                                                          
$partial = [];  
            
    //if valid transport id, get transport data                                    
    if($id){                                                          
        $transport = $model->getTransport()->get($id);                
        
        //if seo title wrong, redirect to correct url
        if(mb_strtolower($parts[2]) != mb_strtolower($transport['seo'])){                       
            redirect('transport-edit/' . $id . '/' . $transport['seo'], [], 301);               
        }
        
        //if no valid transport id, redirect to add transport page
        if(!$transport){                           
            redirect('partadd/', [], 301);         
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
            //$transport['id_user'] = $model->getSession()->id_user;
            $transport['id_user'] = 1;
            $transport['seo'] = substr($transport['slot'], -4);
            //$transport['created'] = (new DateTime)->format('Y-m-d H:i:s');

            //get partial data
            $partial['destination'] = $_POST['destination'];
            $partial['exw'] = $_POST['exw'];
            $partial['date'] = $_POST['date'];
            
                //format each added date by reference (&$dsate)
                foreach($partial['date'] as &$date){
                    $date = date('Y-m-d', strtotime($date)); 
                }
            //$partial['date'] = implode(',',$dates);
            $partial['place'] = $_POST['place'];
            $partial['q_unloaded'] = $_POST['q_unloaded'];
            $partial['invoice'] = $_POST['invoice'];
            //$partial['id_user'] = 1;
            //$partial['id_user'] = $model->getSession()->id_user;

    //var_dump($partial);
    print_r($partial, true);    
    //var_dump($transport);
    print_r($transport, true);    
                    
            //if(!$id){                                                                                           // if no id, create transaction
                if($transport['type'] == 0){
                    $transaction = $model->getTransaction()->createFull($transport, $quantity);  
                        if($transaction === true){
                            redirect('category/1/piattaforma', [], 301);                                                                  
                        } else{
                            $transaction = false;
                            redirect('partadd', [], 301); 
                        }
                } else{
                    $transaction = $model->getTransaction()->createPart($transport, $partial);
                        if($transaction === true){
                            redirect('category/1/piattaforma', [], 301);                                                                  
                        } else{
                            $transaction = false;
                            redirect('partadd', [], 301); 
                        }
                } 
            //}              
        }
    }

//navigation menu data
$data['navigation'] = $model->getCategory()->getGroups(); 
$data['categories'] = $model->getCategory()->getAll();   
$data['group_count'] = $model->getCategory()->countG();  

//insert form data
$data['transport'] = $transport;
$data['partial'] = $partial;

//login and session data
//$data['user'] = $model->getUser()->get($id);

echo $twig->render('partadd.html', $data);