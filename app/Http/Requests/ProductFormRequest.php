<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => ['required'],
            'category_id' => ['required'],
            'description' => ['required'],            
            'original_price' => ['required','integer'],
            'selling_price' => ['required','integer'],
            'quantity' => ['required','integer'],
            'status' => ['nullable'],
            'trending' => ['nullable'],
			'image' => ['required', 'mimes:jpeg,png,jpg,gif,svg|max:2048'],
            'decription' => ['required'],
        ];
    }
}
