<?php

class Task {
	public $id;
	public $description;
	public $completed = false;

	public function foobar() {
		return 'foobar';
	}

	// public function __construct($description) {
	// 	$this->description = $description;
	// }

	// public function complete() {
	// 	if(!$this->completed) $this->completed = true;
	// }

	// public function isComplete() {
	// 	return $this->completed;
	// }

	// public function getDescription() {
	// 	return $this->description;
	// }
};