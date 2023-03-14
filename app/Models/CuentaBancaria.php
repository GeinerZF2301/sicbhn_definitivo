<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaBancaria extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'entidad_bancaria',
        'numero_cuenta',
        'estado'
    ];
}
