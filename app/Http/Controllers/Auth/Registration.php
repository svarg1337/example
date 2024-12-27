<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class Registration extends Controller
{
    public function create()
    {
        return view('auth.registration.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:127',
            'email' => 'required|email|lowercase|max:255|string|unique:users',
            'password' => ['required', 'confirmed', Password::min(6)],
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('cars.index');
    }
}
