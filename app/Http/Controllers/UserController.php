<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request) {
        $validated = $request->validate([
            'name' => ['bail', 'required', 'unique:users'],
            'email' => ['bail', 'required', 'email', 'unique:users'],
            'password' => ['bail', 'required', 'confirmed']
        ]);

        $user = User::create($validated);

        Auth::login($user);
        return redirect()->route('home')->with('success', 'Dobrodošli! Uspješno ste se registrovali u sistem.');
    }
}
