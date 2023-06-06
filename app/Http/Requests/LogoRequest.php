<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogoRequest extends FormRequest
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
            'image' => 'image|mimes:png,jpg,jpeg|max:2048', // png, jpg veya jpeg formatında bir görüntü, en fazla 2MB boyutunda
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'The image field is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'Only PNG and JPG images are allowed.',
            'image.max' => 'The image may not be greater than 2MB.',
        ];
    }
}
