@extends('layouts.master')

@section('content')    
	<form method="POST" action="{{{ action('PostsController@store') }}}">  
    
    <p>
    <label for="title">Blog Title</label>
    <input id="title" name="title" type="text" value="{{{ Input::old('title') }}}" placeholder = "Enter title!">
    {{ $errors->first('title', '<span class="help-block">:message</span>') }}
	</p>
    
    <p>
    <label for="body">Blog Body</label><br>
    <textarea id="body" name="body" rows="10" cols="50" placeholder = "Enter your content!">{{{ Input::old('body') }}}</textarea>
    {{ $errors->first('body', '<span class="help-block">:message</span>') }}
	</p>
           
    <button type="submit">Add</button>
    <!-- <input type="submit"> -->
    </form>

@stop