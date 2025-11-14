<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function showRegister()
    {
        return view('auth.registration');
    }
    public function showLogin()
    {
        return view('auth.login');
    }
}
