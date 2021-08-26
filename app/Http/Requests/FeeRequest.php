<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeeRequest extends FormRequest
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
            'title_ar' => ['required', 'string', 'min:2'],
            'title_en' => ['required', 'string', 'min:2'],
            'amount' => ['required', 'numeric'],
            'grade_id' => ['required', 'uuid', 'exists:grades,id'],
            'classroom_id' => ['required', 'uuid', 'exists:classrooms,id'],
            'year' => ['required', 'digits:4', 'integer', 'min:2000'],
        ];

        return $key ? $creation_rules[$key] : $creation_rules;

    }

    public static function updateRules($key = null, $user_id = null)
    {
        $update_rules = [
            'title_ar' => ['string', 'min:2'],
            'title_en' => ['string', 'min:2'],
            'amount' => ['numeric'],
            'grade_id' => ['uuid', 'exists:grades,id'],
            'classroom_id' => ['uuid', 'exists:classrooms,id'],
            'year' => ['digits:4', 'integer', 'min:2000'],
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
