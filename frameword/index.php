<?php

require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core\{Router, Request};


// $users = App::get('database')->selectAll('users');
// var_dump($users);


// $uri = trim($_SERVER['REQUEST_URI'], '/'); // get the uri of the web address
// var_dump($uri);
// var_dump($router->direct($uri));

// require $router->direct($uri);

Router::load('app/routes.php')->direct(Request::uri(), Request::method());