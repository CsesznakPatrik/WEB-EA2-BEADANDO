<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();


            $user = Auth::user();
            if ($user->role && $user->role->name === 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role && $user->role->name === 'user') {
                return redirect()->route('messages.index');
            } else {
                return redirect()->route('home');
            }
        }

        return back()->withErrors([
            'username' => 'Hibás felhasználónév vagy jelszó.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
