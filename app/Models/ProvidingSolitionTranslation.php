<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvidingSolitionTranslation extends Model
{
    use HasFactory;
    protected $table = 'providing_trans';
    public $timestamps = false;
    protected $fillable = ['title', 'text','locale'];
}
