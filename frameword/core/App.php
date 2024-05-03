<?php

namespace App\Core;

class App {

	protected static $regis = [];

	public static function bind($key, $value) {
		static::$regis[$key] = $value;
	}

	public static function get($key) {
		if(! array_key_exists($key, static::$regis)) {
			throw new Exception("No {$key} found");
		}

		return static::$regis[$key];
	}
}