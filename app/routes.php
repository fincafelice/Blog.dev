
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

Route::get('resume', 'HomeController@resume'); 

Route::get('portfolio', 'HomeController@portfolio'); 

Route::get('whackamole', 'HomeController@whackamole');

Route::resource('posts', 'PostsController'); // handles seven routes REST/CRUD

Route::get('orm-test', function ()
{
    $posts = Post::all();
	return $posts;
});

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');

	
