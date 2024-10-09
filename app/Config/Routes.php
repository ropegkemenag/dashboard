<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pengadaan/cpns', 'Pengadaan::cpns');
$routes->get('pengadaan/pppk', 'Pengadaan::pppk');
