<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateWorksheetMainInfoRequest extends FormRequest
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
    public function rules()
    {
        $birthday = $this->get('year').'-'.$this->get('month').'-'.$this->get('day');

        return [
            'first_name' => 'nullable|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'gender' => 'nullable|in:male,female',
            $birthday => 'date_format: Y-m-d',
            'marital_status' => [
                Rule::in(['none', 'unmarried', 'married', 'no_longer_married', 'active_search', 'inlove', 'betrothed', 'complicated']),
            ],
            'profession' => 'nullable|string|max:40'
        ];
    }

    /**
     * Get all of the input and files for the request.
     *
     * @return array
     */

}
