<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('page', 'PageController::index');
$routes->get('(:segment)',[Pages::class,'jeux']);