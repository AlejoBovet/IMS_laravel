<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auditoria_movimientos extends Model
{
    use HasFactory;

    protected $table = 'auditoria_movimientos';

    protected $fillable = [
        'id',
        'movimiento_id',
        'usuario_id',
        'accion',
        'cantidad_anterior',
        'cantidad_nueva',
        'costo_anterior',
        'costo_nuevo',
        'fecha_registro'
    ];
}
