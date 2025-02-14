<?php

use lib\Route;
use app\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

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
