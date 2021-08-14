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
            'Name_Section_Ar.required' => trans('section.required_ar'),
            'Name_Section_En.required' => trans('section.required_en'),
            'Grade_id.required' => trans('section.Grade_id_required'),
            'Class_id.required' => trans('section.Class_id_required'),
        ];
    }
}