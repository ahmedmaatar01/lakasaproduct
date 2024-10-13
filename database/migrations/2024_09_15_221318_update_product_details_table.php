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
        Schema::table('product_details', function (Blueprint $table) {
            //section4
            $table->string('lumiere_img1')->nullable();
            $table->text('lumiere_desc1')->nullable();

            $table->string('lumiere_img2')->nullable();
            $table->text('lumiere_desc2')->nullable();

            $table->string('lumiere_img3')->nullable();
            $table->text('lumiere_desc3')->nullable();
            //section5
            $table->text('parg_section5')->nullable();

            $table->string('titre_section_5')->nullable();

            $table->text('parg1_section_5')->nullable();
            $table->string('img1_section_5')->nullable();

            $table->text('parg2_section_5')->nullable();
            $table->string('img2_section_5')->nullable();

            //section6
            $table->string('titre_section_6')->nullable();
            $table->text('parg1_section_6')->nullable();
            $table->string('img2_section_6')->nullable();

            //section7
            $table->string('titre_section_7')->nullable();
            $table->text('parg1_section_7')->nullable();
            $table->string('img2_section_7')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
