<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionRequest extends FormRequest
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
            'title' => ['required', 'string', 'min:2'],
            'options' => ['required', 'string', 'min:4'],
            'right_answer' => ['required', 'string', 'min:2'],
            'score' => ['required', 'numeric'],
            'quiz_id' => ['required', 'uuid', 'exists:quizzes,id'],
        ];

        return $key ? $creation_rules[$key] : $creation_rules;

    }

    public static function updateRules($key = null, $user_id = null)
    {
        $update_rules = [
            'title' => ['string', 'min:2'],
            'options' => ['string', 'min:4'],
            'right_answer' => ['string', 'min:2'],
            'score' => ['numeric'],
            'quiz_id' => ['uuid', 'exists:quizzes,id'],
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
