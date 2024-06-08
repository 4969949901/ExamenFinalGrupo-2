<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = 'alumno'; // Nombre de la tabla en la base de datos

    protected $primaryKey = 'CARNE'; // Llave primaria

    public $incrementing = false; // Si la llave primaria no es autoincremental

    protected $keyType = 'string'; // Tipo de la llave primaria si no es un entero

    protected $fillable = [
        'CARNE',
        'NOMBRE_ALUMNO',
        'CORREO_INSTITUCIONAL',
        'TELEFONO'
    ];
}
