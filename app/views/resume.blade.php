@extends('layouts.master')

@section('content')
    <h1>Hello, Resume!</h1>

    <ul>
    	<li>HTML</li>
     	<li>CSS</li>   	
    </ul>

    <a href="{{{ action('HomeController@resume') }}}">Click to view resume.</a>

@stop