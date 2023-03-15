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
        Schema::create('orders', function (Blueprint $table) {
            $table->string('OrderID')->primary();
            $table->string('Email');
            $table->string('PaymentMethodID');
            $table->string('ShipmentTypeID');
            $table->date('OrderDate');
            $table->string('OrderDestination');
            $table->foreign('Email')->references('Email')->on('users');
            $table->foreign('PaymentMethodID')->references('PaymentMethodID')->on('payment_methods');
            $table->foreign('ShipmentTypeID')->references('ShipmentTypeID')->on('shipment_types');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
