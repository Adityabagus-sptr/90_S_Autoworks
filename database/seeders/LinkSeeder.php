<?php

namespace Database\Seeders;

use App\Models\Link;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    public function run(): void
    {
        $links = [
            [
                'name' => 'WhatsApp Customer Service',
                'url' => 'https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20bertanya%20tentang%20layanan%20Anda',
                'type' => 'whatsapp',
                'description' => 'Hubungi customer service melalui WhatsApp',
                'is_active' => true,
                'open_new_tab' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Form Pendaftaran',
                'url' => 'https://docs.google.com/forms/d/e/1FAIpQLSe_example_form_id/viewform',
                'type' => 'google_form',
                'description' => 'Form pendaftaran online melalui Google Forms',
                'is_active' => true,
                'open_new_tab' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'Form Konsultasi',
                'url' => 'https://docs.google.com/forms/d/e/1FAIpQLSe_consultation_form_id/viewform',
                'type' => 'google_form',
                'description' => 'Form konsultasi dan pertanyaan',
                'is_active' => true,
                'open_new_tab' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'WhatsApp Info Produk',
                'url' => 'https://wa.me/6281234567890?text=Halo,%20saya%20ingin%20informasi%20tentang%20produk%20Anda',
                'type' => 'whatsapp',
                'description' => 'WhatsApp untuk informasi produk dan layanan',
                'is_active' => true,
                'open_new_tab' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($links as $link) {
            Link::create($link);
        }
    }
}