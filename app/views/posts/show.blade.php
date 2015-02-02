@extends('layouts.master')

@section('content')
	<ul>
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->body }}}</p>
	</ul>	

@stop