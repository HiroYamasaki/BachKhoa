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
            $table->bigInteger('product_id')->nullable();
            $table->bigInteger('attribute_id')->nullable();
            $table->string('sku')->nullable();
            $table->string('name');
            $table->string('category')->nullable();
            $table->string('image', 500)->nullable();
            $table->string('image1', 500)->nullable();
            $table->string('image2', 500)->nullable();
            $table->string('image3', 500)->nullable();
            $table->decimal('price', 15, 0)->default(0);
            $table->decimal('sale_price', 15, 0)->default(0);
            $table->decimal('discount', 15, 0)->default(0);
            $table->integer('quantity')->default(0);
            $table->text('short_description')->nullable();
            $table->longText('long_description')->nullable();
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
