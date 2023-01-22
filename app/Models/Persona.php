<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido1',
        'apellido2',
        'numero_identificacion',
        'tipo_identificacion',
        'pais',
        'ciudad',
        'calle',
        'tipo_persona_id'
    ];
    public function tipoPersona()
    {
        return $this->belongsTo(TipoPersona::class,'tipo_persona_id');
    }
}
