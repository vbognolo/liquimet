<?php
declare(strict_types = 1);   

$id = intval($_GET['id_transport']);
$transport = $model->getTransport()->get($id);

header('Content-Type: application/json');
echo json_encode($transport);