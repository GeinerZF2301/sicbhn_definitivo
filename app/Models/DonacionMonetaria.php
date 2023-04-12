<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonacionMonetaria extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha_donacion',
        'fecha_recibido',
        'descripcion',
        'monto',
        'persona_donante_id'
    ];

    public function personaDonante()
    {
        return $this->belongsTo(DonacionMonetaria::class,'persona_donante_id');
    }
}
