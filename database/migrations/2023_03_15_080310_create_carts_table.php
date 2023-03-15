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
        Schema::create('carts', function (Blueprint $table) {
            $table->char('ProductID',5);
            $table->string('Email');
            $table->integer('Quantity');
            $table->primary(['ProductID', 'Email']);
            $table->foreign('ProductID')->references('ProductID')->on('products');
            $table->foreign('Email')->references('Email')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
