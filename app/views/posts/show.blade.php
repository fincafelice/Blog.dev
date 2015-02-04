@extends('layouts.master')

@section('content')
	<ul>
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->body }}}</p>
		<p>{{{ $post->created_at->setTimezone('America/Chicago')->diffForHumans() }}}</p>
	</ul>	

@stop {{-- This is to view one particular post by request. --}}

