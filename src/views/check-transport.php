<?php
declare(strict_types = 1); 
use Liquimet\Model\Transport;

header('Content-Type: application/json');

$response = ['exists' => false, 'message' => ''];

    //  Check if slot or cmr exists in the database
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['field'], $_POST['value'])) {
        $field = $_POST['field'];
        $value = $_POST['value']; 
        $id = $_POST['id_transport'] ?? null;     // Optional ID for executing current transport

        $model = new Transport($database);

        if ($model->duplicate_transport($field, $value, $id)) {
            $response['exists'] = true;
            $response['message'] = $field === 'slot' ? "Slot ID già in uso." : "Numero CMR già in uso.";
        }  
    }
    
echo json_encode($response);