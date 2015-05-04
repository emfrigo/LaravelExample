<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Ruta a la pagina principal
Route::get('/', function()
{
	$page = 'Inicio';
	return View::make('pages.home', compact(array('page')));
});

Route::get('/about', function()
{
	$page = 'About';
	return View::make('pages.about', compact('page'));
});

Route::get('/contact', function()
{
	$page = 'Contact';
	return View::make('pages.contact', compact('page'));
});

Route::get('/login', function()
	{
		$page = 'Login';
		return View::make('pages.login', compact(array('page')));
	});

Route::get('/user', ['before' => 'auth', function()
	{
		$page = 'Usuario';
		$username = Auth::user()->username;
		return View::make('pages.user', compact('page'));
	}]);

 //Example routes

//Página oculta donde sólo puede ingresar un usuario identificado
//Route::get('/hidden', ['before' => 'auth', function(){
 //   return View::make('user');
//}]);

//Procesa el formulario e identifica al usuario
Route::post('/login', 'AuthController@login');
//Desconecta al usuario
Route::get('/logout', 'AuthController@logout');