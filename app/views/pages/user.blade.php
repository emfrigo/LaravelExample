@extends('layouts.main')

@section('content')

	@if(isset($username))
		<div class="alert alert-success" role="alert">Bienvenido: <strong>{{ $username }}</strong></div>

	@else
		<div class="alert alert-danger" role="alert"><strong>ERROR: </strong>No a iniciado sesion.</div>
	@endif

@stop