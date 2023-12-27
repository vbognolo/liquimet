<?php
declare(strict_types = 1);                               

$model->getSession()->delete();                  //call method to end session
redirect('login/');                              //redirect to home page