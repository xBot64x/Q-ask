<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function updateEmailPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
        ]);

        $user = User::find(Auth::id());

        $user->update([
            'email' => $request->email,
        ]);

        return back()->with('success', 'Email byl změněn.');
    }

    public function updatePasswordPost(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['Současné heslo není správné.'],
            ]);
        }

        $user = User::find(Auth::id());
        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Heslo bylo úspěšně změněno.');
    }

    public function updateUsernamePost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:users',
        ]);

        $user = User::find(Auth::id());

        $user->update([
            'name' => $request->name,
        ]);

        return back()->with('success', 'Uživatelské jméno bylo změněno.');
    }

    public function destroyPost(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
        ]);

        if (!Hash::check($request->current_password, Auth::user()->password)) {
            throw ValidationException::withMessages([
                'current_password' => ['Zadané heslo není správné.'],
            ]);
        }

        Auth::user()->delete();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('show.register')->with('success', 'Účet byl úspěšně smazán.');
    }

    public function updateAvatarPost(Request $request){
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,jpg,png,bmp|max:5000',
        ]);

        $avatarUploaded = request()->file('avatar');
        $avatarName = time() . '.' . $avatarUploaded->getClientOriginalExtension();
        $avatarPath = public_path('/avatars/');
        $avatarUploaded->move($avatarPath, $avatarName);

        $user = User::find(Auth::id());
        $user->update([
            'avatar' => '/avatars/' . $avatarName,
        ]);

        return back()->with('success', 'Profilový obrázek byl úspěšně změněn.');
    }
}
