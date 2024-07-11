<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('services', 'Services::index');
$routes->get('blog', 'Blog::index');
$routes->get('appointment', 'Appointment::index');
$routes->post('appointment', 'Appointment::index');
$routes->get('contact', 'Contact::index');
$routes->post('contact', 'Contact::index');
$routes->post('appointment-success', 'Contact::index');
$routes->get('diagnostics', 'Diagnostics::index');
$routes->get('galery', 'Galery::index');
