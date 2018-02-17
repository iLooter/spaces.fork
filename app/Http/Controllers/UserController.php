<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use Validator;
use App\Models\User;

class UserController extends Controller
{

    protected $currentUser;

    public function __construct()
    {
        $this->middleware('auth');

        //get model of auth user https://laravel.com/docs/5.3/upgrade#5.3-session-in-constructors
        $this->middleware(function ($request, $next) {
            $this->currentUser = User::find(Auth::id());

            return $next($request);
        });


    }

    public function index()
    {
        if (Auth::check()) {
            return redirect()->to('/startpage/' . Auth::user()->name);
        }
        return redirect()->to('/login');
    }

    public function startpage()
    {
        return view('user.start_page');
    }

    public function changeLogin(Request $request)
    {
        $message = NULL;

        if ($request->isMethod('POST')) {
            $validator = Validator::make($request->all(), [
                'login' => 'required|between:5,15|unique:users,login'
            ]);

            //redirect if fails
            if ($validator->fails()) {
                redirect()->route('change_login')->withErrors($validator)->withInput();
            } else {

                if( ! isset($this->currentUser->login) ) {
                    $this->currentUser->login = $request->get('login');
                    $this->currentUser->save();
                    $message = "Your Login has been succesfully set to $request->get('login')";
                } else {
                    redirect()->route('change_login')->withErrors(['You already set login'])->withInput();
                }

            }

        }

        return view('user.settings.change_login', compact('message'));

    }

    /**
     * Change the user's password.
     *
     * @param  Request $request
     * @return Redirect
     */
    public function changePassword(Request $request)
    {
       echo 'authenticate';
    }
}
