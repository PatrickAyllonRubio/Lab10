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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->id();
            $table->string('origen');
            $table->String('destino');
            $table->timestamp('fecha_vuelo')->nullable();
            $table->timestamp('hora_vuelo')->nullable();
            $table->integer('precio_vuelo');
            $table->integer('cantidad_pasajeros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
