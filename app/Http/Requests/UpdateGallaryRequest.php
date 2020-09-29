<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGallaryRequest extends FormRequest
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
            'gallary_category_id' => 'required|exists:gallary_categories,id',
            'gallary_sub_category_id' => 'required|exists:gallary_sub_categories,id',
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|min:8|max:15',
            'companyName' => 'nullable|max:255',
            'location' => 'required|max:255',
            'clientSpeech' => 'nullable|min:5',
            'description' => 'nullable|min:5',
            'image' => 'nullable||mimes:jpg,jpeg,png',
        ];
    }
}
