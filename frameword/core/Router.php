<?php

namespace App\Core;

class Router {
	public $routes = [
		'GET' => [],
		'POST' => []	
	];

	public static function load($file) {
		$router = new static;

		require $file;

		return $router;
		 // not $this
	}

	public function get($uri, $controller) {
		$this->routes['GET'][$uri] = $controller;
	}

	public function post($uri, $controller) {
		$this->routes['POST'][$uri] = $controller;
	}

	public function direct($uri, $requestType) {
		// var_dump($this->routes[$requestType]);
		if(array_key_exists($uri, $this->routes[$requestType])) {
			// var_dump($this->routes[$requestType][$uri]);

			// var_dump('yes');
			// return $this->routes[$requestType][$uri];
			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);
		} 
		throw new Exception('No Routes defined');
	}

	protected function callAction($controller, $action) {
		$controller = "App\\Controllers\\{$controller}";
		$controller = new $controller;
		
		if(!method_exists($controller, $action)) {
			throw new Exception("{$controller} no {$action}"
			);
		}
		return $controller->$action();
	}

}