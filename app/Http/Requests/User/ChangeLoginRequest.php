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
        return true;

    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'login' => 'required|between:5,15|unique:users,login'
        ];
    }




}
