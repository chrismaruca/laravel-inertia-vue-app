<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return Inertia::render('Home');
// })->name('home');

Route::inertia('/', 'Home')->name('home');
Route::inertia('/register', 'Auth/Register')->name('register');

Route::post('/register', [AuthController::class, 'register']);

// Route::inertia('/about', 'About', ['test' => 'testtest'])->name('about');
