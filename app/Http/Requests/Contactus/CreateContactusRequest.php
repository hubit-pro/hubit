<?php

namespace App\Http\Requests\Contactus;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactusRequest extends FormRequest
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
            'companyName' => 'required|max:255',
            'location' => 'required|max:255',
            'mailAddress' => 'required|max:255',
            'optionalMailAddress' => 'nullable|max:255',
            'officePhone' => 'required|max:255',
            'salePhone' => 'nullable|max:255',
            'socialPhone' => 'nullable|max:255',
            'supportSoftwarePhone' => 'nullable|max:255',
            'supportHardwarePhone' => 'nullable|max:255',
            'itTrainingPhone' => 'nullable|max:255',
            'facebookUrl' => 'nullable|max:255',
            'linkedinUrl' => 'nullable|max:255',
            'youtubeUrl' => 'nullable|max:255',
            'instagramUrl' => 'nullable|max:255',
            'twitterUrl' => 'nullable|max:255',
            'map' => 'nullable',
        ];
    }
}
