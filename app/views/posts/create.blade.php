@extends('layouts.master')

@section('content')    
    
{{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}

@include('posts.form')
     
<button type="submit">Add</button>

{{ Form::close() }}

@stop