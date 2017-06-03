<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeesFormRequest extends FormRequest
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
        return [
            //
            'name'      => 'required',
            'surname'   => 'required',
            'dni'       => 'string',
            'email'     => 'email|unique',
            'job'       => ["required", Rule::in([0,1])],
            'user'      => 'required|email',
            'password'  => 'required|min:6',

        ];
    }
}
