<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;
require_login();

$result = [];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['upload'])){

            $temp = $_FILES['browse']['tmp_name'];
            $size = $_FILES['browse']['size'];	 
            $path = str_replace('\\', '/', $temp);
            $total_rows = count(file($temp));

            if($total_rows > 0){
                $import = $model->getTransaction()->importCSV($path, $model->getSession()->id_user);

                if($import !== false){
                    $result = $model->getTransaction()->importDataCSV($result);
                }
            }

           /* if($size > 0){
                $handle = fopen($temp, "r");

                while(!feof($handle)){
                    $row = fgetcsv($handle, 10000, ",");

                    while($row !== FALSE){
                        $transport = [
                            'type' => $row[0],
                            'slot' => $row[1],
                            'cmr' => $row[2],
                            'issuer' => $row[3],
                            'supplier' => $row[4],
                            'transport' => $row[5],
                            'date_load' => date_format(new DateTime($row[6]), 'Y-m-d'),
                            'date_unload' => date_format(new DateTime($row[7]), 'Y-m-d'),
                            'container' => $row[8],
                            'note' => $row[9],
                            'seo' => substr($row[1], -4),
                            'created' => date("Y-m-d"),
                            'id_user' => $model->getSession()->id_user,
                        ];
    
                        $quantity = [
                            'kg_load' => $row[10],
                            'cooling' => $row[11],
                            'price_typology' => $row[12],
                            'price_value' => ($row[13] == 'yes') ? $row[13] : 0,
                            'kg_unload' => $row[14],
                            'liquid_density' => $row[15],
                            'gas_weight' => $row[16],
                            'pcs_ghv' => $row[17],
                            'created' => date("Y-m-d"),
                            'id_user' => $model->getSession()->id_user,
                        ];
    
                        if($row[0] == 'P'){
                            $partial['destination'] = $row[18];
                            $partial['exw'] = $row[19];
                            $partial['date'] = $row[20];
            
                                foreach($partial['date'] as &$date){
                                    $date = date('Y-m-d', strtotime($date)); 
                                }
            
                            $partial['place'] = $row[21];
                            $partial['q_unloaded'] = $row[22];
                            $partial['invoice'] = $row[23];
                            $partial['id_user'] = $model->getSession()->id_user;
                        }
                    }
        

                /*
                if($transport['type']){
                    $transaction = $model->getTransaction()->createFull($transport, $quantity);
                        if ($transaction === true) {
                            redirect('transports-full');
                        } else {
                            $transaction = false;
                            redirect('transport');
                        }
                } else{
                    $transaction = $model->getTransaction()->createPart($transport, $quantity, $partials);
                        if ($transaction === true) {
                            redirect('transports-part');
                        } else {
                            $transaction = false;
                            redirect('transport');
                        }*/
        }
           /* }

            fclose($handle);
        }*/
    }

//insert form data
echo json_encode($result);
var_dump(json_encode($result));

echo $twig->render('platform.html');