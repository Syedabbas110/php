<?php


function connectToDb() {
	
}


function fetchAllTasks($pdo) {
	$statement = $pdo->prepare('select * from todos');

	$statement->execute();

	// $statement->setFetchMode();
	return  $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); 
}

function dd($val) {
	die(var_dump($val));
}

function age($val) {
	return ($val > 15);
}