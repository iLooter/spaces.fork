<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        //get model of auth user https://laravel.com/docs/5.3/upgrade#5.3-session-in-constructors
        $this->middleware(function ($request, $next) {
            $this->currentUser = User::find(Auth::id());

            return $next($request);
        });
    }
    //
    public function index()
    {
        return view('user.settings.index');
    }
}
