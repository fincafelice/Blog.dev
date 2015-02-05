<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function resume()
	{
		return View::make('resume');
	}

	public function portfolio()
	{
		return View::make('portfolio');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
		    return Redirect::intended('/posts');
		} else {
			Session::flash('errorMessage', 'Failed to log in!');
		    return Redirect::action('HomeController@showLogin');
		}
	}	

	public function doLogout()
	{
		Auth::logout();
		Session::flash('successMessage', 'So long and thanks for all the fish!');
		return Redirect::action('PostsController@index');
	}


}
