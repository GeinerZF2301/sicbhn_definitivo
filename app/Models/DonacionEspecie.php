<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonacionEspecie extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'fecha_donacion',
        'fecha_recibido',
        'descripcion',
        'persona_donante_id',
        'articulo_id'
    ];
}
