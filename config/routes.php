<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

/*
 * Bleeding edge routing configuration
 */
$routes = new RouteCollection();
$routes->add('home_index', new Route('/', array('controller' => 'index')));
$routes->add('home_code', new Route('/code-example', array('controller' => 'index', 'action' => 'codeExample')));

return $routes;
