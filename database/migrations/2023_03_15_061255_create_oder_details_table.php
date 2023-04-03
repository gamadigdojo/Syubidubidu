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
            $table->char('OrderID',5);
            $table->char('ProductID',5);
            $table->integer('Quantity');
            $table->primary(['OrderID', 'ProductID']); 
            $table->foreign('OrderID')->references('OrderID')->on('orders')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ProductID')->references('ProductID')->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
