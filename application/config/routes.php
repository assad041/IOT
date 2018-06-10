<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'post/view';
$route['post'] = 'post/view';
$route['pages'] = 'pages/view';
$route['pages/(:any)'] = 'pages/view/$1';
$route['post/(:any)'] = 'post/view/$1';
$route['(:any)'] = 'post/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
