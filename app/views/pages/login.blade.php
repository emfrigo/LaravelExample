@extends('layouts.main')

@section('content')
	<div class="container">
	@if (isset($msg))
		<div class="alert alert-danger" role="alert">{{ $msg }}</div>
	@endif
		{{ Form::open(array('url' => '/login', 'method' => 'POST', 'class'=>'form-signin')) }} 
			<h2 class="form-signin-heading">Please Sign In</h2>
				<label class="sr-only" for="inputEmail">Email Address</label>
					<input id="email" name="email" class="form-control" type="email" autofocus="" required="" placeholder="Email Address">
				<label class="sr-only" for="inputPassword">Password</label>
					<input id="password" name="password" class="form-control" type="password" required="" placeholder="Password">
						<div class="checkbox">
							<label>
								<input type="checkbox" value="remember-me">
								Remember Me
							</label>
						</div>
							<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
		{{ Form::close() }}
	</div> 
@stop