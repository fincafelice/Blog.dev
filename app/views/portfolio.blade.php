@extends('layouts.master')

@section('content')
    <h1>Hello, Portfolio!</h1>

    <ul>
    	<li>HTML</li>
     	<li>CSS</li>   	
    </ul>
    <a href="{{{ action('HomeController@portfolio') }}}">Click to view portfolio.</a>
@stop