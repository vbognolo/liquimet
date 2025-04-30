<?php
declare(strict_types = 1);                                           
use Liquimet\Validate\Validate; 
require_login(); 

$data['term'] = filter_input(INPUT_GET, 'term');  
$data['count'] = 0;
$data['transports'] = [];

    /*if(isset($_POST['search'])){
        $term = Validate::check_input($_POST['search']);
    }*/

    
    if($data['term']){                                                 // If no search term
        $data['count'] = $model->getQuantity()->searchCount($data['term']); // Get number of matches
        if($data['count'] > 0){                                        // If there are matches
            $data['transports'] = $model->getQuantity()->search($data['term']); // Get matches
            redirect('transports-full');
        }
    }




echo $twig->render('search.html', $data);                        