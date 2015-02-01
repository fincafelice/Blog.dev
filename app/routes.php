<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function() // default route
// {
// 	return 'Hello Codeup!';
// 	// return View::make('hello');
// });

Route::get('/', 'HomeController@showWelcome');

Route::get('parks', function() {
	// return '<h1>National Parks</h1>';
	return View::make('parks'); // parks.php
});
// post does wht?????
Route::post('parks', function() {
	return 'Which will you see??!!!';
});

Route::get('say-hello/{name}', function($name) {
	// return "Hello $name!";
	return View::make('sayhello')->with('name', $name); // sayhello.php
});

// Route::get('say-hello/{urlName}', function($argName) {
// 	// return "Hello $name!";
// 	return View::make('sayhello')->with('viewName', $argName); // sayhello.php uses $viewName
// });

Route::get('rolldice/{guess}', function($guess) {
	$computer = rand (1, 6);
	return View::make('roll-dice')->with('guess', $guess)->with('computer', $computer);
});

Route::get('resume', 'HomeController@resume'); 

Route::get('portfolio', 'HomeController@portfolio'); 


Route::resource('posts', 'PostsController'); // handles seven routes REST/CRUD

Route::get('whackamole', function() {
	return View::make('whackamole');
});
