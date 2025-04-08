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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'homecontroller/';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['home'] = 'homecontroller/index/';
$route['about'] = 'homecontroller/about/';
$route['agent-details'] = 'homecontroller/Agent_details';
$route['agent-grid-view'] = 'homecontroller/Agent_grid_view/';
$route['blog-details'] = 'homecontroller/Blog_details/';
$route['blog-grid-v4'] = 'homecontroller/Blog_grid_v4/';
$route['blog-single-v1'] = 'homecontroller/Blog_single_v1/';
$route['career'] = 'homecontroller/Career/';
$route['contact'] = 'homecontroller/Contact/';
$route['error'] = 'homecontroller/Error/';
$route['faq'] = 'homecontroller/Faq/';
$route['our-services'] = 'homecontroller/Our_services/';
$route['photo-gallery-v5'] = 'homecontroller/Photo_gallery_v5/';
$route['property-grid-v1'] = 'homecontroller/Property_grid_v1/';
$route['property-single-v1'] = 'homecontroller/property_single_v1/';
$route['terms-and-condition'] = 'homecontroller/Term_and_condition/';



// it is admin routing



$route['index'] = 'AdminController/index/';
// $route['blank'] = 'AdminController/blank/';
$route['service'] = 'ServiceController/index';
$route['admin-about'] = 'AboutController/index';
$route['admin-about2'] = 'AboutController/second_section';
$route['admin-about3'] = 'AboutController/third_section';
$route['admin-about4'] = 'AboutController/forth_section';
$route['admin-about5'] = 'AboutController/five_section';
$route['admin-about6'] = 'AboutController/six_section';
$route['admin-about7'] = 'AboutController/seven_section';
$route['admin-about8'] = 'AboutController/eight_section';



$route['login'] = 'LogController/index';




