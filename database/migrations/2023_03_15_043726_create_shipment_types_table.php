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
        Schema::create('shipment_types', function (Blueprint $table) {
            $table->char('ShipmentTypeID',5)->primary();
            $table->string('ShipmentTypeName');
            $table->integer('ShipmentTypeFee');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipment_types');
    }
};
