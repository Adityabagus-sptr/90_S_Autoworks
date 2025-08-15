<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama link (e.g., "Link Daftar", "Link Login")
            $table->string('url'); // URL link
            $table->string('type')->default('general'); // Tipe link (daftar, login, external, etc.)
            $table->string('description')->nullable(); // Deskripsi link
            $table->boolean('is_active')->default(true); // Status aktif/nonaktif
            $table->boolean('open_new_tab')->default(false); // Buka di tab baru
            $table->integer('sort_order')->default(0); // Urutan tampil
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('links');
    }
};