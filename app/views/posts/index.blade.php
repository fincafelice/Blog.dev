@extends('layouts.master')

@section('content')
	<ul>
		@foreach ($posts as $post) 
			<h3><a href ="{{{ action('PostsController@show', $post->id) }}}">{{{ $post->title }}}</a></h3>
			<p>{{{ $post->body }}}</p>
			<p>{{{ $post->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
		@endforeach
	</ul>

<!-- pager -->
{{ $posts->appends(array('search'=>Input::get('search')))->links() }}

@stop