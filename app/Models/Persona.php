<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellidos',
        'tipo_identificacion',
        'numero_identificacion',
        'fecha_de_nacimiento',
        'edad',
        'pais',
        'ciudad',
        'calle',
        'estado',
        'tipo_persona_id'
    ];
    public function tipoPersona()
    {
        return $this->belongsTo(TipoPersona::class,'tipo_persona_id');
    }

    //relacion muchos a muchos
    public function voluntariados(){
        return $this->belongsToMany(Voluntariado::class, 'personas_voluntariados');
    }
}