<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
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
$routes->get('/', 'Pages::index');
$routes->get('/about', 'Pages::about');
$routes->get('/contact', 'Pages::contact');

$routes->get('/wisata/(:any)', 'Wisata::detail/$1');

$routes->get('/pemesanan/tambah', 'Pemesanan::tambah');
$routes->get('/pemesanan/edit/(:segment)', 'Pemesanan::edit/$1');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/editpesan/(:segment)', 'Admin::editpesan/$1', ['filter' => 'role:admin']);
$routes->get('/admin/updatepesan/(:segment)', 'Admin::updatepesan/$1', ['filter' => 'role:admin']);
$routes->get('/admin/akun', 'Admin::akun', ['filter' => 'role:admin']);
$routes->get('/admin/akun/(:any)', 'Admin::detailakun/$1', ['filter' => 'role:admin']);
$routes->get('/admin/detailakun(:any)', 'Admin::detailakun/$1', ['filter' => 'role:admin']);
$routes->get('/admin/ubahroleakun/(:segment)', 'Admin::ubahroleakun/$1', ['filter' => 'role:admin']);
$routes->get('/admin/wisata', 'Admin::wisata', ['filter' => 'role:admin']);
$routes->get('/admin/wisata/(:any)', 'Admin::detailwisata/$1', ['filter' => 'role:admin']);
$routes->get('/admin/detailwisata/(:any)', 'Admin::detailwisata/$1', ['filter' => 'role:admin']);
$routes->get('/admin/editwisata/(:segment)', 'Admin::editwisata/$1', ['filter' => 'role:admin']);
$routes->get('/admin/updatewisata/(:segment)', 'Admin::updatewisata/$1', ['filter' => 'role:admin']);
$routes->get('/admin/tambahwisata', 'Admin::tambahwisata', ['filter' => 'role:admin']);
$routes->get('/admin/savewisata', 'Admin::savewisata', ['filter' => 'role:admin']);
$routes->delete('/admin/hapuswisata/(:num)', 'Admin::hapuswisata/$1', ['filter' => 'role:admin']);
$routes->get('/admin/profil', 'Admin::profil', ['filter' => 'role:admin']);
$routes->get('/admin/editprofil', 'Admin::editprofil', ['filter' => 'role:admin']);
$routes->get('/admin/updateprofil', 'Admin::updateprofil', ['filter' => 'role:admin']);

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
