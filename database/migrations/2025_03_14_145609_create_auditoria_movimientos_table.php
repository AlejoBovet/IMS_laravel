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
        Schema::create('auditoria_movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('movimiento_id')->constrained('movimientos');
            $table->foreignId('usuario_id')->constrained('usuarios');
            $table->string('accion');
            $table->integer('cantidad_anterior');
            $table->integer('cantidad_nueva');
            $table->integer('costo_anterior');
            $table->integer('costo_nuevo');
            $table->timestamp('fecha_registro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auditoria_movimientos');
    }
};
