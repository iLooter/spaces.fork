<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Carbon\Carbon;
use Validator;

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

        if($this->isMethod('POST')) {

            //validate if date is valid
            $birthday = array('birthday' => $this->year.'-'.$this->month.'-'.$this->day);
            $this->merge($birthday);
            $validator = Validator::make($this->request, [
                'birthday' => 'date',
            ],['Invalid date test']);

            if($validator->fails()) {
                return back()->withInput()->withErrors($validator);
            }


            return [
                'first_name' => 'nullable|string|max:100',
                'last_name' => 'nullable|string|max:100',
                'gender' => 'nullable|in:male,female',
                'day' => 'nullable|integer|between:0,31|required_with:month, year',
                'month' => 'nullable|integer|between:0,12|required_with:day, year',
                'year' => 'nullable|integer|between:1930,2012|required_with:day, month',
                'marital_status' => [
                    Rule::in(['none', 'unmarried', 'married', 'no_longer_married', 'active_search', 'inlove', 'betrothed', 'complicated']),
                ],
                'profession' => 'nullable|string|max:40'
            ];
        }
        return [];

    }

    /**
     * Get all of the input and files for the request.
     *
     * @return array
     */

}
