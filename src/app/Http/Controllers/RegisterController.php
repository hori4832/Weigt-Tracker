<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth\RegisterController;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required']
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('about');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.'
    ]);
}
}
