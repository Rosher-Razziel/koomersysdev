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
    // GRUPO DE URL TEMPLATE
    $routes->group('template', static function($routes){
        $routes->get('/', 'Dashboard\DashboardController::template');
    });

    // GRUPO DE URL USUARIO
    $routes->group('users', static function($routes){
        $routes->get('/', 'Users\UserController::index');
        $routes->get('listarUsuarios', 'Users\UserController::listarUsuarios');
        $routes->get('edit/(:any)', 'Users\UserController::edit/$1');
        $routes->post('create', 'Users\UserController::create');
        $routes->post('update', 'Users\UserController::update');
        $routes->delete('eliminar/(:any)', 'Users\UserController::delete/$1');
    });

    // GRUPO DE URL DASHBOARD
    $routes->group('dashboard', static function($routes){
        $routes->get('/', 'Dashboard\DashboardController::index');
    });
});

$routes->set404Override(function () {
    echo view('errors/error_404', ['title' => '404 - Página no encontrada']);
});