<?php

// $router->define([
// 	'frameword/index' => 'controllers/test6.php',
// 	'frameword/index/about' => 'controllers/about.php',
// 	'frameword/index/about/culture' => 'controllers/about-culture.php',
// 	'frameword/index/contact' => 'controllers/contact.php',
// 	'frameword/index/names' => 'controllers/add-name.php'
// ]);

$router->get('frameword/index', 'PageController@home');
$router->get('frameword/index/about', 'PageController@about');
$router->get('frameword/index/contact', 'PageController@contact');

$router->get('frameword/index/user', 'UserController@index');
$router->post('frameword/index/user', 'UserController@store');
// $router->post('frameword/index/names', 'controllers/add-name.php');

// var_dump($router->routes);