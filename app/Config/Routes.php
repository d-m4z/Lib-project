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

// VIEWS
$routes->get('/book', 'Crud\Book::book');
$routes->get('/borrow', 'Crud\Borrow::borrow');
$routes->get('/borrower', 'Crud\Borrower::borrower');
$routes->get('/publisher', 'Crud\Publisher::publisher');
$routes->get('/category', 'Crud\Category::category');
$routes->get('/staff', 'Crud\Staff::staff');

// BOOK
$routes->get('/book/create', 'Crud\Book::create');
$routes->post('/book/save', 'Crud\Book::save');
$routes->post('/book/delete/(:num)', 'Crud\Book::delete/$1');
$routes->get('/book/edit/(:num)', 'Crud\Book::edit/$1');
$routes->post('/book/edit', 'Crud\Book::editPro');

// BORROW
$routes->get('/borrow/create', 'Crud\Borrow::create');
$routes->post('/borrow/save', 'Crud\Borrow::save');
$routes->post('/borrow/delete/(:num)', 'Crud\Borrow::delete/$1');
$routes->get('/borrow/edit/(:num)', 'Crud\Borrow::edit/$1');
$routes->post('/borrow/edit', 'Crud\Borrow::editPro');

// BORROWER
$routes->get('/borrower/create', 'Crud\Borrower::create');
$routes->post('/borrower/save', 'Crud\Borrower::save');
$routes->post('/borrower/delete/(:num)', 'Crud\Borrower::delete/$1');
$routes->get('/borrower/edit/(:num)', 'Crud\Borrower::edit/$1');
$routes->post('/borrower/edit', 'Crud\Borrower::editPro');

// CATEGORY
$routes->get('/category/create', 'Crud\Category::create');
$routes->post('/category/save', 'Crud\Category::save');
$routes->post('/category/delete/(:num)', 'Crud\Category::delete/$1');
$routes->get('/category/edit/(:num)', 'Crud\Category::edit/$1');
$routes->post('/category/edit', 'Crud\Category::editPro');

// PUBLISHER
$routes->get('/publisher/create', 'Crud\Publisher::create');
$routes->post('/publisher/save', 'Crud\Publisher::save');
$routes->post('/publisher/delete/(:num)', 'Crud\Publisher::delete/$1');
$routes->get('/publisher/edit/(:num)', 'Crud\Publisher::edit/$1');
$routes->post('/publisher/edit', 'Crud\Publisher::editPro');

// STAFF
$routes->get('/staff/create', 'Crud\Staff::create');
$routes->post('/staff/save', 'Crud\Staff::save');
$routes->post('/staff/delete/(:num)', 'Crud\Staff::delete/$1');
$routes->get('/staff/edit/(:num)', 'Crud\Staff::edit/$1');
$routes->post('/staff/edit', 'Crud\Staff::editPro');

// LOGIN
$routes->get('/login', 'MainController::login');
$routes->post('/auth', 'MainController::auth');
$routes->get('/logout', 'MainController::logout');
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
