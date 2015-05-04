@extends('layouts.main')

@section('content')
	<div class="container">
	@if (isset($msg))
		<div class="alert alert-danger" role="alert">{{ $msg }}</div>
	@endif
	<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			{{ Form::open(array('url' => '/login', 'method' => 'POST', 'class'=>'form-signin')) }} 
				<h2 class="form-signin-heading">Please Sign In</h2>
				{{ Form::label('email', 'Email Adress', array('class' => 'sr-only')) }}
				{{ Form::text('email','', array('class' 		=> 'form-control',
												'type' 			=> 'email',
												'autofocus' 	=> '',
												'placeholder' 	=> 'Correo',
												'required' 		=>	''
												)) }}
						
					{{ Form::label('password', 'Password', array('class' => 'sr-only')) }}
					{{ Form::text('password','', array( 'class' 		=> 'form-control',
														'type'			=>	'password',
														'placeholder'	=>	'Password',
														'required'		=>	''
														)) }}

							<div class="checkbox">
								<label>
									<input type="checkbox" value="remember-me">
									Remember Me
								</label>
							</div>
								<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>

			{{ Form::close() }}

			{{ Form::open(array('url' => '/register', 'method' => 'POST', 'class' => 'form-signin')) }}
				<button class="btn btn-lg btn-primary btn-block" type="submit">Registry</button>
			{{ Form::close() }}
			</div>
			<div class="col-md-4"></div>
		</div> <!-- EOF Row -->
	</div> <!-- EOF Container-->
@stop
