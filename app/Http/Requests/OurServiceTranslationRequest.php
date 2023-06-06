<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OurServiceTranslationRequest extends FormRequest
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

        $rules = [];
        $titles = $this->input('title');
        $texts = $this->input('text');
        foreach ($titles as $key => $value) {
            $rules['text.' . $key] = Rule::requiredIf(function () use ($titles, $key) {
                return $titles[$key] !== null;
            });
            $rules['title.' . $key] = Rule::requiredIf(function () use ($texts, $key) {
                return $texts[$key] !== null;
            });
        }
        return $rules;
    }
    public function messages()
    {
        return [
            'title.*.required' => 'The Title  field is required when our service text is not null.',
            'text.*.required' => 'The  Text field is required when our service title is not null.',
        ];
    }
}
