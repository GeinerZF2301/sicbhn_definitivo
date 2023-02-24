<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voluntariado extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'fecha',
        'hora',
        'tipo_voluntariado',
        'estado',
        'validar_voluntariado'
    ];
}
