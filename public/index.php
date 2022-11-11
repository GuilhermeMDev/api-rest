<?php

require_once '../vendor/autoload.php';

use PlugRoute\PlugRoute;

$route = new PlugRoute();

$route->namespace('\App\Http\Controllers')
    ->group(function ($route) {
        $route->get('/')->controller('\TesteController', 'teste');
    });

$route->run();