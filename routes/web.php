<?php

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();

$routes->add('route_name', new Route('/about', [
    'controller' => 'PageController',
    'method' => 'aboutPage'
]));
