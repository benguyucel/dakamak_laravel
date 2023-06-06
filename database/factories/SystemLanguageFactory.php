<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\SystemLanguage>
 */
class SystemLanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $order = 0;
        $locales = [
            'en',
            'fr',
            'de',
            'ru',
            'ar',
            'bg',
            'tr'
        ];
        $languages = [
            'English',
            'French',
            'German',
            'Russian',
            'Arabic',
            'Bulgarian',
            'Turkish'
        ];
  
        $locale = $locales[$order];
        $language = $languages[$order];
        $order++;

        return [
            'locale' => $locale,
            'language' => $language,
            'status' => 1
        ];
    }
}
