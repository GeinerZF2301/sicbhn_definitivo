<?php

namespace App\Http\Controllers\Cliente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CuentaBancaria;
use App\Models\Articulo;
class DonacionesClienteController extends Controller
{
    public function index(){
        $cuentasBancarias = CuentaBancaria::select('id', 'entidad_bancaria','numero_cuenta','estado')
        ->where('estado', '=', 1)->get();
        $alimentos = Articulo::select('id', 'nombre')->where('tipo_articulo', '=', 'Alimentos')->get();
        $herramientas = Articulo::select('id', 'nombre')->where('tipo_articulo', '=', 'Herramienta')->get();
        return view('principal.donaciones.donaciones-index', compact('cuentasBancarias', 'alimentos', 'herramientas'));
    }
}
