<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
	<ul>
		@include ('partials.navbar')
		@if (Session::has('successMessage'))
	   		{{{ Session::get('successMessage') }}}
		@endif
		@if (Session::has('errorMessage')) 
			{{{ Session::get('errorMessage') }}}
		@endif

	    @yield('content')
	</ul>
</body>
</html>