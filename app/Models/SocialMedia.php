<?php

namespace App\Models;

use Illuminate\Support\Str;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'link', 'status'];
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = strtolower($value);
    }
    public function setIdAttribute($value)
    {
        $this->attributes['id'] = intval($value);
    }
}
