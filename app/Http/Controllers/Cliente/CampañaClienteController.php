<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Campaña;

class CampañaClienteController extends Controller
{
    public function index(){
        
        $campannasDisponibles = Campaña::select('nombre', 'descripcion','ubicacion','fecha','hora','tipo_campaña')->
        where('estado', 1)->get();

        return view('principal.campanna.campanna-index', compact('campannasDisponibles'));
    }
}
