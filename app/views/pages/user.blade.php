@extends('layouts.main')

@section('content')

	<div class="container">
	@if( Auth::check() )
		<div class="alert alert-success" role="alert">Bienvenido: <strong>{{ Auth::user()->username }}</strong></div>
	@else
		<div class="alert alert-danger" role="alert"><strong>Error:</strong> favro de inciar sesión</div>
	@endif	
	</div>
		
@stop