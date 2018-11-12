<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::plugin(
    'BaseApp',
    ['path' => '/base-app'],
    function (RouteBuilder $routes) {
        $routes->fallbacks(DashedRoute::class);
    }
);

Router::scope('/base-app', function (RouteBuilder $routes) {
  $routes->connect('/users', ['plugin' => 'CakeDC/Users', 'controller' => 'Users', 'action' => 'index']);
  $routes->fallbacks(DashedRoute::class);
});
