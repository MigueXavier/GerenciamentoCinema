<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('movies', 'App\Http\Controllers\MoviesController');

Route::get('/movies', [App\Http\Controllers\MoviesController::class, 'index'])->name('movies.index');
Route::get('/movies/create', [App\Http\Controllers\MoviesController::class, 'create'])->name('movies.create');
Route::post('/movies', [App\Http\Controllers\MoviesController::class, 'store'])->name('movies.store');
Route::get('/movies/{id}', [App\Http\Controllers\MoviesController::class, 'show'])->name('movies.show');
Route::delete('/movies/{id}', [App\Http\Controllers\MoviesController::class, 'destroy'])->name('movies.destroy');