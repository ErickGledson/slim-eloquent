<?php

use Slim\App;

class helpers {

    static function jsonResponse($error = true, $message = '', $data = array()) {
        $response = new stdClass();
        $response->error = $error;
        $response->message = $message;
        $response->data = $data;

        return json_encode($response);
    }

    static function criptografar($password) {
        return crypt($password, '$2a$08$3er1iCcKKQU3Gr3D1550n44kkqwmmnns');
    }

    static function comparar($password, $criptografado) {
        $c = helpers::criptografar($password);
        return ($c == $criptografado ? true : false);
    }

}
