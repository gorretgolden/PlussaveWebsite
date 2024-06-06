<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;
    protected $fillable = ['type', 'title', 'sub_title', 'type','button_text'];

    public function images()
    {
        return $this->hasMany(HeroImage::class);
    }
}