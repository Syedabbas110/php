<?php

require 'bootstrap.php';

require 'Task.php';
// // require 'functions.php';
// require 'Connection.php';
// require 'QueryBuilder.php';


// $pdo = connectToDb();
// $pdo = Connection::make();
// var_dump($pdo);

// $statement->setFetchMode();
// $tasks = fetchAllTasks($pdo); 

// $query = new QueryBuilder($pdo);
// var_dump($query);
$tasks = $query->selectAll('todos');

// // for the statement get all the results and store them in the form of Object
var_dump($tasks);

 
// // var_dump($results[0]->description);
// // var_dump($statement->fetchAll());

require 'test6.view.php';