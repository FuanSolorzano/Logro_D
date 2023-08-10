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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('direccion');
            $table->date('fecha_nacimiento');
            $table->date('fecha_contratacion');
            $table->unsignedBigInteger('Puesto_id');
            $table->unsignedBigInteger('Credencial_id');
            $table->timestamps();
            $table->foreign('Puesto_id')->references('id')->on('puestos');
            $table->foreign('Credencial_id')->references('id')->on('credencials');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
