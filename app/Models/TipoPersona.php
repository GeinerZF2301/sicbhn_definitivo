<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_persona',
        'descripcion'
    ];
    
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }
}