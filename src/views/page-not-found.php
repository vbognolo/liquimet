<?php 
declare(strict_types = 1);                               
http_response_code(404);                                            // set http response code

$data['navigation'] = $model->getNavigation()->getAdminNavigation();        

echo $twig->render('page-not-found.html', $data);               // render template
exit;