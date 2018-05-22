<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

/*Requests*/
use App\Http\Requests\User\UpdateWorksheetMainInfoRequest;

class WorksheetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function index()
    {
        $user = Auth::user();
        return view('user.worksheet.index')->with(compact('user'));
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

    public function updateMainInfo(UpdateWorksheetMainInfoRequest $request)
    {

        if($request->isMethod('POST'))
        {
            /*$birthday = NULL;
            try {
                $birthday = Carbon::create($request->year, $request->month, $request->day)->format('Y-m-d');
            } catch (InvalidArgumentException $err) {
                dd($birthday);
                redirect()->route('worksheet.main_info')->withErrors('birthday', $err->getMessage());
            }*/

            Auth::user()->first_name = $request->first_name;
            Auth::user()->last_name= $request->last_name;
            Auth::user()->gender = $request->gender;
            Auth::user()->marital_status = $request->marital_status;
            Auth::user()->profession = $request->profession;
           // Auth::user()->birthday = $birthday;
            Auth::user()->save();

            return redirect()->route('worksheet.index')->with('system-message-info', 'Изменения сохранены');
        }

        return view('user.worksheet.main_info');
    }


}
