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
$route['default_controller'] = 'ViewController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['/']["GET"] = "ViewController/index";
$route['corporate']["GET"] = "ViewController/corporate";
$route['careers']["GET"] = "ViewController/careers";
$route['contact']["GET"] = "ViewController/contact";
$route['testinomial']["GET"] = "ViewController/testinomial";
$route['news']["GET"] = "ViewController/news";
$route['downloads']["GET"] = "ViewController/downloads";

$route['project/catalog/elite-villa']["GET"] = "ViewController/catelog_elite_villa";
$route['project/catalog/apartment']["GET"] = "ViewController/catelog_apartment";
$route['project/catalog/classic-villa']["GET"] = "ViewController/catelog_classic_villa";

$route['project/details/elite-villa']["GET"] = "ViewController/details_elite_villa";
$route['project/details/apartment']["GET"] = "ViewController/details_apartment";
$route['project/details/classic-villa']["GET"] = "ViewController/details_classic_villa";