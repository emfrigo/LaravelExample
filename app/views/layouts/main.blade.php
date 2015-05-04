<!DOCTYPE html>
<html>
	<head>
		<title> {{ $page }} | Example App</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<!--link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'-->
	</head>
	<body>	
		<!-- Navigation Bar Structure -->
		<nav class="navbar navbar-default">
			<div class="container">
			<!-- Project Name Link -->
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Example App</a>
				</div>
			<!-- EOF Project Name Link -->
				<!-- Navbar Links -->
				<div class="container">
					<ul class="nav navbar-nav">
        				<li><a href="{{asset('/')}}">Home</a></li>
        				<li><a href="{{asset('/about')}}">About</a></li>
        				<li><a href="{{asset('/contact')}}">Contact</a></li>
        			</ul>
        			<ul class="nav navbar-nav navbar-right">
        				@if( Auth::check() )
        				<li><a href="{{asset('/user')}}"><span class="glyphicon glyphicon-user"></span>{{ Auth::user()->username }}</a></li>
        				@else
        				<li><a href="{{asset('/user')}}"><span class="glyphicon glyphicon-user"></span>User</a></li>
        				@endif
        			</ul>
        		</div>
        		<!-- EOF Navbar Links-->
			</div>
		</nav>

		@yield('content')

	<div class="container">
		<footer>
			<p class="pull-right">
				<a href="#">Back to top</a>
			</p>
			<p>
				<a href="{{'http://www.cinnamonproject.tk'}}" target="_blank">© 2015 Cinnamon Project</a> ·
				<a href="" target="_blank">Privacy</a>
				·
				<a href="#">Terms</a>
			</p>
		</footer>
		</div>
	</body>
</html>