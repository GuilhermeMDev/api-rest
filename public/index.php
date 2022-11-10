<?php

use PlugRoute\PlugRoute;

require_once '../vendor/autoload.php';

$route = new PlugRoute();

$route->get('/')
    ->callback(function () {

        $teste = ['teste' => 'Testando API'];

        echo json_encode($teste);
    });

$route->run();