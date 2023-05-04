<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;
use PDF;

class PDFDOMController extends Controller
{
    public function generatePDF()
    {
        $personas = DB::table('personas')
            ->join('tipo_personas', 'personas.tipo_persona_id', '=', 'tipo_personas.id')
            ->select('personas.*', 'tipo_personas.tipo_persona as tipo_persona_id_tipo_persona')
            ->get();
  
        $data = [
            'title' => 'Your title',
            'date' => date('m/d/Y'),
            'Persona' => $personas
        ]; 
            
        $pdf = PDF::setPaper('letter','landscape')->loadView('admin/personas/pdf', $data);
     
        return $pdf->stream('Reporte de Personas del CBHN.pdf','UTF-8');
    }
}
