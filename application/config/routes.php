<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['askaquestion'] = 'askaquestion/index' ;

$route['articles/create'] = 'articles/create';
$route['articles/update'] = 'articles/update';
$route['articles/(:any)'] = 'articles/view/$1' ;
$route['articles'] = 'articles/index';

$route['polls/(:any)'] = 'polls/index' ;


$route['default_controller'] = 'pages/view';

$route['categories'] = 'categories/index';
$route['categories/create'] = 'categories/create';
$route['categories/posts/(:any)'] = 'categories/posts/$1';


$route['(:any)'] = 'pages/view/$1' ;
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
