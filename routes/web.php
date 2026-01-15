<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


// Book routes
Route::get('/new-book', [BookController::class, 'new_book']);
Route::post('/new-book', [BookController::class, 'save_book']);

// User routes
Route::get('/register', function () {
    return view('register');
});