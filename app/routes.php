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

Route::get('/', function()
{
	$page = 'Inicio';
	return View::make('pages.home', compact('page'));
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