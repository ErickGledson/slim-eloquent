<?php

namespace App\Route;

$c = new \App\Database\Capsule;

$app->get('/', 'App\Controller\HomeController:index');

?>
