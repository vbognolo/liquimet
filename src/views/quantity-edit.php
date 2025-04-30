<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;
require_login();

//initialize variables that are needed for the the HTML page
$quantity = [];                                                    
$saved = null;
    
    //get modal value using the row id
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['update_quantity'])){  
            $quantity = [
                'kg_load' => $_POST['kg_load'],
                'cooling' => $_POST['cooling'],
                'price_typology' => $_POST['price_typology'],
                'price_value' => ($_POST['price_typology'] == 'yes') ? ($_POST['price_value']) : 0,
                'kg_unload' => $_POST['kg_unload'],
                'liquid_density' => $_POST['liquid_density'],
                'gas_weight' => $_POST['gas_weight'],
                'pcs_ghv' => $_POST['pcs_ghv'],
                'modified' => date("Y-m-d"),
                'modified_by' => $model->getSession()->id_user,
                'id_transport' => $_POST['id_transport'],
            ];      

            $saved = $model->getQuantity()->update($quantity);        
            $type = $_POST['type'];

                if($saved === true){                          
                    switch($type){
                        case 'F':
                            redirect('transports-full');
                        case 'P':
                            redirect('transports-part');
                    }
                } 
        }  
    }

//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//insert form data
$data['quantity'] = $quantity;

echo $twig->render('quantity-edit.html', $data);                                         