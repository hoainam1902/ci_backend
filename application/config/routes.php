<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'HomeController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['admin/(:any)'] = "admin/auth/$1";
$route['shop'] = 'ShopController/index';
// $route['shop?category=(:any)'] = 'ShopController/showProductsOfBrand/$1';
$route['category/(:any)/(:num)'] = 'viewShopCategory/$1/$2';
$route['category/muc/(:any)'] = 'home/viewShopCategory/$1';
$route['cart'] = 'CartController/index';
$route['cart/addItem'] = 'CartController/addCartItem';
$route['cart/update'] = 'CartController/update';
$route['cart/removeItem/(:num)'] = 'CartController/removeCartItem/$1';
$route['cart/emptycart'] = 'CartController/emptycart';
$route['checkout'] = 'OrderController/index';
// $route['order/checkout'] = 'OrderController/checkout';
$route['account/login'] = 'AccountController/login';
$route['account/logout'] = 'AccountController/logout';
$route['account/signup'] = 'AccountController/signup';

$route['user/login'] = 'user/LoginController/login';
$route['user/logout'] = 'user/LoginController/logout';
$route['dashboard/order'] = 'user/OrderController/index';
$route['dashboard/order/edit/(:num)'] = 'user/OrderController/edit/$1';
$route['dashboard/order/cancel/(:num)'] = 'user/OrderController/cancel/$1';
$route['dashboard/order/show-details'] = 'user/OrderController/showDetails';
$route['user/profile'] = 'user/UserController/personalInfo';
$route['user/change-password'] = 'user/UserController/changePassword';
$route['user/update-profile'] = 'user/UserController/updateProfile';

$route['(:any)'] = 'ProductController/index/$1';
