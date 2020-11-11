<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'course_category_id' => 'required|exists:course_categories,id',
            'title' => 'required|max:255',
            'lecturer' => 'required|max:255',
            'noOfStudent' => 'numeric',
            'description' => 'required|min:5',
            'image' =>'nullable|mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
