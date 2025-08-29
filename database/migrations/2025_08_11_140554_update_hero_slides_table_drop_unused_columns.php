<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::table('hero_slides', function (Blueprint $table) {
        //     $table->dropColumn([
        //         'subtitle',
        //         'alt_text',
        //         'button_text',
        //         'button_url',
        //         'open_new_tab'
        //     ]);
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::table('hero_slides', function (Blueprint $table) {
        //     $table->string('subtitle')->nullable();
        //     $table->string('alt_text')->nullable();
        //     $table->string('button_text')->nullable();
        //     $table->string('button_url')->nullable();
        //     $table->boolean('open_new_tab')->default(true);
        // });
    }
};
