<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/questions', function () {
    return view('questions');
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

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});
