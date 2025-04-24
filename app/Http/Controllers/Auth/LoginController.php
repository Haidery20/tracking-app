<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            
            // Update last login time
            $user = Auth::user();
            $user->last_login_at = now();
            $user->save();

            // Check if user has any role assigned
            if (Auth::user()->roles()->exists()) {
                // If user has admin role, redirect to admin dashboard
                if (Auth::user()->hasRole('admin')) {
                    return redirect()->route('admin.dashboard');
                }
                // For other roles, redirect to regular dashboard
                return redirect()->route('dashboard');
            }
            
            // If user has no role, redirect to dashboard
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}