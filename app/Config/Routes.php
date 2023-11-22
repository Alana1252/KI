<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::index');
$routes->get('button', 'Home::cb');
$routes->get('about', 'Home::about');
$routes->get('dashboard', 'AdminController::dashboard');
