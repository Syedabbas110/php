<?php

namespace App\Controllers;

class PageController {
	public function home() {
		
		// var_dump($users);
		return view('test6');
	}

	public function about(){
		$company = 'google';
		return view('about', compact('company'));
		
	}


	public function contact(){
		$company = 'google';
		return view('contact', compact('company'));
	}
}