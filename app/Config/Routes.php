<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
#$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
 $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
#$routes->get('/', 'Home::index');

//Image Product CRUD

$routes->get('products', 'ProductController::index'); //to call the product Folder, ProductController, and It's Index Method
$routes->get('product-add', 'ProductController::create');
$routes->post('product-store', 'ProductController::store');
$routes->get('product/edit/(:num)', 'ProductController::edit/$1');
$routes->post('product/update/(:num)', 'ProductController::update/$1');
$routes->get('product/delete/(:num)', 'ProductController::delete/$1');

$routes->get('/', 'ProjectController::admin');

$routes->get('/', 'SendMail::index');
$routes->match(['get', 'post'], 'SendMail/sendMail', 'SendMail::sendMail');

#$routes->post('/','HomeController::home'); // is used to redirect the Controller

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
/*$routes->setDefaultController('Home');
$routes->get('/Test', 'Test::index');
$routes->get('/Online', 'Online::index');*/

