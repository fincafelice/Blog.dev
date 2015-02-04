@extends('layouts.master')

@section('content')

<div class="page-header">Update Post</div>

{{ Form::model($post, array('action' =>array('PostsController@update', $post->id), 'method'=> 'put')) }}
	@include('posts.form')

	{{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@stop