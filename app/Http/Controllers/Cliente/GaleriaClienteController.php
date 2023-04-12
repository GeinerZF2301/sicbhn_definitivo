<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Galeria;

class GaleriaClienteController extends Controller
{
    public function index(){
        $imagenes = Galeria::select('nombre', 'descripcion', 'file', 'categoria_imagen')->
        where('estado', 1)->get();

        return view('principal.galeria.galeria-index', compact('imagenes'));
    }
}
