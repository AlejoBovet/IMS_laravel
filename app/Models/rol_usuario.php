<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol_usuario extends Model
{
    use HasFactory;

    protected $table = 'rol_usuario';

    protected $fillable = [
        'id',
        'nombre',
    ];
}
