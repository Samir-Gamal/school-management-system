<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSections extends FormRequest
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

            'Name_Section_Ar' => 'required',
            'Name_Section_En' => 'required',
            'Grade_id' => 'required',
            'Class_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'Name_Section_Ar.required' => __('section.required_ar'),
            'Name_Section_En.required' => __('section.required_en'),
            'Grade_id.required' => __('section.grade_id_required'),
            'Class_id.required' => __('section.class_id_required'),
        ];
    }
}
