<?php
declare(strict_types = 1);
//use Liquimet\Validate\Validate;                             //use validate class   

$transport = [];                                                                                          
$partial = [];                                             

    if($id){                                                                                // if valid id
        $transport = $model->getTransport()->get($id);                                      // get transport data
            if(mb_strtolower($parts[2]) != mb_strtolower($transport['seo'])){                       // if seo title wrong
                redirect('transport-edit/' . $id . '/' . $transport['seo'], [], 301);                // redirect to correct url
            }
            
            if(!$transport){                                                                    // if no transport
                redirect('partadd/', [], 301);                                            // redirect
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
            //$date_load = new DateTime($_POST['date_load']);
            $transport['date_load'] = date_format(new DateTime($_POST['date_load']), 'Y-m-d');
            $transport['date_unload'] = date_format(new DateTime($_POST['date_unload']), 'Y-m-d');
            $transport['container'] = $_POST['container'];
            $transport['note'] = $_POST['note'];
            //       $transport['id_user'] = $model->getSession()->id_user;
            $transport['id_user'] = 1;
            $transport['seo'] = substr($transport['slot'], -4);
            //$transport['created'] = (new DateTime)->format('Y-m-d');

        //get partial data  
        /*    $destination = $_POST['destination'];
            $exw = $_POST['exw'];
            $date = $_POST['date'];
            $place = $_POST['place'];
            $q_unloaded = $_POST['q_unloaded'];
            $invoice = $_POST['invoice'];
*/
            
        /*    if(filesize('partials.json') == 0){             //before storing partial[] array, check if this is first record
                $first = array($partial);                   //if there is first record, create an array inside .json file
                $newies = $first;                            //assign record to generic variable for later use
            } else{
                //if this is not first record (there are data stored in .json file), 
                //need to pull all data so new ones can be added
                $oldies = json_decode(file_get_contents('partials.json'));
                array_push($oldies, $partial);          //add new data to old array
                $newies = $oldies;                      //assign the record to generic variable
            }

            if(!file_put_contents('partials.json', json_encode($newies, JSON_PRETTY_PRINT), LOCK_EX)){
                $error = "Error storing partials, please try again.";
            } else{
                $success = "Partials is stored successfully.";
            }
*/
            $partial['destination'] = $_POST['destination'];
            $partial['exw'] = $_POST['exw'];
            $partial['date'] = $_POST['date'];

            foreach($partial['date'] as &$date){
                $date = date('Y-m-d', strtotime($date)); //<--- Write your own format.
            }
            //$partial['date'] = implode(',',$dates);

            $partial['place'] = $_POST['place'];
            $partial['q_unloaded'] = $_POST['q_unloaded'];
            $partial['invoice'] = $_POST['invoice'];
            //$partial['id_user'] = 1;
                    //$partial['id_user'] = $model->getSession()->id_user;
            /*$destination = $_POST['destination'];
            $exw = $_POST['exw'];
            $date = $_POST['date'];
            $place = $_POST['place'];
            $q_unloaded = $_POST['q_unloaded'];
            $invoice = $_POST['invoice'];

            $partial = [
                'destination' => $destination,
                'exw' => $exw,
                'date' => $date,
                'place' => $place,
                'q_unloaded' => $q_unloaded,
                'invoice' => $invoice
            ];*/
        
            //var_dump($partial);
            //print_r($partial, true); 
            var_dump($partial);   
            //var_dump($transport);
            //print_r($transport, true);    

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
                            redirect('category/1/piattaforma');                                                                  
                        } else{
                            $transaction = false;
                            redirect('partadd'); 
                        }
                } 
            //}         
        }
    }

// navigation menu data
$data['navigation'] = $model->getPlatform()->getGroups(); 
$data['categories'] = $model->getPlatform()->getAll();   
$data['group_count'] = $model->getPlatform()->countG();  

// insert form data
$data['transport'] = $transport;
$data['partial'] = $partial;

// login and session data
//$data['user'] = $model->getUser()->get($id);

echo $twig->render('partadd.html', $data); 