<?php

namespace App\Controller;

use App\Database;
use App\Model\Users;


class HomeController
{

    function __construct()
    {
    }

    function index($request, $response, $args)
    {
        $user = Users::find(12);
        $response->write($user->name);
    }
}


?>
