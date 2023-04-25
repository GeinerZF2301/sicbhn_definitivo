<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    protected $fpdf;
    

    public function __construct()
    {
        $this->fpdf = new Fpdf;
        
    }

    public function index() 
    {
        $query = DB::select("SELECT * FROM personas");
    
        // Crear objeto FPDF y definir encabezado y pie de página
        $this->fpdf = new Fpdf();
        $this->fpdf->AddPage();
        $this->fpdf->SetFont('Arial','B',16);
        $this->fpdf->Cell(40,10,'Tabla de datos');
        $this->fpdf->Ln();
    
        // Crear las columnas de la tabla y rellenarlas con los datos de la base de datos
        $this->fpdf->SetFont('Arial','B',12);
        $this->fpdf->Cell(20, 10, utf8_decode('N°'), 1, 0, 'C', 1);
        $this->fpdf->Cell(50, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
        $this->fpdf->Cell(60, 10, utf8_decode('APELLIDOS'), 1, 0, 'C', 1);
        $this->fpdf->Cell(60, 10, utf8_decode('TIPO DE IDENTIFICACIÓN'), 1, 0, 'C', 1);
        $this->fpdf->Cell(40, 10, utf8_decode('IDENTIFICACIÓN'), 1, 0, 'C', 1);
        $this->fpdf->Cell(40, 10, utf8_decode('EDAD'), 1, 1, 'C', 1);
        $this->fpdf->Ln();
    
        $this->fpdf->SetFont('Arial','',10);
        foreach ($query as $row)
        {
            $this->fpdf->Cell(20,10,$row->id,1);
            $this->fpdf->Cell(50, 10, utf8_decode($row->nombre), 1, 0, 'C', 1);
            $this->fpdf->Cell(60, 10, utf8_decode($row->apellidos), 1, 0, 'C', 1);
            $this->fpdf->Cell(60, 10, utf8_decode($row->tipo_identificacion), 1, 0, 'C', 1);
            // $this->fpdf->Cell(40, 10, utf8_decode($row->identificacion), 1, 0, 'C', 1);
            $this->fpdf->Cell(40, 10, utf8_decode($row->edad), 1, 1, 'C', 1);
            $this->fpdf->Ln();
        }
    
        // Generar el archivo fpdf y descargarlo
        $this->fpdf->Output('tabla.pdf','I');
        exit;
    }

    
}