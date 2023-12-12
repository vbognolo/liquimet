<?php
declare(strict_types = 1);
use Liquimet\Validate\Validate;                             // use validate class   

$transport = [];                                            // transport data
$errors = [];                                               // error messages
$saved = null;                                              // did transport save
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){              // Form submitted
        $transport['type'] = $_POST['type'];
        $transport['slot'] = $_POST['slot'];
        $transport['cmr'] = $_POST['cmr'];
        $transport['issuer'] = $_POST['issuer'];
        $transport['supplier'] = $_POST['supplier'];
        $transport['transport'] = $_POST['transport'];
        $transport['date_load'] = $_POST['date_load'];
        $transport['date_unload'] = $_POST['date_unload'];
        $transport['container'] = $_POST['container'];
        $transport['note'] = $_POST['note'];
        $transport['seo'] = substr($transport['slot'], 27, 4);
        
            if($transport['type'] == 0){
                $transport['id_category'] = 1;
            } else{
                $transport['id_category'] = 3;
            }
/*        
        $errors['issuer'] = (Validate::isText($transport['issuer'], 1, 80))
        ? '' : 'Issuer should be 1 - 80 characters.';                                           // validate issuer
        $errors['supplier'] = (Validate::isText($transport['supplier'], 1, 80))
        ? '' : 'Supplier should be 1 - 80 characters.';                                         // validate supplier
        $errors['transport'] = (Validate::isText($transport['transport'], 1, 80))
        ? '' : 'Transport should be 1 - 80 characters.';                                        // validate transport
        $errors['container'] = (Validate::isText($transport['container'], 1, 80))
        ? '' : 'Container should be 1 - 80 characters.';                                        // validate container
        $errors['note']  = (Validate::isText($transport['note'], 1, 254))
        ? '' : 'Note should be 1 - 254 characters.';                                            // validate note
    //    $errors['id_category'] = Validate::isCategory($transport['id_category'], $categories)
    //    ? '' : 'Not a valid category';                                                          // validate category   
    
        $invalid = implode($errors);                                                // join error messages

        if($invalid){                                                               // If invalid data
            $errors['message'] = 'Please correct form errors';                      // Store message
        } else{                                                                     // Otherwise
        */
            if(!$id){                                                               // If id exists: update
                $saved = $model->getTransport()->create($transport);                  // Update article
            } 
            
            if($saved === true){      
                redirect('index/' . 1 . '/' . 'piattaforma', [], 301);                                                                  
            } else{
                $errors['message'] = 'Transport Slot ID already in use';          
            }
        
    }

// navigation menu data
$data['navigation'] = $model->getCategory()->getGroups(); 
$data['categories'] = $model->getCategory()->getAll();   
$data['group_count'] = $model->getCategory()->countG();  

// transport data
$data['transport'] = $transport;

$data['quantities'] = $model->getQuantity()->getAll();
$data['partials'] = $model->getPartial()->getAll();
$data['total'] = $model->getTransport()->count();

// login and session data
//$data['user'] = $model->getUser()->get($id);

// current category data
//$data['category'] = $category = $model->getCategory()->get($id);                                                        // current group
//$data['group'] = $category['id_group'];                                               // group id for link     
//$data['section'] = $category['id_category'];                                          // category id for nav  

echo $twig->render('add-page.html', $data);            