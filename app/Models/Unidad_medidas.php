<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad_medidas extends Model
{
    use HasFactory;

    protected $table = 'unidad_medidas';
    public $timestamps = false;
    protected $fillable = [
        'id',
        'nombre',
    ];
}
