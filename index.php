<?php

require 'vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'debug' => true,
        'displayErrorDetails' => true
    ]
]);

require_once 'app/routes.php';

$app->run();
