<?php

require_once _APP . '/controllers/HomeController.php';

$app->get('/', 'HomeController:index');

?>
