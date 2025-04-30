<?php
declare(strict_types = 1);
use Liquimet\Validate\Validate; 
require_login();                              

//initialize variables that are needed for the the HTML page
$transport = [];  
//$quantity = [];  
//$partials = [];                                              
//$transaction = [];

$errEmpty = [
    'errTrans' => false,
    'errQty'=> false,
    'errPart'=> false
];

$errInput = [
    'errTrans' => false,
    'errQty'=> false,
    'errPart'=> false
];

$response = [
    'status' => 0,
    'msg' => 'Invio del modulo non riuscito.', 
    'errSlot' => '',
    'errCmr' => '',
    'errType' => '',
    'errIssuer' => '',
    'errSupplier' => '',
    'errTransport' => '',
    'errDateLoad' => '',
    'errDateUnload' => '',
    'errContainer' => '',
    'errNote' => ''/*,
    'errKgLoad' => '',
    'errCooling' => '',
    'errPriceTypology' => '',
    'errPriceValue' => '',
    'errKgUnload' => '',
    'errLiquidDensity' => '',
    'errGasWeight' => '',
    'errPscGhv' => '',
    'errDestination'=> '',
    'errExw'=> '', 
    'errDate'=> '',
    'errPlace'=> '',
    'errQUnloaded'=> '',
    'errInvoice'=> ''*/
];

if($_SERVER['REQUEST_METHOD'] == 'POST'){   
    //if(isset($_POST['trans-next'])){
        //get transport data
        $transport = [
            'type' => $_POST['type'],
            'slot' => Validate::check_input($_POST['slot']),
            'cmr' => Validate::check_input($_POST['cmr']),
            'issuer' => Validate::check_input($_POST['issuer']),
            'supplier' => Validate::check_input($_POST['supplier']),
            'transport' => Validate::check_input($_POST['transport']),
            'date_load' => date_format(new DateTime($_POST['date_load']), 'Y-m-d') ?? '', 
            'date_unload' => date_format(new DateTime($_POST['date_unload']), 'Y-m-d') ?? '',
            'container' => Validate::check_input($_POST['container']),
            'note' => Validate::check_input($_POST['note']) ?? '',
            'created' => date("Y-m-d"),
            'id_user' => $model->getSession()->id_user,
        ];

        //type validation
            if(!isset($transport['type']) || empty($transport['type'])){
                $errEmpty['errTrans'] = true;
                $response['errType'] = "Campo obbligatorio.";
            }

        //slot validation
        $slot = $model->getTransport()->available($transport['slot']);
            if(!isset($transport['slot']) || empty($transport['slot'])){
                $errEmpty['errTrans'] = true;
                $response['errSlot'] = "Campo obbligatorio.";
            } elseif(!Validate::check_chars($transport['slot'], 3, 40)){
                $errInput['errTrans'] = true;
                $response['errSlot'] = 'Slot ID deve essere lungo almeno 3 e al massimo 40 caratteri.';
                //$response['errSlot'] = "Sono consentiti solo lettere, numeri e simboli: - e _.";
            } elseif(preg_match('/^[A-Za-z0-9]+$/', $transport['slot'])){
                $errInput['errTrans'] = true;
                $response['errSlot'] = 'Sono consentiti solo lettere, numeri e simboli: "-" e "_".';
            } elseif(($slot > 1) && ($slot !== $_POST["slot"])){
                $errInput['errTrans'] = true;
                $response['errSlot'] = "Slot ID già in uso.";
            }

        //cmr validation
        $cmr = $model->getTransport()->available($transport['cmr']);
            if(!isset($transport['cmr']) || empty($transport['cmr'])){
                $errEmpty['errTrans'] = true;
                $response['errCmr'] = "Campo obbligatorio.";
            } elseif(!Validate::check_chars($transport['cmr'], 3, 40)){
                $errInput['errTrans'] = true;
                $response['errCmr'] = "Numero CMR deve essere lungo almeno 3 e al massimo 40 caratteri.";
            } elseif(preg_match('/^[A-Za-z0-9-_]+$/', $transport['cmr'])){
                $errInput['errTrans'] = true;
                $response['errCmr'] = 'Sono consentiti solo lettere, numeri e simboli: "-" e "_".';
            } elseif(($slot > 1) && ($slot !== $_POST["slot"])){
                $errInput['errTrans'] = true;
                $response['errCmr'] = "Numero CMR già in uso.";
            }

        //issuer validation
            if(!isset($transport['issuer']) || empty($transport['issuer'])){
                $errEmpty['errTrans'] = true;
                $response['errIssuer'] = "Campo obbligatorio.";
            } elseif(!Validate::check_chars($transport['issuer'], 3, 40)){
                $errInput['errTrans'] = true;
                $response['errIssuer'] = "Emittente deve essere lungo almeno 3 e al massimo 40 caratteri.";
            } elseif(preg_match('/^[A-Za-z\s]+$/', $transport['issuer'])){
                $errInput['errTrans'] = true;
                $response['errIssuer'] = 'Sono consentiti solo lettere e spazi bianchi.';
            } 

        //supplier validation
            if(!isset($transport['supplier']) || empty($transport['supplier'])){
                $errEmpty['errTrans'] = true;
                $response['errSupplier'] = "Campo obbligatorio.";
            } elseif(!Validate::check_chars($transport['supplier'], 3, 40)){
                $errInput['errTrans'] = true;
                $response['errSupplier'] = "Fornitore deve essere lungo almeno 3 e al massimo 40 caratteri.";
            } elseif(preg_match('/^[A-Za-z\s]+$/', $transport['supplier'])){
                $errInput['errTrans'] = true;
                $response['errSupplier'] = 'Sono consentiti solo lettere e spazi bianchi.';
            }

        //transport validation
            if(!isset($transport['transport']) || empty($transport['transport'])){
                $errEmpty['errTrans'] = true;
                $response['errTransport'] = "Campo obbligatorio.";
            } elseif(!Validate::check_chars($transport['transport'], 3, 10)){
                $errInput['errTrans'] = true;
                $response['errTransport'] = "Trasporto deve essere lungo almeno 3 e al massimo 10 caratteri.";
            } elseif(preg_match('/^[A-Za-z\s]+$/', $transport['transport'])){
                $errInput['errTrans'] = true;
                $response['errTransport'] = 'Sono consentiti solo lettere e spazi bianchi.';
            }

        //date load validation
            if(!isset($transport['date_load']) || empty($transport['date_load'])){
                $errEmpty['errTrans'] = true;
                $response['errDateLoad'] = "Campo obbligatorio.";
            } elseif($transport['date_load'] > date('Y-m-d')){
                $errInput['errTrans'] = true;
                $response['errDateLoad'] = "Non è possibile inserire una data successiva al presente.";
            } elseif($transport['date_load'] < (date('Y', 2016))){
                $errInput['errTrans'] = true;
                $response['errDateLoad'] = "Non è possibile inserire una data precedente al 2016.";
            }

        //date unload validation
            if(!isset($transport['date_unload']) || empty($transport['date_unload'])){
                $errEmpty['errTrans'] = true;
                $response['errDateUnload'] = "Campo obbligatorio.";
            } elseif($transport['date_unload'] > date('Y-m-d')){
                $errInput['errTrans'] = true;
                $response['errDateUnload'] = "Non è possibile inserire una data successiva al presente.";
            } elseif($transport['date_unload'] < (date('Y', 2016))){
                $errInput['errTrans'] = true;
                $response['errDateUnload'] = "Non è possibile inserire una data precedente al 2016.";
            }

        //container validation
            if(!isset($transport['container']) || empty($transport['container'])){
                $errEmpty['errTrans'] = true;
                $response['errContainer'] = "Campo obbligatorio.";
            } elseif(!Validate::check_chars($transport['container'], 3, 25)){
                $errInput['errTrans'] = true;
                $response['errContainer'] = "Container deve essere lungo almeno 3 e al massimo 25 caratteri.";
            } elseif(preg_match('/^[A-Za-z\s]+$/', $transport['container'])){
                $errInput['errTrans'] = true;
                $response['errContainer'] = 'Sono consentiti solo lettere e spazi bianchi.';
            }

        //note validation
            if(!Validate::check_chars($transport['note'], 0, 250)){
                $errInput['errTrans'] = true;
                $response['errNote'] = "Nota deve essere lunga al massimo 250 caratteri.";
            } elseif(preg_match('/^[A-Za-z0-9!?-_.,&\s]+$/', $transport['transport'])){
                $errInput['errTrans'] = true;
                $response['errNote'] = 'Sono consentiti solo lettere, numberi, simboli .,-_!?& e spazi bianchi.';
            }
    //}

                //if no transport errors, get post quantity data
                if($errEmpty['errTrans'] == false && $errInput['errTrans'] == false){
                    $response['msg'] = "validation complete" ;
                    //get quantity data
                    /*$quantity = [
                        'kg_load' => Validate::check_input($_POST['kg_load']),
                        'cooling' => Validate::check_input($_POST['cooling']),
                        'price_typology' => Validate::check_input($_POST['price_typology']),
                        'price_value' => ($_POST['price_typology'] == 'yes') ? Validate::check_input($_POST['price_value']) : 0,
                        'kg_unload' => Validate::check_input($_POST['kg_unload']),
                        'liquid_density' => Validate::check_input($_POST['liquid_density']),
                        'gas_weight' => Validate::check_input($_POST['gas_weight']),
                        'pcs_ghv' => Validate::check_input($_POST['pcs_ghv']),
                        'created' => date("Y-m-d"),
                        'id_user' => $model->getSession()->id_user,
                    ];

                    //kg_load validation
                        if(!isset($quantity['kg_load']) || empty($quantity['kg_load'])){
                            $errEmpty['errQty'] = true;
                            $response['errKgLoad'] = "Campo obbligatorio.";
                        } elseif(preg_match('/^[0-9]+$/', $quantity['kg_load'])){
                            $errInput['errQty'] = true;
                            $response['errKgLoad'] = "Sono consentiti solo numeri interi.";
                        } 

                    //cooling validation
                        if(!isset($quantity['cooling']) || empty($quantity['cooling'])){
                            $errEmpty['errQty'] = true;
                            $response['errCooling'] = "Campo obbligatorio.";
                        } 

                    //price_typology validation
                        if(!isset($quantity['price_typology']) || empty($quantity['price_typology'])){
                            $errEmpty['errQty'] = true;
                            $response['errPriceTypology'] = "Campo obbligatorio.";
                        } 

                    //price_value validation
                        if(!isset($quantity['price_value']) || empty($quantity['price_value'])){
                            $errEmpty['errQty'] = true;
                            $response['errPriceValue'] = "Campo obbligatorio.";
                        } elseif(preg_match('/^[0-9]+$/', $quantity['price_value'])){
                            $errInput['errQty'] = true;
                            $response['errPriceValue'] = "Sono consentiti solo numeri interi.";
                        }
            
                    //kg_unload validation
                        if(!isset($quantity['kg_unload']) || empty($quantity['kg_unload'])){
                            $errEmpty['errQty'] = true;
                            $response['errKgUnload'] = "Campo obbligatorio.";
                        } elseif(preg_match('/^[0-9]+$/', $quantity['kg_unload'])){
                            $errInput['errQty'] = true;
                            $response['errKgUnload'] = "Sono consentiti solo numeri interi.";
                        } 

                    //liquid_density validation
                        if(!isset($quantity['liquid_density']) || empty($quantity['liquid_density'])){
                            $errEmpty['errQty'] = true;
                            $response['errLiquidDensity'] = "Campo obbligatorio.";
                        } elseif(preg_match('/^[0-9.,]+$/', $quantity['kg_unload'])){
                            $errInput['errQty'] = true;
                            $response['errLiquidDensity'] = "Sono consentiti solo numeri decimali divisi con la virgola o con il punto.";
                        } 

                    //gas_weight validation
                        if(!isset($quantity['gas_weight']) || empty($quantity['gas_weight'])){
                            $errEmpty['errQty'] = true;
                            $response['errGasWeight'] = "Campo obbligatorio.";
                        } elseif(preg_match('/^[0-9.,]+$/', $quantity['gas_weight'])){
                            $errInput['errQty'] = true;
                            $response['errGasWeight'] = "Sono consentiti solo numeri decimali divisi con la virgola o con il punto.";
                        } 

                    //pcs_ghv validation
                        if(!isset($quantity['pcs_ghv']) || empty($quantity['pcs_ghv'])){
                            $errEmpty['errQty'] = true;
                            $response['errPcsGhv'] = "Campo obbligatorio.";
                        } elseif(preg_match('/^[0-9.,]+$/', $quantity['pcs_ghv'])){
                            $errInput['errQty'] = true;
                            $response['errPcsGhv'] = "Sono consentiti solo numeri decimali divisi con la virgola o con il punto.";
                        } 

                            //if no quantity errors, get post partial data if transport type = P
                            if($errEmpty['errQty'] == false && $errInput['errQty'] == false){
                                switch($transport['type']){
                                    case 'P':
                                        $partials['destination'] = Validate::check_input($_POST['destination']);
                                        $partials['exw'] = Validate::check_input($_POST['exw']);
                                        $partials['date'] = Validate::check_input($_POST['date']);

                                            foreach($partials['date'] as &$date){
                                                $date = date('Y-m-d', strtotime($date)); 
                                            }

                                        $partials['place'] = Validate::check_input($_POST['place']);
                                        $partials['q_unloaded'] = Validate::check_input($_POST['q_unloaded']);
                                        $partials['invoice'] = Validate::check_input($_POST['invoice']);
                                        $partials['id_user'] = $model->getSession()->id_user;

                                        //destination validation
                                            if(!isset($partials['destination']) || empty($partials['destination'])){
                                                $errEmpty['errPart'] = true;
                                                $response['errDestination'] = "Campo obbligatorio.";
                                            } elseif(!Validate::check_chars($partials['destination'], 3, 50)){
                                                $errInput['errPart'] = true;
                                                $response['errDestination'] = "Destinazione deve essere lunga almeno 3 e al massimo 50 caratteri.";
                                            } elseif(preg_match('/^[A-Za-z\s]+$/', $partials['destination'])){
                                                $errInput['errPart'] = true;
                                                $response['errDestination'] = "Sono consentiti solo lettere e spazi bianchi.";
                                            }

                                        //exw validation
                                            if(!isset($partials['exw']) || empty($partials['exw'])){
                                                $errEmpty['errPart'] = true;
                                                $response['errExw'] = "Campo obbligatorio.";
                                            } elseif(preg_match('/^[A-Za-z\s]+$/', $partials['exw'])){
                                                $errInput['errPart'] = true;
                                                $response['errExw'] = "Sono consentiti solo lettere e spazi bianchi.";
                                            }

                                        //date validation
                                            if(!isset($partials['date']) || empty($partials['date'])){
                                                $errEmpty['errPart'] = true;
                                                $response['errDate'] = "Campo obbligatorio.";
                                            } elseif($partials['date'] > date('Y-m-d')){
                                                $errInput['errPart'] = true;
                                                $response['errDate'] = "Non è possibile inserire una data successiva al presente.";
                                            } elseif($partials['date'] < (date('Y', 2016))){
                                                $errInput['errPart'] = true;
                                                $response['errDate'] = "Non è possibile inserire una data precedente al 2016.";
                                            }  
                                            
                                        //place validation
                                            if(!isset($partials['place']) || empty($partials['place'])){
                                                $errEmpty['errPart'] = true;
                                                $response['errPlace'] = "Campo obbligatorio.";
                                            } elseif(!Validate::check_chars($partials['place'], 3, 50)){
                                                $errInput['errPart'] = true;
                                                $response['errPlace'] = "Luogo deve essere lunga almeno 3 e al massimo 50 caratteri.";
                                            } elseif(preg_match('/^[A-Za-z\s]+$/', $partials['place'])){
                                                $errInput['errPart'] = true;
                                                $response['errPlace'] = "Sono consentiti solo lettere e spazi bianchi.";
                                            }
                                        
                                        //q_unloaded validation
                                            if(!isset($partials['q_unloaded']) || empty($partials['q_unloaded'])){
                                                $errEmpty['errPart'] = true;
                                                $response['errQUnloaded'] = "Campo obbligatorio.";
                                            } elseif(preg_match('/^[0-9]+$/', $partials['q_unloaded'])){
                                                $errInput['errPart'] = true;
                                                $response['errQUnloaded'] = "Sono consentiti solo numeri interi.";
                                            } elseif($partials['q_unloaded'] < 0){
                                                $errInput['errPart'] = true;
                                                $response['errQUnloaded'] = "Sono consentiti solo numeri positivi.";
                                            }    
                                        
                                        //invoice validation
                                            if(!isset($partials['invoice']) || empty($partials['invoice'])){
                                                $errEmpty['errPart'] = true;
                                                $response['errInvoice'] = "Campo obbligatorio.";
                                            } elseif(preg_match('/^[0-9]+$/', $partials['invoice'])){
                                                $errInput['errPart'] = true;
                                                $response['errInvoice'] = "Sono consentiti solo numeri.";
                                            } elseif($partials['invoice'] < 0){
                                                $errInput['errPart'] = true;
                                                $response['errInvoice'] = "Sono consentiti solo numeri positivi.";
                                            }                                       

                                            if($errEmpty['errPart'] == false && $errInput['errPart'] == false){
                                                $transaction = $model->getTransaction()->createPart($transport, $quantity, $partials);
                                                    if($transaction == true){
                                                        $response['msg'] = "I dati sono stati inseriti con successo.";
                                                        $response['status'] = 1;
                                                    } else{
                                                        $response['msg'] = "Si e verificato un problema. Riprovare.";
                                                    }
                                            }
                                        break;
                                    default:
                                        $transaction = $model->getTransaction()->createFull($transport, $quantity);
                                            if($transaction == true){
                                                $response['msg'] = "I dati sono stati inseriti con successo.";
                                                $response['status'] = 1;
                                            } else{
                                                $response['msg'] = "Si e verificato un problema. Riprovare.";
                                            }
                                        break;
                                        
                                } 
                            }*/
                } 
};

echo json_encode($response);