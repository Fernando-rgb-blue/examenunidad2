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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del curso
            $table->text('descripcion'); // Descripción del curso
            $table->string('codigo')->unique(); // Código del curso
            $table->integer('duracion')->unsigned(); // Duración del curso en horas
            $table->date('fecha_inicio'); // Fecha de inicio del curso
            $table->decimal('precio', 8, 2); // Precio del curso
            $table->string('instructor'); // Nombre del instructor del curso
            $table->integer('capacidad_maxima')->unsigned(); // Capacidad máxima de estudiantes
            $table->boolean('activo')->default(true); // Estado del curso (activo/inactivo)
            $table->timestamps();

        });
    }







    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos');
    }
};
