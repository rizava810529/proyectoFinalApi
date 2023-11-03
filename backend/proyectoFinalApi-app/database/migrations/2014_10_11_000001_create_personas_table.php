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
        Schema::create('personas', function (Blueprint $table) {
            $table->id(); // Esto crea la columna 'id' como primary key autoincremental
            $table->string('primer_nombre', 255);
            $table->string('segundo_nombre', 255)->nullable();
            $table->string('primer_apellido', 255);
            $table->string('segundo_apellido', 255)->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->timestamp('fecha_modificacion')->useCurrent();
            $table->timestamps(); // Esto crea las columnas 'created_at' y 'updated_at'
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
