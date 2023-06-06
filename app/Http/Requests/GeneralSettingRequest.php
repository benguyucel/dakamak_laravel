<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GeneralSettingRequest extends FormRequest
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
        $rules = [
            'video_link' => 'nullable|string|max:150',
            'mail_address' => 'required|string|max:150',
            'map' => 'required|string',
            'address' => 'required|string|max:200',
            'date' => 'required|string|size:4',
            'logo' => 'required|string|max:300',
        ];
        return $rules;
    }
    public function messages(): array
    {
        return [
            'video_link.string' => 'The video link must be a string.',
            'video_link.max' => 'The video link must not exceed :max characters.',
            'mail_address.required' => 'The email address field is required.',
            'mail_address.max' => 'The email address must not exceed :max characters.',
            'map.required' => 'The map field is required.',
            'address.required' => 'The address field is required.',
            'address.max' => 'The address must not exceed :max characters.',
            'date.required' => 'The date field is required.',
            'date.size' => 'The date must be exactly :size characters.',
            'logo.required' => 'The logo field is required.',
            'logo.max' => 'The logo must not exceed :max characters.',
        ];
    }
}
