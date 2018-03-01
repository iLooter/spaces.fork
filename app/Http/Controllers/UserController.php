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

    public function profile(int $id)
    {
        //if it's user current profile

        if(Auth::id() == $id) {

            return view('user.mysite')/*->with(compact('user'))*/;
        }

        //if user saw another profile
        $user = User::find($id);

        //if user don't find
        if(!$user) {
            return redirect()->route('home');
        }

        return view('user.profile.index')->with(compact('user'));
    }

    public function worksheet(int $id)
    {
        if(Auth::id() == $id) {

            $user = Auth::user();
            return view('user.profile.worksheet')->with(compact('user'));
        }

        //if user saw another profile
        $user = User::find($id);

        //if user don't find
        if(!$user) {
            return redirect()->route('home');
        }

        return view('user.profile.worksheet')->with(compact('user'));
    }




}
