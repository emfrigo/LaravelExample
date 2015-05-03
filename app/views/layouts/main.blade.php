<!DOCTYPE html>
<html>
	<head>
		<title> {{ $page }} | Example App</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
	</head>
	<body>	
		<!-- Navigation Bar Structure -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			<!-- Project Name Link -->
				<div class="navbar-header">
					<a href="#" class="navbar-brand">Example App</a>
				</div>
			<!-- EOF Project Name Link -->
				<!-- Navbar Links -->
				<div class="container-fluid">
					<ul class="nav navbar-nav">
        				<li><a href="{{asset('/')}}">Home</a></li>
        				<li><a href="{{asset('/about')}}">About</a></li>
        				<li><a href="{{asset('/contact')}}">Contact</a></li>
        			</ul>
        			<ul class="nav navbar-nav navbar-right">
        				<li><a href="{{asset('#')}}"><span class="glyphicon glyphicon-user"></span>User</a></li>
        			</ul>
        		</div>
        		<!-- EOF Navbar Links-->
			</div>
		</nav>
		@section('content')
	</body>
</html>