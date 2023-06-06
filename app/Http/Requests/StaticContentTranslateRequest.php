<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StaticContentTranslateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {

        // $rules = [];
        // $titles = $this->input('title');
        // $texts = $this->input('text');
        // foreach ($titles as $key => $value) {
        //     $rules['text.' . $key] = Rule::requiredIf(function () use ($titles, $key) {
        //         return $titles[$key] !== null;
        //     });
        //     $rules['title.' . $key] = Rule::requiredIf(function () use ($texts, $key) {
        //         return $texts[$key] !== null;
        //     });
        // }
        // return $rules;
        return [];
    }

}
