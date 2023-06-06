<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $table = 'site_settings';
    protected $fillable = ['video_link', 'mail_address', 'map', 'address', 'date', 'logo', 'status'];
    public $timestamps = false;
    public function socials()
    {
        return $this->hasMany(SocialMedia::class);
    }
}
