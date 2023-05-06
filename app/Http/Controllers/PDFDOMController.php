<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Campaña;
use App\Models\Voluntariado;
use App\Models\User;
use App\Models\Taller;
use App\Models\DonacionMonetaria;
use PDF;

class PDFDOMController extends Controller
{
    public function ReportePersonas()
    {
        $personas = DB::table('personas')
            ->join('tipo_personas', 'personas.tipo_persona_id', '=', 'tipo_personas.id')
            ->select('personas.*', 'tipo_personas.tipo_persona as tipo_persona_id_tipo_persona')
            ->get();
  
        $data = [
            'title1' => 'Sistema de Información Corredor Biológico Hojancha Nandayure',
            date_default_timezone_set('America/Costa_Rica'),
            'date' => date('d/m/Y'),
            'Persona' => $personas
        ]; 
            
        $pdf = PDF::setPaper('letter','landscape')->loadView('admin/personas/pdf', $data);
     
        return $pdf->stream('Reporte de Personas del CBHN.pdf','UTF-8');
    }

    public function ReporteCampañas() 
    {
        $campañas = Campaña::all();
       
        $data = [
            'title1' => 'Sistema de Información Corredor Biológico Hojancha Nandayure',
            date_default_timezone_set('America/Costa_Rica'),
            'date' => date('d/m/Y'),
            'Campaña' => $campañas
        ]; 
            
        $pdf = PDF::setPaper('letter','landscape')->loadView('admin/campañas/pdf', $data);
     
        return $pdf->stream('Reporte de Campañas del CBHN.pdf','UTF-8');

    }

    public function ReporteVoluntarios() 
    {
        $Voluntariados = Voluntariado::all();
       
        $data = [
            'title1' => 'Sistema de Información Corredor Biológico Hojancha Nandayure',
            date_default_timezone_set('America/Costa_Rica'),
            'date' => date('d/m/Y'),
            'Voluntariados' => $Voluntariados
        ]; 
            
        $pdf = PDF::setPaper('letter','landscape')->loadView('admin/voluntariados/pdf', $data);
     
        return $pdf->stream('Reporte de Campañas del CBHN.pdf','UTF-8');

    }

    public function ReporteUsuarios()
    {
         $usuarios = User::all();
       
        $data = [
            'title1' => 'Sistema de Información Corredor Biológico Hojancha Nandayure',
            date_default_timezone_set('America/Costa_Rica'),
            'date' => date('d/m/Y'),
            'usuarios' => $usuarios
        ]; 
            
        $pdf = PDF::setPaper('letter','landscape')->loadView('admin/usuarios/pdf', $data);
     
        return $pdf->stream('Reporte de Usuarios del CBHN.pdf','UTF-8');

    }
}
