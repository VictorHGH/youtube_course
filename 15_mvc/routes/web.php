<?php

use lib\NewRoute;
use app\Controllers\HomeController;
use app\Controllers\ContactsController;

NewRoute::get('/', [HomeController::class, 'index']);

NewRoute::get('/contacts', [ContactsController::class, 'index']);
/* Route::get('/contacts/create', [ContactsController::class, 'create']); */
NewRoute::get('/contacts/:id', [ContactsController::class, 'show']);
/* Route::get('/contacts/:id/edit', [ContactsController::class, 'edit']); */
/* Route::post('/contacts', [ContactsController::class, 'store']); */
/* Route::post('/contacts/:id', [ContactsController::class, 'update']); */
/* Route::post('/contacts/:id/delete', [ContactsController::class, 'destroy']); */

NewRoute::dispatch();
