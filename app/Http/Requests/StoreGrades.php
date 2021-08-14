<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGrades extends FormRequest
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
            'Name' => 'required|unique:grades,name->ar,'.$this->id,
            'Name_en' => 'required|unique:grades,name->en,'.$this->id,
        ];
    }

    public function messages()
    {
        return [
            'Name.required' => __('validation.required'),
            'Name.unique' => __('validation.unique'),
            'Name_en.required' => __('validation.required'),
            'Name_en.unique' => __('validation.unique'),
        ];
    }
}
