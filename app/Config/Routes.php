<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//$routes->get('/', 'Home::index');
$routes->get('/', 'HandleLogin::index');
$routes->get('/user_dashboard',"HandleLogin::showUserDashboard");
$routes->get('/Login',"HandleLogin::index");
$routes->get('/userDashboard',"HandleLogin::showUserDashboard");
$routes->get('/storeDetails','HandleLogin::storeUserDetails');
$routes->get('/admin','HomeAdmin::index');
$routes->get('/admin/Login',"HandleLogin::Login");
$routes->get('/Admin/AdminDashboard',"HomeAdmin::showAdminDashboard");
$routes->get('/team','HandleLogin::team');
$routes->get('/contact','HandleLogin::contact');
$routes->get('/About Us','HandleLogin::aboutUs');
$routes->get('/superAdmin','SuperAdmin::index');
$routes->get('/adminRequest','SuperAdmin::handleRequest');



if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
