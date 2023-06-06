<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaticContentTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['locale','hero_text', 'about_us_title', 'about_us_content_text','bottom_tagline_text'];
}
