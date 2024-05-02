<?php

$person = [
	'age' => 31,
	'hair' => 'brown',
	'career' => 'web Dev'
];

$person['hobby'] = 'Basketball'; // push in array

// push in non-associative array

$animal = ['tiger', 'lion'];

$animal[] = 'elephant';

// die(var_dump($person));
// var_dump print all the val of person
// die ends the program in the middle

unset($person['hobby']); // pop in array

require 'test2.view.php';

