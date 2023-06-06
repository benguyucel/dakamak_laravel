<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class StaticContent extends Model implements TranslatableContract
{
    use HasFactory,Translatable;
    public $translatedAttributes = ['hero_text','about_us_title','about_us_content_text','bottom_tagline_text'];

}
