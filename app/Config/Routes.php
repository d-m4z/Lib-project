<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'MainController::index');

$routes->get('/book', 'Crud\Book::book');
$routes->get('/borrow', 'Crud\Borrow::borrow');
$routes->get('/borrower', 'Crud\Borrower::borrower');
$routes->get('/publisher', 'Crud\Publisher::publisher');
$routes->get('/category', 'Crud\Category::category');
$routes->get('/staff', 'Crud\Staff::staff');

$routes->get('/book/create', 'Crud\Book::create');
$routes->post('/book/save', 'Crud\Book::save');

$routes->get('/borrow/create', 'Crud\Borrow::create');
$routes->post('/borrow/save', 'Crud\Borrow::save');

$routes->get('/borrower/create', 'Crud\Borrower::create');
$routes->post('/borrower/save', 'Crud\Borrower::save');

$routes->get('/category/create', 'Crud\Category::create');
$routes->post('/category/save', 'Crud\Category::save');

$routes->get('/publisher/create', 'Crud\Publisher::create');
$routes->post('/publisher/save', 'Crud\Publisher::save');

$routes->get('/staff/create', 'Crud\Staff::create');
$routes->post('/staff/save', 'Crud\Staff::save');

// LOGIN
$routes->get('/login', 'MainController::login');
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
