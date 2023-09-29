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
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion')->nullable();
            $table->text('url');
            $table->integer('estado')->comment('1- nueva 2- revisada');
            $table->unsignedBigInteger('contacto_id'); // Agrega una clave foránea a la tabla 'contactos'
            $table->timestamps();
        
            // Definir la relación con la tabla 'contactos'
            $table->foreign('contacto_id')->references('id')->on('contactos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notificaciones');
    }
};
