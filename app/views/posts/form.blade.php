<div class="form-group">
	{{ Form::label('title', 'Post Title') }}<br>
	{{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
	{{ $errors->first('title', '<p class-"help-block">:message</p>') }}
</div>

<div>
	{{ Form::label('body', 'Post Body') }}<br>
	{{ Form::textarea('body', Input::old('body'), array('class' => 'form-control', 'rows' => '8', 'cols' => '50')) }}
	{{ $errors->first('body', '<p class-"help-block">:message</p>') }}
</div>