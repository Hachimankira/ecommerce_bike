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
            $table->string('brand');
            $table->string('model');
            $table->string('year');
            $table->string('type');
            $table->string('body_type');
            $table->string('distance');
            $table->string('colour');
            $table->string('condition');
            $table->string('gear');
            $table->string('suspension');
            $table->string('break');
            $table->string('owner');
            $table->string('price');
            $table->string('negotiable');
            $table->string('address');
            $table->string('deliveryOption');
            $table->string('banner_img');
            $table->json('other_img');
            $table->string('description');
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
