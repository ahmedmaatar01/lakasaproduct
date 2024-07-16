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
        Schema::create('home_page_contents', function (Blueprint $table) {
            $table->id();
            // Slider images
            $table->string('slider_image_1')->nullable();
            $table->string('slider_title_1')->nullable();
            $table->text('slider_description_1')->nullable();
            $table->string('slider_image_2')->nullable();
            $table->string('slider_title_2')->nullable();
            $table->text('slider_description_2')->nullable();
            $table->string('slider_image_3')->nullable();
            $table->string('slider_title_3')->nullable();
            $table->text('slider_description_3')->nullable();

            // Four labeled images
            $table->string('image_1')->nullable();
            $table->string('label_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('label_2')->nullable();
            $table->string('image_3')->nullable();
            $table->string('label_3')->nullable();
            $table->string('image_4')->nullable();
            $table->string('label_4')->nullable();

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

            // Instagram posts
            $table->json('instagram_posts')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_contents');
    }
};
