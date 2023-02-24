<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPersona extends Model
{
    protected $fillable = [
        'tipo_persona',
        'descripcion'
    ];
    use HasFactory;
    
    public function personas()
    {
        return $this->hasMany(Persona::class);
    }
}