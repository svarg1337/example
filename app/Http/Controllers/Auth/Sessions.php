<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Sessions\Store;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Sessions extends Controller
{
    public function create()
    {
        return view('auth.sessions.create');
    }

    public function store(Store $request): RedirectResponse
    {
        $request->tryAuthUser();
        $request->session()->regenerate();

        return redirect()->intended(route('cars.index'));
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('cars.index');
    }
}
