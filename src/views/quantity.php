<?php
declare(strict_types = 1);                               
require '../src/setup.php';

$quantities = $model->getQuantity()->getAll();

$id = filter_input(INPUT_GET, 'id_transport', FILTER_VALIDATE_INT);
$transport = $model->getTransport()->get($id);

$section = $transport['id_transport'];                                              // current category
$title = 'Costo LNG';                                              
