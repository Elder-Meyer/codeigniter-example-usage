<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/productos', 'Productos::index');
// controladores y parametros
$routes->get('/productos/([0-9]{2})', 'Productos::show/$1');
$routes->get('/productos/(:alpha)/(:num)', 'Productos::cat/$1/$2');
// controlador que solo llama a la vista
$routes->view('productosList/(:alpha)', 'lista_productos');

// ejemplo de agrupación de rutas
$routes->group('admin', static function($routes){
    $routes->get('/productos', 'Productos::index');
});