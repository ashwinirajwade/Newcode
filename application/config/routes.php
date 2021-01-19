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


$route['default_controller'] = 'front/Welcome';
$route['search'] = 'front/Welcome/search';
$route['subcategory/(:num)'] = 'front/Subcategory';
$route['packages/(:num)/(:num)'] = 'front/Packages';
$route['packages/detail/(:num)/(:num)'] = 'front/packages/detail/';

$route['user/profile'] = 'front/User/profile';
$route['user/update_profile'] = 'front/User/update_profile';
$route['user/orders/(:any)'] = 'front/User/orders';
$route['user/cancel_order/(:any)'] = 'front/User/cancel_order';
$route['user/address'] = 'front/User/address';
$route['user/insert_address'] = 'front/User/insert_address';
$route['user/insert_confirm_address/(:num)'] = 'front/User/insert_confirm_address';
$route['user/delete/(:num)'] = 'front/User/delete';
$route['user/delete-address/(:num)/(:num)'] = 'front/User/delete_address';
$route['user/cart/(:num)'] = 'front/User/cart';


$route['user/offerlist/(:num)'] = 'front/user/offerlist';
$route['user/apply-coupon/(:num)'] = 'front/user/apply_coupon';
$route['user/addtocart/(:num)/(:num)'] = 'front/User/addtocart';
$route['user/detailaddtocart/(:num)'] = 'front/User/detailaddtocart';
$route['user/cartaddto/(:num)'] = 'front/User/cartaddto';
$route['user/deletecart/(:num)/(:num)'] = 'front/User/deletecart';
$route['user/confirm-address/(:num)'] = 'front/User/confirm_address';
$route['user/confirm-schedule/(:num)'] = 'front/User/confirm_schedule';

$route['user/payment'] = 'front/User/payment';
$route['user/success'] = 'front/User/success';
$route['user/failure'] = 'front/User/failure';
$route['user/thank-you'] = 'front/User/thank_you';
$route['user/cart_empty'] = 'front/User/cart_empty';
$route['user/noaddress'] = 'front/User/noaddress';
$route['user/reviews'] = 'front/User/reviews';
$route['user/insert_rating/(:num)'] = 'front/User/insert_rating';
$route['user/login'] = 'front/User/login';
$route['user/otp/(:any)'] = 'front/User/otp';
$route['user/check_otp'] = 'front/User/check_otp';
$route['user/logout'] = 'front/User/logout';
$route['user/app_link'] = 'front/User/app_link';
$route['vendor'] = 'front/Vendor';
$route['vendor/insert_vendor'] = 'front/Vendor/insert_vendor';
$route['about-us'] = 'front/About';
$route['faq'] = 'front/Faq';
$route['cancellation-policy'] = 'front/Cancellation';
$route['privacy-policy'] = 'front/Privacypolicy';
$route['terms'] = 'front/Terms';
$route['contact'] = 'front/Contact';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
