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



}
