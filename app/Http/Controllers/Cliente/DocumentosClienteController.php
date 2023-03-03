<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Documento;
class DocumentosClienteController extends Controller
{
    public function index(){
        
        $documentosPublicos = Documento::select('nombre', 'descripcion','file')->
        where('estado', 1)->where('tipo_documento', 'Publico')->get();

        return view('principal.documentos.documentos-index', compact('documentosPublicos'));
    }
}
