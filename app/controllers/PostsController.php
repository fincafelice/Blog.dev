<?php

class PostsController extends BaseController {
	public function __construct() // use filters in all controllers
	{
		parent::__construct();
    	$this->beforeFilter('auth', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Post::with('author');

	
		if (Input::has('search')) {
			$search = Input::get('search');

			$query->Where('title', 'like', '%' . $search . '%');

			$query->orwhereHas('author', function($q) {
				$search = Input::get('search');

				$q->where('email', 'like', '%' . $search . '%');
			});
		}

		$posts = $query->orderBy('created_at', 'asc')->paginate(2);
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
		return $this->savePost($post);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		try {
			$post = new Post();
			$post->user_id = Auth::id();
		} catch (Exception $e) {
			Log::warning("User requested a post that does not exist.", array('id' => $id));
			App::abort(404);
		}
		
		return $this->savePost($post);	
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		return $this->savePost($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try {
			$post = Post::findOrFail($id);
		} catch (Exception $e) {
			Log::warning('User requested a post that does not exist.');
			App::abort(404);
		}

		$post->delete();

		Session::flash('successMessage', 'Post deleted!');

		return Redirect::action('PostsController@index');
	}




	protected function savePost($post) 
	{
		$validator = Validator::make(Input::all(), Post::$rules);

		if ($validator->fails()) {
			Session::flash('errorMessage', 'Failed to save the post!');
			return Redirect::back()->withInput()->withErrors($validator);
		} else {
			Session::flash('successMessage', 'Your post was saved!');						
			$post->title = Input::get('title');
			$post->body  = Input::get('body');
			$post->save();

			if (Input::hasFile('image')) {
				$post->uploadFile(Input::file('image'));
			}

			return Redirect::action('PostsController@show', $post->id);
		}
	}

}
