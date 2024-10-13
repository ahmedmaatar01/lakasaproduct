<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('produit_id');
            $table->decimal('price', 10, 2);
            $table->integer('quantity');
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->string('frame')->nullable();
            $table->string('frame_color')->nullable();
            $table->string('led_color')->nullable();
            $table->string('mirror_color')->nullable();
            $table->string('switch_type')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
