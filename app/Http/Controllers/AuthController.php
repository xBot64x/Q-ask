<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    function registerPost(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed'
        ]);

        $user = User::create($validated);
        Auth::login($user);

        return redirect()->route('home')->with('success', 'Registrace proběhla úspěšně.');
    }

    function loginPost(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $validated;
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('home'));
        }
        throw ValidationException::withMessages([
            'credentials' => ['Zadané přihlašovací údaje nejsou správné.'],
        ]);
    }

    function logoutPost(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
