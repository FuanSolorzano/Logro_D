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
        Schema::create('horas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Asistencia_id');
            $table->decimal('horas_trabajadas', 5, 2);
            $table->decimal('horas_extra', 5, 2)->nullable();
            $table->timestamps(); 
            $table->foreign('Asistencia_id')->references('id')->on('asistencias');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horas');
    }
};
