<?php

class Post {
	public $title;
	public $published;
	public $author;

	public function __construct($title, $published, $author) {
		$this->title = $title;
		$this->published = $published;
		$this->author = $author;
	}
}

$posts = [
	new Post('My first Post', 'AM', true),
	new Post('My second Post', 'AM', true),
	new Post('My third Post', 'AM', true),
	new Post('My fourth Post', 'AM', true),
	new Post('My fifth Post', 'AM', false),
];

$unpublishedPosts = array_filter($posts, function($post) {

	return !$post->published;
});


$mod = array_map(function($post) {
	// return 'foobar';
	$post->published = true;
	return $post;
}, $posts);

foreach($posts as $post) {
	$post->published = true;
}

$m =array_map(function($post) {
	return (array) $post; // obj to array
}, $posts);

$ti = array_map(function($post) {
	return $post->title;
}, $posts); // same as below

$titles = array_column($posts, 'title');
$authors = array_column($posts, 'author', 'title');

var_dump($titles);

var_dump($authors);

var_dump($ti);

var_dump($unpublishedPosts);

var_dump($mod);

var_dump($posts);

var_dump($m);