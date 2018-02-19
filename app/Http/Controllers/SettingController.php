<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');

    }
    //
    public function index()
    {
        return view('user.settings.index');
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
                redirect()->route('settings.change_login')->withErrors($validator)->withInput();
            } else {

                if( ! isset(Auth::user()->login) ) {
                    Auth::user()->login = $request->get('login');
                    Auth::user()->save();
                    $message = "Your Login has been succesfully set to $request->get('login')";
                } else {
                    redirect()->route('settings.change_login')->withErrors(['You already set login'])->withInput();
                }

            }

        }

        return view('user.settings.change_login', compact('message'));

    }

    public function showChangePasswordForm()
    {
        return view('user.settings.change_password');
    }

    public function changePassword(Request $request)
    {

        $status = "";

        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|between:6,16|confirmed'
        ]);


        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->withErrors(["Your current password does not matches with the password you provided. Please try again."]);
        }

        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            //Current password and new password are same
            return redirect()->back()->withErrors(["New Password cannot be same as your current password. Please choose a different password."]);
        }


        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        $status = "Your password successfully changed";

        return redirect()->back()->with(compact('status'))->withErrors($validator);
    }
}
