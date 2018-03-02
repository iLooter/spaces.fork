<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ChangeLoginRequest;
use App\Http\Requests\User\ChangePasswordRequest;
use App\Http\Requests\User\ChangeEmailRequest;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;


class MainSettingController extends Controller
{
    private const STATUS = 'success';


    public function __construct()
    {
        $this->middleware('auth');

    }
    //
    public function index()
    {
        return view('user.settings.index');
    }

    public function changeLogin(ChangeLoginRequest $request)
    {

        if($request->isMethod('POST')) {
            if ($request->user()->can('change-login')) {
                $newLogin = $request->get('login');

                session()->put(compact('newLogin'));
                //$request->user()->login = $request->get('login');
                //$request->user()->save();

                return back()
                    ->with(self::STATUS, true);
            } else {
                return view('user.settings.change_login')->withErrors(['You already set login']);
            }
        }

        $inputYes = Input::get('yes');
        $inputNo =  Input::get('no');

        //confirm change nick
        if(isset($inputYes))
        {
            Auth::user()->login = session()->get('newLogin');
            Auth::user()->save();
            session()->forget(['newLogin', 'status']);
            return redirect()->route('settings.index')->with('system-message-info', 'Ваш ник успешно изменён.');
        }
        elseif(isset($inputNo))
        {
            session()->forget(['newLogin', 'status']);
            return redirect()->route('settings.index');
        }

        return view('user.settings.change_login');

    }


    public function changePassword(ChangePasswordRequest $request)
    {
        if ($request->isMethod('POST')) {
            //Current password and new password are same
            if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
                return back()->withErrors(["New Password cannot be same as your current password. Please choose a different password."]);
            }


            $user = Auth::user();
            $user->password = bcrypt($request->get('new_password'));
            $user->save();
            $status = "Your password successfully changed";
            return redirect()->route('settings.index')->with('system-message-info', 'Пароль успешно изменен');
        }
        return view('user.settings.change_password');

    }

    public function changeEmailSettings()
    {

        return view('user.settings.email');
    }


    public function showChangeEmailForm()
    {

        return view('user.settings.change_email');
    }

    public function changeEmail(ChangeEmailRequest $request)
    {


        session()->put('status', true);

        return view('user.settings.change_email');
    }
}
