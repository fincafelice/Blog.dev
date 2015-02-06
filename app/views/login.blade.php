@extends('layouts.master')

@section('content')
<h2>Please Log In</h2>
{{ Form::open(array('action' => 'HomeController@doLogin')) }}
	<div>
		{{ Form::label('email', 'eMail Address') }}
		{{ Form::email('email', Input::old('email'), array('class'=>'form-control')) }}
	</div>

	<div>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('class'=>'form-control')) }}
	</div>
	<button type="submit">Enter</button>

{{ Form::close() }}

@stop
