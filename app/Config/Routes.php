<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');

$routes->get('/post', 'Post::index');
$routes->get('/post/(:any)', 'Post::viewPost/$1');

// Tambahkan rute untuk register
$routes->group('register', function ($routes) {
    $routes->get('/', 'RegisterController::index', ['as' => 'register']);
    $routes->post('/', 'RegisterController::store');
});

// Tambahkan rute untuk login
$routes->group('login', function ($routes) {
    $routes->get('/', 'LoginController::index', ['as' => 'login']);
    $routes->post('/', 'LoginController::login');
});

// Tambahkan rute untuk logout
$routes->group('logout', function ($routes) {
    $routes->get('/', 'LogoutController::index');
});

// Rute untuk halaman admin setelah login
$routes->get('/admin/admin_post_list', 'Admin::postList');

// Rute admin post
$routes->group('admin', function($routes){
    $routes->get('post', 'PostAdmin::index');
    $routes->get('post/(:segment)/preview', 'PostAdmin::preview/$1');
    $routes->add('post/new', 'PostAdmin::create');
    $routes->add('post/(:segment)/edit', 'PostAdmin::edit/$1');
    $routes->get('post/(:segment)/delete', 'PostAdmin::delete/$1');
});
