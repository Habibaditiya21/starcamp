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
$routes->get('/', 'Home::index');

//users
$routes->get('/users', 'Users::getAllUser');
$routes->get('/users/(:any)', 'Users::getUserById');
$routes->post('/users', 'Users::createUser');
$routes->put('/users/(:any)', 'Users::UpdateUser');
$routes->delete('/users/(:any)', 'Users::deleteUser');

//products
$routes->get('/products', 'products::getAllProduct');
$routes->get('/products/(:any)', 'products::getProductById');
$routes->post('/products', 'products::createProduct');
$routes->put('/products/(:any)', 'products::UpdateProduct');
$routes->delete('/products/(:any)', 'products::deleteProduct');

//orders
$routes->get('/orders', 'orders::getAllOrder');
$routes->get('/orders/(:any)', 'orders::getOrderById');
$routes->post('/orders', 'orders::createOrder');
$routes->put('/orders/(:any)', 'orders::UpdateOrder');
$routes->delete('/orders/(:any)', 'orders::deleteOrder');

//payments
$routes->get('/payments', 'payments::getAllPayment');
$routes->get('/payments/(:any)', 'payments::getPaymentById');
$routes->post('/payments', 'payments::createPayment');
$routes->put('/payments/(:any)', 'payments::UpdatePayment');
$routes->delete('/payments/(:any)', 'payments::deletePayment');

//orderdetails
$routes->get('/orderdetails', 'orderdetails::getAllOrderDetails');
$routes->get('/orderdetails/(:any)', 'orderdetails::getOrderDetailsById');
$routes->post('/orderdetails', 'orderdetails::createOrderDetails');
$routes->put('/orderdetails/(:any)', 'orderdetails::UpdateOrderDetails');
$routes->delete('/orderdetails/(:any)', 'orderdetails::deleteOrderDetails');

//paymentdetails
$routes->get('/paymentdetails', 'paymentdetails::getAllPaymentDetails');
$routes->get('/paymentdetails/(:any)', 'paymentdetails::getPaymentDetailsById');
$routes->post('/paymentdetails', 'paymentdetails::createPaymentDetails');
$routes->put('/paymentdetails/(:any)', 'paymentdetails::UpdatePaymentDetails');
$routes->delete('/paymentdetails/(:any)', 'paymentdetails::deletePaymentDetails');


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
