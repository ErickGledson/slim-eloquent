<?php

define ('_APP', dirname(__FILE__) . '/app');

require 'vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'debug' => true,
        'displayErrorDetails' => true
    ]
]);

require_once _APP . '/config/database.php';
require_once _APP . '/helpers/appHelpers.php';
require_once _APP . '/models/appModels.php';
require_once _APP . '/routes.php';

$app->run();
