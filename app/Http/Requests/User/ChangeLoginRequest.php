<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;


class ChangeLoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user()->can('change-login', $this->user())) {
            return back()->with('message', 'Login has been successfully changed');
        }

    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'login' => 'required|between:5,15|unique:users,login'
        ];
    }

    public function forbiddenResponse()
    {
        return print 'hello';
    }

    protected function unauthorized()
    {
        return view('user.settings.change_login')->withErrors(['You already set login']);
    }



}
