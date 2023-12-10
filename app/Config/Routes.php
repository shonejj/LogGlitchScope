<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->get('/login', 'LoginController::index');
$routes->post('/login/authenticate', 'LoginController::authenticate');
$routes->get('/logout', 'LoginController::logout');


$routes->get('/dashboard', 'DashboardController::index');
$routes->post('/fetch/apache_logs', 'DashboardController::fetchApacheLogs');
$routes->post('/fetch/mysql_logs', 'DashboardController::fetchMysqlLogs');
$routes->post('/fetch/top_output', 'DashboardController::fetchTopOutput');
