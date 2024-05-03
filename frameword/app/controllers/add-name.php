<?php

// var_dump('Name:' . $_POST['name']);

// class NameController {
// 	public function addName() {

// 	}
// }

App::get('database')->insert('users', [
	'name' => $_POST['name']
]);

header('Location: /frameword/index');