<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
     // method for showing the login page on login.blade.php
    public function showLoginForm()
    {
        // check if user is already logged in
        if (session()->has('user')) {
            return view('admin.index'); // 

        }
        return view('login');
    }

    // method for handling login input
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|exists:users,email', // checks if email exists in users table
            'password' => 'required', // don't need min lenth. it already exists.
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!password_verify($validated['password'], $user->password)) {
            return back()->withErrors(['password' => 'The provided password is incorrect.'])->withInput();
        }

        session(['user' => $user]); // handle sessions using Laravel instead of native PHP
        Auth::login($user); // authenticate user so we can use @auth in blade files

        // redirect to the admin panel
        return redirect()->route('admin.index');

    }

    public function logout()
    {
        session()->flush(); // clear all session data.
        Auth::logout(); // unauthenticate user. blade will know see them as @guest
        
        // return view('login'); // this doesn't change the url. Only shows the template.
        return redirect()->route('user.showLoginForm'); // redirect to login route itself

    }
}
