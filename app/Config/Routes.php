<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('pessoas/create', 'Pessoas::create');
$routes->post('pessoas/store', 'Pessoas::store');
$routes->get('pessoas', 'Pessoas::index');
$routes->get('pessoas/edit/(:num)', 'Pessoas::edit/$1');
$routes->get('pessoas/delete/(:num)', 'Pessoas::delete/$1');
