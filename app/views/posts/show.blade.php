@extends('layouts.master')

@section('content')
	<ul>
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->author->email }}}</p>
		<p>{{{ $post->body }}}</p>
		<p>{{{ $post->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
		@if (Auth::check())
			{{ Form::open(array('action'=>array('PostsController@destroy', $post->id),'method'=>'delete')) }}		
			<a class="btn btn-success" href ="{{{ action('PostsController@edit', $post->id) }}}">Edit Post</a>
			{{ Form::submit('Delete Post', array('class' => 'btn btn-danger')) }}			
		
 			{{ Form::close() }}
		@endif
		<a class="btn btn-info" href ="{{{ action('PostsController@index') }}}">Back to Main Page</a>
	</ul>	

@stop {{-- This is to view one particular post by request. --}}

