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
            $table->char('ProductID',5)->primary();
            $table->string('ProductName');
            $table->string('ProductDescription');
            $table->integer('ProductPrice'); 
            $table->integer('ProductStock');
            $table->string('ProductCategory');
            $table->string('ProductImage')-> nullable();
            $table->char('StoreID',5);
            $table->timestamps();
            $table->foreign('StoreID')->references('StoreID')->on('stores');
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
