<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


$routes->get('/', 'Home::index');
$routes->post('login', 'Home::login');
$routes->get('dashboard', 'Home::dashboard');

// $routes->get('add_boook', 'Home::add_boook'); 


$routes->get('addcategorylist', 'Home::addcategorylist');
$routes->post('employeecategoty', 'Home::employeecategoty');
$routes->post('common_delete', 'Home::common_delete');  
$routes->get('editcategory/(:num)', 'Home::editcategory/$1');
$routes->post('check_category_type', 'Home::check_category_type');
//$routes->post('call_Home_depart', 'Home::call_Home_depart');


$routes->post('(:any)', 'Home::$1');
$routes->post('(:any)/(:num)/(:num)', 'Home::/$1/$2');
// $routes->get('submit_new_Home', 'Home::submit_new_Home');
$routes->get('(:any)', 'Home::$1');
$routes->get('(:any)/(:num)', 'Home::/$1');

