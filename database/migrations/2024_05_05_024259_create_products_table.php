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
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable(); 
            $table->unsignedDecimal('price',8,2)->default(0); 
            $table->unsignedDecimal('sale_price',8,2)->nullable(); 
            $table->unsignedInteger('quantity',8,2)->default(0); 
            $table->unsignedInteger('brand_id')->nullable(); 
            $table->unsignedInteger('category_id')->nullable(); 
            $table->unsignedInteger('shop_id')->nullable(); 
            $table->boolean('is_featured')->default(0); 
            $table->boolean('status')->default(0)->comment('0 =>draft, 1=> published'); 
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
