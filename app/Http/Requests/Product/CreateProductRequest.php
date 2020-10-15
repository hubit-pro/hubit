<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
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
            'product_category_id' => 'required|exists:product_categories,id',
            'title' => 'required|max:255',
            'description' => 'required|min:5',
            'image' => 'required',
            'image.*' =>'mimes:jpeg,png,jpg,gif,svg'
        ];
    }
}
