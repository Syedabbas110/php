<?php

namespace App\Controllers;

use App\Core\App;

class UserController {
	public function index() {
		$users = App::get('database')->selectAll('users');
		// var_dump($users);

		return view('user', compact('users'));
	}

	public function store() {
		App::get('database')->insert('users', [
			'name' => $_POST['name']
		]);

		header('Location: /frameword/index/user');
	}
}