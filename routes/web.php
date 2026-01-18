<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');


// Book routes
Route::get('/new-book', function (){
        return view('new_book');
});
Route::post('/new-book', [BookController::class, 'save_book']);

// User routes
Route::get('/register', function () {
    return view('register');
});
Route::post('/register', [UserController::class, 'register']);