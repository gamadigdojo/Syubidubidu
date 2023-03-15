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
        Schema::create('oder_details', function (Blueprint $table) {
            $table->string('OrderID');
            $table->string('ProductID');
            $table->integer('Quantity');
            $table->primary(['OrderID', 'ProductID']); 
            $table->foreign('OrderID')->references('OrderID')->on('orders');
            $table->foreign('ProductID')->references('ProductID')->on('products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oder_details');
    }
};
