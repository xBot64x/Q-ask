<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/saved', function () {
    return view('saved');
})->name('saved');

Route::get('/tags', function () {
    return view('tags');
})->name('tags');

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

Route::resource('posts', PostController::class);


Route::get('/login', [AuthController::class, "login"])->name('show.login');
Route::post('/login', [AuthController::class, "loginPost"])->name('login.post');

Route::get('/register', [AuthController::class, "register"])->name('show.register');
Route::post('/register', [AuthController::class, "registerPost"])->name('register.post');

Route::post('/logout', [AuthController::class, "logoutPost"])->name('logout.post');


Route::middleware('auth')->group(function () {
    Route::get('/settings', function () {
        return view('settings');
    })->name('settings');
});
