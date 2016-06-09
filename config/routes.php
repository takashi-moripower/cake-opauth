<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;

Router::plugin(
    'CakeOpauth',
    ['path' => '/cake-opauth'],
    function (RouteBuilder $routes) {
        $routes->fallbacks('DashedRoute');
    }
);
