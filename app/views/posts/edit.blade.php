@extends('layouts.master')

@section('content')

<h2>Update Post</h2>

{{ Form::model($post, array('action' =>array('PostsController@update', $post->id), 'method'=> 'put', 'files' => true)) }}
	@include('posts.form')

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop