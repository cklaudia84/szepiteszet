<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('services', 'Services::index');
$routes->get('blog', 'Blog::index');
$routes->match(['get', 'post'], 'appointment', 'Appointment::index');
$routes->match(['get', 'post'], 'contact', 'Contact::index');
$routes->post('appointment-success', 'Contact::index');
$routes->get('diagnostics', 'Diagnostics::index');
$routes->get('galery', 'Galery::index');

$routes->match(['get', 'post'], 'login', 'UserAuth::login');
$routes->get('logout', 'UserAuth::logout');

$routes->match(['get', 'post'], 'admin', 'Admin::index', ['filter' => 'auth']);

$routes->match(['get', 'post'], 'booked', 'Booked::list', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'booked/new', 'Booked::creation');
$routes->match(['get', 'post'], 'booked/edit/(:any)', 'Booked::edit/$1');
$routes->get('booked/delete/(:num)', 'Booked::delete/$1');
$routes->get('booked/confirmDelete/(:num)', 'Booked::confirmDelete/$1');
$routes->match(['get', 'post'], 'contacted', 'Contacted::list', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'contacted/edit/(:any)', 'Contacted::edit/$1');
$routes->get('contacted//delete(:num)', 'Contacted::delete/$1');

$routes->match(['get', 'post'], 'services-edit', 'Services::list', ['filter' => 'auth']);
$routes->match(['get', 'post'], 'services-edit/new', 'Services::creation');
$routes->match(['get', 'post'], 'services-edit/edit/(:any)', 'Services::edit/$1');
$routes->get('services-edit/delete(:num)', 'Services::delete/$1');

