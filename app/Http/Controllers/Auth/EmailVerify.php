<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class EmailVerify extends Controller
{
    public function showPrompt()
    {
        return view('auth.email.prompt');
    }

    public function sendNotification(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verificationLinkSent');
    }

    public function check(EmailVerificationRequest $request)
    {
        if (! $request->user()->hasVerifiedEmail()) {
            $request->fulfill();
        }
        
        return redirect()->intended(route('cars.index'));
    }
}
