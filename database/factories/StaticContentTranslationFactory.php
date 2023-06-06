<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\StaticContentTranslation>
 */
class StaticContentTranslationFactory extends Factory
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
        ];
        $hero_texts = [
            "Clear Thinking Makes a Bright Future",
            "Klares Denken schafft eine helle Zukunft",
            "Une pensée claire crée un avenir lumineux",
            "Четкое мышление создает светлое будущее"
        ];
        $about_us_titles = [
            'About Us',
            'À propos de nous',
            'О нас',
            'Über uns'
        ];
        $about_us_content_texts = [
            "We are a team of passionate professionals dedicated to providing high-quality products and services to our customers. Our mission is to help our clients achieve their goals and make their vision a reality. With years of experience and a commitment to excellence, we are here to support you every step of the way.",
            "Nous sommes une équipe de professionnels passionnés dédiés à fournir des produits et services de haute qualité à nos clients. Notre mission est d'aider nos clients à atteindre leurs objectifs et à concrétiser leur vision. Avec des années d'expérience et un engagement envers l'excellence, nous sommes là pour vous soutenir à chaque étape.",
            "Wir sind ein Team leidenschaftlicher Fachleute, das sich der Bereitstellung hochwertiger Produkte und Dienstleistungen für unsere Kunden verschrieben hat. Unsere Mission ist es, unseren Kunden zu helfen, ihre Ziele zu erreichen und ihre Visionen in die Realität umzusetzen. Mit langjähriger Erfahrung und einem Engagement für Exzellenz stehen wir Ihnen bei jedem Schritt zur Seite.",
            "Мы команда страстных профессионалов, которые посвятили себя предоставлению высококачественных продуктов и услуг нашим клиентам. Наша миссия - помочь нашим клиентам достичь своих целей и превратить свое видение в реальность. С годами опыта и приверженностью к совершенству, мы здесь, чтобы поддержать вас на каждом шагу."
        ];
        $locale = $locales[$order];
        $hero_text = $hero_texts[$order];
        $about_us_title = $about_us_titles[$order];
        $about_us_content_text = $about_us_content_texts[$order];
        $order++;
        return [
            'locale' => $locale,
            'static_content_id' => 1,
            'hero_text' => $hero_text,
            'about_us_title' => $about_us_title,
            'about_us_content_text' => $about_us_content_text
        ];
    }
}
