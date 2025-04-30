<?php
declare(strict_types = 1);   

$id = intval($_GET['id_partial']);
$partial = $model->getPartial()->get($id);

echo json_encode($partial);