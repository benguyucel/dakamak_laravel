<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OurServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'item_icon' => 'file|mimes:png,jpg,jpeg,svg|max:2048',
            'description' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'item_icon.required' => 'The item icon field is required.',
            'item_icon.string' => 'The item icon field must be a string.',
            'description.required' => 'The description field is required.',
            'description.string' => 'The description field must be a string.',
            'item_icon.mimes' => 'The item icon must be an SVG, PNG, or JPG image.',
        ];
    }
}
