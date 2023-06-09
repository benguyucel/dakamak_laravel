<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateOurServiceRequest extends FormRequest
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
            'itemIcon' => 'nullable|mimes:jpg,png',
            'description' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'description.required' => 'The description field is required.',
            'itemIcon.mimes' => 'The item icon must be a JPG or PNG file.'
        ];
    }
}
