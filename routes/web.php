<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;

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

Route::post('/email', [ProfileController::class, "updateEmailPost"])->name('updateEmail.post');
Route::post('/password', [ProfileController::class, "updatePasswordPost"])->name('updatePassword.post');
Route::post('/username', [ProfileController::class, "updateUsernamePost"])->name('updateUsername.post');
Route::post('/avatar', [ProfileController::class, "updateAvatarPost"])->name('updateAvatar.post');
Route::post('/destroy', [ProfileController::class, "destroyPost"])->name('destroy.post');


Route::middleware('auth')->group(function () {
    Route::get('/settings', function () {
        return view('settings.email');
    })->name('settings');
    Route::get('/settings/email', function () {
        return view('settings.email');
    })->name('email');
    Route::get('/settings/password', function () {
        return view('settings.password');
    })->name('password');
    Route::get('/settings/username', function () {
        return view('settings.username');
    })->name('username');
    Route::get('/settings/remove', function () {
        return view('settings.remove');
    })->name('remove');
    Route::get('/settings/profile-picture', function () {
        return view('settings.profile_picture');
    })->name('profile_picture');
});
