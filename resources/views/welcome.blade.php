<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Laravel</title>

		<!-- CSS -->
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

		
	</head>
	<body>
		<div class="flex-center position-ref full-height">
			@if (Route::has('login'))
				<div class="top-right links">
					@if (Auth::check())
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ url('/login') }}">Login</a>
						<a href="{{ url('/register') }}">Register</a>
					@endif
				</div>
			@endif
			
			<div class="container">
				<div class="jumbotron">
					<h1>Ask A Question</h1>
					<p>Ask any question you want about laravel and we will get answers for you!</p>
					<p>
						<a href="#" class="btn btn-primary btn-lg">Ask Now!</a>
					</p>
				</div>
				<h2>Recent Questions</h2>
			</div>

		</div>
	</body>
</html>
