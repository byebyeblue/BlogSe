<?php

namespace Config;

use App\Controllers\BlogsController;

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
$routes->get('/', 'BlogsController::home');
$routes->get('/about', function(){
    $data = [
        'title' => "BlogSe - About",
    ];
    echo view('layouts/header', $data);
    //echo view('layouts/navbar');
    echo view('v_about');
    echo view('layouts/footer');
});
$routes->get('/blogs', 'BlogsController::index');
$routes->get('/blogs/tambahblog', 'BlogsController::tambahblog');
$routes->get('/blogs/hapus/(:any)', 'BlogsController::hapus/$1'); //$1 untuk nampung parameter any
$routes->get('/blogs/editblog/(:any)', 'BlogsController::editblog/$1');
$routes->post('/blogs/posting', 'BlogsController::posting');
$routes->post('/blogs/updateblog', 'BlogsController::updateblog');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}