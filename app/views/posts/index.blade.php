@extends('layouts.master')

@section('content')
	<ul>
		@foreach ($posts as $post) 
			<h2>{{{ $post->title }}}</h2>
			<p>{{{ $post->body }}}</p>
			<p>{{{ $post->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>

		@endforeach
	</ul>

{{ $posts->links() }}

@stop