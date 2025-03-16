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
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->foreignId('producto_id')->constrained('productos');
            $table->foreignId('tipo_movimiento_id')->constrained('tipo_movimientos');
            $table->integer('cantidad');
            $table->timestamp('fecha_movimiento');
            $table->decimal('precio_unitario', 8, 2);
            $table->decimal('precio_total', 8, 2);
            $table->string('motivo');
            $table->foreignId('proveedor_id')->constrained('proveedores');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimientos');
    }
};
