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
            $table->char('OrderID',5)->primary();
            $table->string('Email');
            $table->char('PaymentMethodID',5);
            $table->char('ShipmentTypeID',5);
            $table->date('OrderDate');
            $table->string('OrderDestination');
            $table->foreign('Email')->references('Email')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('PaymentMethodID')->references('PaymentMethodID')->on('payment_methods')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('ShipmentTypeID')->references('ShipmentTypeID')->on('shipment_types')
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
        Schema::dropIfExists('orders');
    }
};
