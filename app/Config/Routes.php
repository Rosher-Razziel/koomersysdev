<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth\AuthController::index');

$routes->get('/users', 'Users\UserController::index');
