<?php

namespace Database\Seeders;

use App\Models\Hero;
use Illuminate\Database\Seeder;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::create([
            'title' => 'Main Hero Section',
            'hero_image' => 'supers1.png',
            'mascot_image' => 'Maskot.png',
            'hero_alt_text' => 'Hero',
            'mascot_alt_text' => 'Maskot',
            'is_active' => true,
            'sort_order' => 1,
        ]);
    }
}
