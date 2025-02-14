<?php

use lib\Route;

Route::get('/', function(){
	return [
		'title' => 'Home',
		'content' => 'Hola desde la página principal'
	];
});

Route::get('/contact', function(){
	return 'Hola desde la página contact';
});

Route::get('/about', function(){
	return 'Hola desde la página about';
});

Route::get('/courses/:slug', function($slug){
	return 'El curso es: ' . $slug;
});

Route::dispatch();
