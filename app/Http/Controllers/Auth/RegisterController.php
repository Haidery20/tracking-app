<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Anhskohbo\NoCaptcha\NoCaptcha;

class RegisterController extends Controller
{
    protected $noCaptcha;

    public function __construct(NoCaptcha $noCaptcha)
    {
        $this->noCaptcha = $noCaptcha;
    }

    public function show()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Verify reCAPTCHA
        if (!$this->noCaptcha->verify($request->g-recaptcha-response)) {
            return redirect()->back()->withErrors(['g-recaptcha-response' => 'Please verify that you are not a robot.']);
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Assign user role
        $userRole = Role::where('name', 'user')->first();
        if ($userRole) {
            $user->roles()->attach($userRole);
        }

        // Log in the user
        Auth::login($user);

        return redirect()->route('dashboard')->with('success', 'Registration successful!');
    }
}
