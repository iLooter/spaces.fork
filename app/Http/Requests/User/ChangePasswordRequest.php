<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;


class ChangePasswordRequest extends FormRequest
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
            'current_password' => 'required|string',
            'new_password' => 'required|string|between:6,16|confirmed'
        ];
    }




}