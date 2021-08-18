<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
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

            'name_ar' => 'required|unique:grades,name->ar,',
            'name_en' => 'required|unique:grades,name->en,'

        ];

        return $key ? $creation_rules[$key] : $creation_rules;

    }

    public static function updateRules($key = null, $user_id = null)
    {
        $update_rules = [

            'name_ar' => 'required|unique:grades,name->ar,'.request()->id,
            'name_en' => 'required|unique:grades,name->en,'.request()->id,

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
