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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained('brands')->onDelete('cascade');            
            $table->string('model');
            $table->string('year');
            $table->string('type');
            $table->string('body_type');
            $table->string('distance');
            $table->string('condition');
            $table->string('owner');
            $table->string('engine');
            $table->string('battery');
            $table->string('fuel_capacity');
            $table->string('mileage');
            $table->string('gear');
            $table->string('top_speed');
            $table->string('break');
            $table->string('suspension');
            $table->integer('price');
            $table->string('colour');
            $table->string('negotiable');
            $table->string('address');
            $table->string('deliveryOption');
            $table->string('banner_img');
            $table->string('other_img');
            $table->string('description');
            $table->integer('stock')->default(1);
            $table->string('status')->default('pending');
            $table->float('rating')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
