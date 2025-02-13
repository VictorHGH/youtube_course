<?php

use lib\Route;

Route::get('/', function(){
	echo 'Hola desde la página principal';
});

Route::get('/contact', function(){
	echo 'Hola desde la página contact';
});

Route::get('/about', function(){
	echo 'Hola desde la página about';
});

Route::get('/curses/:slug', function(){

});

Route::dispatch();
