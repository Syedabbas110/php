<?php

use App\Core\App;


App::bind('config', require 'config.php');

App::bind('database', new QueryBuilder(
	Connection::make(App::get('config')['database'])
));

function view($name, $data = []) {
	extract($data);
	
	return require "app/views/{$name}.view.php";
}

// die(var_dump(App::get('config')));



// $app = [];

// $app['config'] = require 'config.php';

// // require 'core/Router.php';
// // require 'core/Request.php';
// // require 'core/database/Connection.php';
// // require 'core/database/QueryBuilder.php';
// // require 'Task.php';

// // var_dump($app);

// $app['database'] =  new QueryBuilder(
// 	Connection::make($app['config']['database'])
// );