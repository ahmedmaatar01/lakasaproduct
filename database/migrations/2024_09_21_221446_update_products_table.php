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
        Schema::table('products', function (Blueprint $table) {
            $table->enum('forme', ['rectangulaire', 'rond', 'semi ovale', 'abstraite'])->default('rectangulaire');
            $table->enum('style_lumiere', ['combiner', 'brillant', 'retro'])->default('combiner');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('forme');
            $table->dropColumn('style_lumiere');
        });
    }
};
