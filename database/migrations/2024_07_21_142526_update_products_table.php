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
            $table->dropColumn(['longeur', 'hauteur']);
            $table->tinyInteger('interrepteur')->default(0)->after('description');
            $table->tinyInteger('led')->default(0)->after('description');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->decimal('longeur', 8, 2);
            $table->decimal('hauteur', 8, 2);
            $table->dropColumn('interrepteur');
            $table->dropColumn('led');
        });
    }
};
