<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DepartmentValidation extends FormRequest
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
            'name'=>'required|unique:departments',
            'code'=>'required|unique:departments',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Department name is required!',
            'name.unique'=>'Department name most be unique!',
            'code.required'=>'Department code is required!',
            'code.unique'=>'Department code has already been captured!',
        ];
    }
}
