<?php

namespace App\Http\Controllers\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\ChangeLoginRequest;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class MainSettingController extends Controller
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

    public function changeLogin(ChangeLoginRequest $request)
    {

        $request->user()->login = $request->get('login');
        $request->user()->save();
        return back()->with('message', 'Login has been successfully changed');
    }

    public function changeLoginForm(Request $request)
    {
        $message = NULL;

        return view('user.settings.change_login', compact('message'));

    }

    public function showChangePasswordForm()
    {
        return view('user.settings.change_password');
    }

    public function changePassword(Request $request)
    {


        $validator = Validator::make($request->all(), [
            'current_password' => 'required|string',
            'new_password' => 'required|string|between:6,16|confirmed'
        ]);


        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return back()->withErrors(["Your current password does not matches with the password you provided. Please try again."]);
        }

        if (strcmp($request->get('current_password'), $request->get('new_password')) == 0) {
            //Current password and new password are same
            return back()->withErrors(["New Password cannot be same as your current password. Please choose a different password."]);
        }


        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->save();
        $status = "Your password successfully changed";

        return back()->with(compact('status'))->withErrors($validator);
    }

    public function showEmailSettingsPage()
    {
        // Hide half Email Characters.
        //!!!!!!!!
        //!!!!!!!
        //Вынести этот код в отдельный класс: ViewsControllerHelper или как-то так. Чтобы избежать ТТУК и обеспечить Single Responsibility
        //https://habrahabr.ru/post/321050/ Контроллер должен заниматься делегированием команд
        //На выходе будет поулчаться только return hideEmail: string и передаваться в представление
        $atIndex = strpos(Auth::user()->email, '@');
        $atIndex /= 2;
        $currentEmail = str_repeat("*", $atIndex) . substr(Auth::user()->email, $atIndex);

        return view('user.settings.email')->with(compact('currentEmail'));
    }

    public function changeEmailSettings()
    {

    }

    public function showChangeEmailForm()
    {
        return view('user.settings.change_email');
    }

    public function changeEmail(Request $request)
    {


        if ($request->isMethod('POST')) {

            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|max:255|unique:users',
            ]);

            //redirect if fails
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            } else {
                //CODE
                //SEND
                //EMAIL CONFRIMATION if ok

                session()->put('status', true);

            }

        }

        return view('user.settings.change_email');
    }
}
