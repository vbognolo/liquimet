<?php
declare(strict_types = 1);
use Liquimet\Validate\Validate; 
require_login();                              

//initialize variables that are needed for the the HTML page
$transport = [];              
$quantity = [];
$partials = [];                                      
$saved = null;
$errEmpty = false;
$errInput = false;
$data = [
    'status' => 0,
    'msg' => 'Invio del modulo non riuscito.', 
    'errTransport' => [
        'errSlot' => '',
        'errCmr'=> '',
        'errType'=> '',
        'errIssuer'=> '',
        'errSupplier'=> '',
        'errTransport'=> '',
        'errDateLoad'=> '',
        'errDateUnload'=> '',
        'errContainer'=> '',
        'errNote'=> ''
    ],
    'errQuantity'=> [
        
    ],
    'errPartial'=> [
         
    ],
];

//initialize variable that are needed for the PHP code
$transaction = [];                                                                                         

    if($_SERVER['REQUEST_METHOD'] == 'POST'){                           
        if(isset($_POST['save'])){
            //get transport data
            $transport = [
                'type' => $_POST['type'],
                'slot' => Validate::check_input($_POST['slot']),
                'cmr' => Validate::check_input($_POST['cmr']),
                'issuer' => Validate::check_input($_POST['issuer']),
                'supplier' => Validate::check_input($_POST['supplier']),
                'transport' => Validate::check_input($_POST['transport']),
                'date_load' => date_format(new DateTime($_POST['date_load']), 'Y-m-d'), 
                'date_unload' => date_format(new DateTime($_POST['date_unload']), 'Y-m-d'),
                'container' => Validate::check_input($_POST['container']),
                'note' => Validate::check_input($_POST['note']),
                'seo' => substr($_POST['slot'], -4),
                'created' => date("Y-m-d"),
                'id_user' => $model->getSession()->id_user,
            ];

            //get quantity data
            $quantity = [
                'kg_load' => $_POST['kg_load'],
                'cooling' => $_POST['cooling'],
                'price_typology' => $_POST['price_typology'],
                'price_value' => ($_POST['price_typology'] == 'yes') ? $_POST['price_value'] : 0,
                'kg_unload' => $_POST['kg_unload'],
                'liquid_density' => $_POST['liquid_density'],
                'gas_weight' => $_POST['gas_weight'],
                'pcs_ghv' => $_POST['pcs_ghv'],
                'created' => date("Y-m-d"),
                'id_user' => $model->getSession()->id_user,
            ];

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
                //$partials['id_transport'] = $transport['id_transport'];
            }
            
            if(!$id){                                                                           //if no id, create transaction
                switch($transport['type']){
                    case 'F':
                        $transaction = $model->getTransaction()->createFull($transport, $quantity);
                            if($transaction === true){
                                redirect('transports-full');
                            } else{
                                $transaction = false;
                                    redirect('transport');
                            }
                        break;
                    default:
                        $transaction = $model->getTransaction()->createPart($transport, $quantity, $partials);
                            if($transaction === true){
                                redirect('transports-part');
                            } else{
                                $transaction = false;
                                    redirect('transport');
                            }
                        break;
                } 
            } else{
                switch($transport['type']){
                    case 'F':
                        $transaction = $model->getTransaction()->updateFull($transport, $quantity);
                            if($transaction === true){
                                redirect('transports-full');
                            } else {
                                $transaction = false;
                                    redirect('transport');
                            }
                        break;
                    default:
                        $transaction = $model->getTransaction()->updatePart($transport, $quantity, $partials);
                            if($transaction === true){
                                    redirect('transports-part');
                            } else{
                                $transaction = false;
                                    redirect('transport');
                            }
                        break;
                } 
            }         
        }
    }

//navigation menu data
$data['navigation'] = $model->getPlatform()->getAdminGroups(); 
$data['group_count'] = $model->getPlatform()->countG();  

//login and session data
$data['user'] = $user = $model->getUser()->get($model->getSession()->id_user);

//insert form data
$data['transport'] = $transport;
$data['quantity'] = $quantity;
$data['partials'] = $partials;

echo $twig->render('transport.html', $data);