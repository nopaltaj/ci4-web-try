<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/register', 'Register::index');
$routes->get('/login', 'Login::index');
$routes->get('/dashboard', 'Barang::index');
$routes->get('/barang-create', 'Barang::create');
$routes->post('/barangcreateProses', 'Barang::CreateBarangProses');
$routes->get('/barangedit/(:any)', 'Barang::edit/$1');
$routes->post('/barangeditProses', 'Barang::editProses');
$routes->get('/barangdelete/(:any)', 'Barang::delete/$1');
$routes->get('/surat-create', 'Surat::create');
$routes->post('/SuratCreateProses', 'Surat::CreateSuratProses');
$routes->get('/suratedit/(:any)', 'Surat::edit/$1');
$routes->post('/surateditProses', 'Surat::editProses');
$routes->get('/suratdelete/(:any)', 'Surat::delete/$1');
$routes->get('/data-barang', 'DataBarang::index');
$routes->get('/dataBarangEdit/(:any)', 'DataBarang::edit/$1');
$routes->post('/dataBarangEditProses', 'DataBarang::editProses');
$routes->get('/data-surat', 'DataSurat::index');
$routes->get('/dataSuratEdit/(:any)', 'DataSurat::edit/$1');
$routes->post('/dataSuratEditProses', 'DataSurat::editProses');

$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/', 'SigninController::index');
$routes->get('/logout', 'SigninController::logout');
$routes->get('/dashboard', 'Dashboard::index',['filter' => 'authGuard']);