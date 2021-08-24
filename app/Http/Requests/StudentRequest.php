<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
        switch ($this->getMethod()) {
            // handle creates
            case 'post':
            case 'POST':
                return $this->creationRules();

            // Handle updates
            case 'patch':
            case 'PATCH':
                return $this->updateRules();

            // handle deletions
            case 'delete':
            case 'DELETE':
                return $this->deleteRules();
        }
        // return empty array for other requests
        return [
            //
        ];
    }

    public static function creationRules($key = null)
    {
        $creation_rules = [
            'name_ar' => ['required', 'string', 'min:2'],
            'name_en' => ['required', 'string', 'min:2'],
            'email' => ['required', 'email', 'unique:students,email,' . request()->id],
            'password' => ['required', 'string'],
            'gender_id' => ['required', 'uuid', 'exists:genders,id'],
            'nationality_id' => ['required', 'uuid', 'exists:nationalities,id'],
            'blood_type_id' => ['required', 'uuid', 'exists:blood_types,id'],
            'birthday' => ['required', 'date', 'date_format:Y-m-d'],
            'grade_id' => ['required', 'uuid', 'exists:grades,id'],
            'classroom_id' => ['required', 'uuid', 'exists:classrooms,id'],
            'section_id' => ['required', 'uuid', 'exists:sections,id'],
            'guardian_id' => ['required', 'uuid', 'exists:guardians,id'],
            'academic_year' => ['digits:4', 'integer', 'min:2000'],

        ];

        return $key ? $creation_rules[$key] : $creation_rules;

    }

    public static function updateRules($key = null)
    {
        $update_rules = [
            'name_ar' => ['string', 'min:2'],
            'name_en' => ['string', 'min:2'],
            'email' => ['email', 'unique:students,email,' . request()->id],
            'password' => ['string'],
            'gender_id' => ['uuid', 'exists:genders,id'],
            'nationality_id' => ['uuid', 'exists:nationalities,id'],
            'blood_type_id' => ['uuid', 'exists:blood_types,id'],
            'birthday' => ['date', 'date_format:Y-m-d'],
            'grade_id' => ['uuid', 'exists:grades,id'],
            'classroom_id' => ['uuid', 'exists:classrooms,id'],
            'section_id' => ['uuid', 'exists:sections,id'],
            'guardian_id' => ['uuid', 'exists:guardians,id'],
            'academic_year' => ['digits:4', 'integer', 'min:2000'],
            'attachments.*' => ['mimes:jpg,jpeg,png,bmp', 'max:20000'],
        ];

        return $key ? $update_rules[$key] : $update_rules;

    }

    public static function deleteRules($key = null)
    {
        $delete_rules = [

        ];

        return $key ? $delete_rules[$key] : $delete_rules;

    }
}
