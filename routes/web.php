<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/users', function () {
    return view('users');
});

Route::get('/saved', function () {
    return view('saved');
});

Route::get('/tags', function () {
    return view('tags');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/question', function () {
    return view('question');
});

Route::get('/tag', function () {
    return view('tag');
});

Route::get('/ask', function () {
    return view('ask');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::resource('posts', PostController::class);

Route::get('/register', [AuthController::class, 'showRegister'])->name('show.register');
Route::get('/login', [AuthController::class, 'showLogin'])->name('show.login');
