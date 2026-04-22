<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('movies', MoviesController::class);

//Rotas para ingressos
Route::get('/tickets', [TicketsController::class, 'index'])->name('tickets.index');
Route::post('/tickets', [TicketsController::class, 'store'])->name('tickets.store');
Route::get('/tickets/{movie_id}', [TicketsController::class, 'create'])->name('tickets.create');


//Rotas de usuario
Route::resource('users', UserController::class);
 
//Refaça as rotas de ingresso e a controller de ingresso.