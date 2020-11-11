<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
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
            'role' => 'required|integer',
            'fullName' => 'required|max:255',
            'userName' => 'required|min:4|max:255',
            'email' => 'required|max:255',
            'password' => 'required|min:4|max:20',
            'confirm_password' => 'required|same:password',
        ];
    }
}
