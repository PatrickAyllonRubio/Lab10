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
        Schema::create('vuelos_pasajeros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vuelos_id');
            $table->foreign('vuelos_id')->references('id')->on('vuelos');
            $table->unsignedBigInteger('pasajeros_id');
            $table->foreign('pasajeros_id')->references('id')->on('pasajeros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos_pasajeros');
    }
};
