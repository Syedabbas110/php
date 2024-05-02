<?php

//Todo 


// Todo, Comment, 

class Task {
	public $description;
	protected $completed = false;

	public function __construct($description) {
		$this->description = $description;
	}

	public function complete() {
		if(!$this->completed) $this->completed = true;
	}

	public function isComplete() {
		return $this->completed;
	}

	public function getDescription() {
		return $this->description;
	}
};

$task = new Task('Go to the store');

var_dump($task);

$task->complete();

var_dump($task->isComplete()); // use -> as u used 'new' keyword


$tasks = [
	new Task('Go to store'),
	new Task('Go to store'),
	new Task('Go to store')
];

var_dump($tasks);

$tasks[0]->complete();

require 'test5.view.php';