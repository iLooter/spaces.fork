<?php

namespace App\Http\Controllers\Worksheet;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainWorksheetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        /*$data =  [
            'rating'      => Auth::user()->rating,
            'last_user_id' => Auth::id(),
            'status'       => true
        ];*/

        return view('user.worksheet.index');
    }

    public function aboutEditForm()
    {
        return view('user.worksheet.about');
    }

    public function aboutEdit()
    {
        //some code here
        return route('/');
    }

    public function mainInfoEditForm()
    {
        return view('user.worksheet.main_info');
    }


}
