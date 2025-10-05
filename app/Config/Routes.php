<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

    $routes->get('/', 'Auth\AuthController::showLogin', ['filter' => 'alreadyLoggedIn']);
    $routes->post('auth/login', 'Auth\AuthController::login');
    $routes->get('auth/logout', 'Auth\AuthController::logout');


// SOLO PUEDE ACCEDER AQUE QUE ESTE LOGEADO()
$routes->group('', ['filter' => 'authGuard'], static function($routes){
    // GRUPO DE URL USUARIO
    $routes->group('users', static function($routes){
        $routes->get('/', 'Users\UserController::index');
        $routes->get('create', 'Users\UserController::create');
        $routes->get('edit/(:any)', 'Users\UserController::edit/$1');
        $routes->get('create/carga-masiva', 'Users\UserController::cargaMasiva');
        $routes->get('find/(:any)', 'Users\UserController::find/$1');
        
        $routes->post('store', 'Users\UserController::store');
        $routes->post('update/(:num)', 'Users\UserController::update/$1');
        $routes->get('delete/(:num)', 'Users\UserController::delete/$1');
    });
});

$routes->set404Override(function () {
    echo view('errors/error_404', ['title' => '404 - Página no encontrada']);
});