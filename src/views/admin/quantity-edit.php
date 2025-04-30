<?php
declare(strict_types = 1);   
use Liquimet\Validate\Validate;

//initialize variables that are needed for the the HTML page
$quantity = [];                                                    
$saved = null;
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){   
        if(isset($_POST['update_quantity'])){  
            $quantity = [
                'kg_load' => $_POST['kg_load'],
                'cooling' => $_POST['cooling'],
                'price_typology' => $_POST['price_typology'],
                'price_value' => (isset($_POST['price_value'])) ? $_POST['price_value'] : 0,
                'kg_unload' => $_POST['kg_unload'],
                'liquid_density' => $_POST['liquid_density'],
                'gas_weight' => $_POST['gas_weight'],
                'pcs_ghv' => $_POST['pcs_ghv'],
                'id_user' => $model->getSession()->id_user,
                'id_transport' => $_POST['id_transport'],
            ];      

            $saved = $model->getQuantity()->update($quantity);        
            $type = $_POST['type'];

                if($saved === true){                               
                    if($type == 'F'){                               
                        redirect('admin/transports-full'); 
                    } else{
                        redirect('admin/transports-part');
                    }
                }

            
        }  
    }
    var_dump($quantity);
    print_r($quantity);
//login and session data
$data['user'] = $user = $model->getSession()->id_user;

//insert form data
$data['quantity'] = $quantity;

echo $twig->render('admin/quantity-edit.html', $data);                                         