<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use App\Validation\PasscheckRule;

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
    public function rules(): array
    {
        if ($this->isMethod('POST')) {
            return [
                'current_password' => 'required|string|' . PasscheckRule::NAME,
                'new_password' => 'required|string|between:6,16|confirmed'
            ];
        }
        return [];
    }




}
