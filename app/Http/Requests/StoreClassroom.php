<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroom extends FormRequest
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
            'List_Classes.*.Name' => 'required',
            'List_Classes.*.name_class_en' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'Name.required' => __('validation.required'),
            'Name_class_en.required' => __('validation.required'),
        ];
    }
}
