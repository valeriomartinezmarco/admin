<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('registroPropiedad', 'Home::registroCasa');

service('auth')->routes($routes);
