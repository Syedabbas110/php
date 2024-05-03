<?php

namespace App\Core;

class Request {
	public static function uri() {
		// var_dump(trim(
		// 	parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
		// 	, '/'));
		return trim(
			parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
			, '/');
	}

	public static function method() {
		return $_SERVER['REQUEST_METHOD'];
	}
}