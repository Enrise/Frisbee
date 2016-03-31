<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

/*
 * Bleeding edge routing configuration
 */
$routes = new RouteCollection();
$routes->add('home_index', new Route('/', array('controller' => 'Index')));
$routes->add('about_index', new Route('/about', array('controller' => 'About')));

return $routes;
