<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'hero_image',
        'mascot_image',
        'hero_alt_text',
        'mascot_alt_text',
        'is_active',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Scope untuk mendapatkan hero yang aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk mengurutkan berdasarkan sort_order
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc');
    }

    // Accessor untuk URL gambar hero
    public function getHeroImageUrlAttribute()
    {
        return $this->hero_image ? asset('images/' . $this->hero_image) : asset('images/supers1.png');
    }

    // Accessor untuk URL gambar maskot
    public function getMascotImageUrlAttribute()
    {
        return $this->mascot_image ? asset('images/' . $this->mascot_image) : asset('images/Maskot.png');
    }
}
