<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (auth()->attempt($attributes)) {
            request()->session()->regenerate();

            return redirect('/')->with('message', 'Welcome Back!');
        }

        return back()->with('message', 'The provided credentials do not match our records.');
    }
}
