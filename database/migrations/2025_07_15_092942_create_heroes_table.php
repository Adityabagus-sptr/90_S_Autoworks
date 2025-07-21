<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title')->default('Hero Section');
            $table->string('hero_image')->nullable(); // untuk supers1.png
            $table->string('mascot_image')->nullable(); // untuk Maskot.png
            $table->string('hero_alt_text')->default('Hero');
            $table->string('mascot_alt_text')->default('Maskot');
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};