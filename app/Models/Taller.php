<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'descripcion',
        'ubicacion',
        'fecha',
        'hora',
        'tipo_taller',
        'estado',
        'validar_campaña'
    ];

    public function personas(){
        return $this->belongsToMany(Persona::class, 'personas_talleres');
    }
}
