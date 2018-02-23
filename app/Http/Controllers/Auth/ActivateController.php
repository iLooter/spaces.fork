<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Models\Activation;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Mail;
use App\Mail\EmailVerification;


class ActivateController extends Controller
{
    public function resend()
    {
        return view('layouts.email');
    }

    public function confirm(string $token)
    {
        $email = Auth::user()->email;

        $result = Mail::to($email)
            ->send(new EmailVerification);

    }

    public function send()
    {
        //if registered


        //if change email
        $email_token = (new Activation)->generateToken();



        $result = Mail::to(Auth::user())
                    ->send(new EmailVerification);

        if($result) {
            return redirect()->route('home')->with('status', 'Email is send');
        }

        
    }
}
