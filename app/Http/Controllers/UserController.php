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

    /*public function changeLogin(Request $request)
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

                if( ! isset(Auth::user()->login) ) {
                    Auth::user()->login = $request->get('login');
                    Auth::user()->save();
                    $message = "Your Login has been succesfully set to $request->get('login')";
                } else {
                    redirect()->route('change_login')->withErrors(['You already set login'])->withInput();
                }

            }

        }

        return view('user.settings.change_login', compact('message'));

    }*/

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
