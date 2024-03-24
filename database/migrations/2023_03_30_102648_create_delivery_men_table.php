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
        Schema::create('delivery_men', function (Blueprint $table) {
            $table->unsignedInteger('max_deliveries_in_day');
            $table->unsignedBigInteger('delivery_man_id');
            $table->unsignedBigInteger('fisher_id');
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('delivery_man_id')->references('id')->on('users');
            $table->foreign('fisher_id')->references('id')->on('users');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_men');
    }
};