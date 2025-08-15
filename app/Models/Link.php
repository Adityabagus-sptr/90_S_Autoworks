<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'type',
        'description',
        'is_active',
        'open_new_tab',
        'sort_order'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'open_new_tab' => 'boolean',
    ];

    // Scope untuk mendapatkan link yang aktif
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope untuk mengurutkan berdasarkan sort_order
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order', 'asc');
    }

    // Scope untuk mendapatkan link berdasarkan tipe
    public function scopeByType($query, $type)
    {
        return $query->where('type', $type);
    }

    // Accessor untuk mendapatkan target link (blank atau self)
    public function getTargetAttribute()
    {
        return $this->open_new_tab ? '_blank' : '_self';
    }

    // Accessor untuk mendapatkan URL yang sudah diformat
    public function getFormattedUrlAttribute()
    {
        $url = $this->url;
        
        // Jika URL tidak dimulai dengan http/https, tambahkan https://
        if (!preg_match('/^https?:\/\//', $url)) {
            $url = 'https://' . $url;
        }
        
        return $url;
    }
}