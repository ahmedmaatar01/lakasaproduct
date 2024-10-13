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
        Schema::create('product_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            $table->string('title_1')->nullable();
            $table->text('description_1')->nullable();
             // Sections
             $table->string('section_title_1')->nullable();
             $table->text('section_paragraph_1')->nullable();
             $table->string('section_image_1')->nullable();
 
             $table->string('section_title_2')->nullable();
             $table->text('section_paragraph_2')->nullable();
             $table->string('section_image_2')->nullable();
 
             $table->string('section_title_3')->nullable();
             $table->text('section_paragraph_3')->nullable();
             $table->string('section_image_3')->nullable();
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
