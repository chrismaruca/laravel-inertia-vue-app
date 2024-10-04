<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register (Request $request) {
        sleep(1);

        // Validate
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'max:255'],
        ]);
        
        // Register
        $user = User::create($fields);
        
        // Login
        Auth::login($user);

        // Redirect
        return redirect()->route('home');
    }
}
