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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'Home';
$route['aboutus'] = 'Home/aboutus';
$route['merchant_account'] = 'Home/merchant_account';
$route['merchant_add_offer'] = 'Home/merchant_add_offer';
$route['merchant_add_coupon'] = 'Home/merchant_add_coupon';
$route['merchant_register'] = 'Home/merchant_register';
$route['user_change_password'] = 'Home/user_change_password';
$route['user_profile'] = 'Home/user_profile';
$route['contact_us'] = 'Home/contact_us';
$route['privacy_policy'] = 'Home/privacy_policy';
$route['disclaimer'] = 'Home/disclaimer';
$route['user_coupons'] = 'Home/user_coupons';
$route['category/(:any)'] = 'Home/category/$1';
$route['subcategory/(:any)'] = 'Home/subcategory/$1';
$route['advertise'] = 'Home/advertise';
$route['listoffers'] = 'Home/listoffers';
$route['search'] = 'Home/search';
$route['media'] = 'Home/media';
$route['merchant_settings'] = 'Home/merchant_settings';
$route['faq'] = 'Home/faq';
$route['deal/(:any)'] = "Home/deal/$1";
$route['testimonials'] = 'Home/testimonials';
$route['merchant_offers_added'] = 'Home/merchant_offers_added';
$route['users_with_coupons'] = 'Home/users_with_coupons';
$route['merchant_coupons_issued'] = 'Home/merchant_coupons_issued';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
