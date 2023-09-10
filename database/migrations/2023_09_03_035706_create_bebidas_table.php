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
        Schema::create('bebidas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 255);
            $table->decimal('precio', 10, 2); // Permite valores nulos
            $table->string('imagen', 255);
            $table->text('descripcion')->nullable();;    
            $table->enum('tipo', ['Frias', 'Calientes']);
            $table->enum('estado', ['Activo', 'Inactivo']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bebidas');
    }
};
