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
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'general';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/


$route['api'] = 'general';
//$route['api/menus'] = 'api/menus';
$route['session'] = 'general/read_session';
$route['api/cart'] = 'general/cart';
$route['api/account'] = 'users/my_account';
$route['api/user'] = 'users/user';
$route['api/user/checkmail'] = 'users/checkmail';
$route['api/products/random/(:num)'] = 'general/random_products/$1';
$route['api/products/random'] = 'general/random_products';
$route['api/products/attributes'] = 'general/products_attr';
$route['api/products/count'] = function(){
	return 'general/products/' . NULL . '/' . 'true';
};
$route['api/products/(:num)'] = 'general/products/$1';
$route['api/products'] = 'general/products';
$route['api/test/(:num)'] = 'general/test/$1';
$route['api/services/(:num)'] = 'general/services/$1';
$route['api/services'] = 'general/services';
//$route['api/categrories/random'] = 'api/random_categories';
$route['api/categories'] = 'general/categories';
$route['api/geo/ro/county'] = 'general/geo_ro_county';
$route['api/local'] = 'general/local_user';
$route['test'] = 'testunit';
$route['test/raw'] = 'testunit/raw_data';