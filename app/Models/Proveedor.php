<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    protected $table = 'proveedores';

    protected $fillable = [
        'id',
        'nombre',
        'direccion',
        'telefono',
        'email',
        'created_at',
        'updated_at'
    ];
}
