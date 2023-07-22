<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => ['required', 'unique:users,name'],
            'email' => ['required', 'unique:users,email'],
            'password' => ['required'],
            'password_confirmation' => ['require'],
            'terms' => ['require']
        ]);

        auth()->login(User::create($attributes));

        return redirect('/');
    }
}
