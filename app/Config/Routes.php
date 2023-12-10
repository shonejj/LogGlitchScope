<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'LoginController::index');
$routes->get('/dashboard', 'DashboardController::index');
$routes->post('/fetch/apache_logs', 'DashboardController::fetchApacheLogs');
$routes->post('/fetch/mysql_logs', 'DashboardController::fetchMysqlLogs');
$routes->post('/fetch/top_output', 'DashboardController::fetchTopOutput');
