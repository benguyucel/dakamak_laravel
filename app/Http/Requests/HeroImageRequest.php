<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HeroImageRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'hero_image' => 'nullable|mimes:jpeg,png,jpg',
        ];
    }
    public function messages()
    {
        return [
            'hero_image.mimes' => 'The image must be a JPG or PNG file.',
        ];
    }
}
