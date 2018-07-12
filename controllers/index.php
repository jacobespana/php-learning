<?php

$tasks = $query->selectAll('todos');

require 'views/index.view.php';

// class Post
// {
// 	public $title;

// 	public $author;

// 	public $published;

// 	public function __construct($title, $author, $published)
// 	{
// 		$this->title = $title;
// 		$this->author = $author;
// 		$this->published = $published;
// 	}	
// }

// $posts = [
// 	new Post('My First Post', 'Charles Dickens', true),
// 	new Post('My Second Post', 'Jacob Espana', true),
// 	new Post('My Third Post', 'Johnny Appleseed', true),
// 	new Post('My Fourth Post', 'Abraham Lincoln', false)
// ];
// //FILTERING ARRAYS FOR PUBLISHED AND UNPUBLISHED POSTS

// // $unpublishedPosts = array_filter($posts, function($post){
// // 	return ! $post->published;
// // });

// // $publishedPosts = array_filter($posts, function($post){
// // 	return $post->published;
// // });

// // $modified = array_map(function ($post){
// // 	return ['title'=>$post->title];

// // }, $posts);

// // var_dump($modified);

// $moosh = array_column($posts, 'author', 'title');

// var_dump($moosh);

// class Task 
// {
// 	public $description;
// 	public $completed;

// 	public function __construct($description, $completed)
// 	{
// 		$this->description = $description;
// 		$this->completed = $completed;
// 	}
// }
// $tasks = [
// 	new Task('Go to the mall', false), 
// 	new Task('Go to the grocery store', true), 
// 	new Task('Go to the music store', false), 
// 	new Task('Buy the world', true)
// ];

// $modifedTasks = array_map(function($task){
// 	$task->completed = true;
// 	return $task;

// }, $tasks);

// var_dump($modifedTasks);