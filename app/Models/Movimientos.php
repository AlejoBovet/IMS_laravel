<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimientos extends Model
{
    use HasFactory;

    protected $table = 'movimientos';

    protected $fillable = [
        'id',
        'producto_id',
        'tipo_movimiento_id',
        'cantidad',
        'fecha_movimiento',
        'precio_unitario',
        'precio_total',
        'motivo',
        'proveedor_id'
    ];
}
