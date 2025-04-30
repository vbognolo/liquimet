<?php
declare(strict_types = 1);  
require_login();
is_admin($session->role);
   

$data = $model->getTitle()->getAll();

echo json_encode($data);