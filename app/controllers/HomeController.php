<?php

/**
 * Home Controller
 */
class HomeController
{

    function __construct()
    {
    }

    function index($request, $response, $args)
    {
        $response->write("Hello World!");
    }
}


?>
