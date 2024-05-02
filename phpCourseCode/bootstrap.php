<?php

$config = require 'config.php';
require 'Connection.php';
require 'QueryBuilder.php';
// require 'Task.php';


$query = new QueryBuilder(
	Connection::make($config['database'])
);