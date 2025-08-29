<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth\AuthController::index');

// Users (admin-only)
$routes->group('users', static function($routes){
    $routes->get('/', 'Users\UserController::index');
    $routes->get('create', 'Users\UserController::create');
    $routes->get('edit/(:any)', 'Users\UserController::edit/$1');
    $routes->get('create/massiveload', 'Users\UserController::masiveload');
    $routes->get('find/(:any)', 'Users\UserController::find/$1');
    
    $routes->post('store', 'Users\UserController::store');
    $routes->post('update/(:num)', 'Users\UserController::update/$1');
    $routes->get('delete/(:num)', 'Users\UserController::delete/$1');
});