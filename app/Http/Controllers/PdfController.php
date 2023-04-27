<?php

namespace App\Http\Controllers;



use Illuminate\Support\Facades\DB;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Campaña;
use App\Models\Voluntariado;
use App\Models\User;
use App\Models\Taller;


class PdfController extends Controller
{
    protected $fpdf;

    public function __construct()
    {
        $this->fpdf = new Fpdf;
    }

    public function ReportePersonas() 
    {
        $personas = DB::table('personas')
            ->join('tipo_personas', 'personas.tipo_persona_id', '=', 'tipo_personas.id')
            ->select('personas.*', 'tipo_personas.tipo_persona as tipo_persona_id_tipo_persona')
            ->get();
        $this->fpdf = new Fpdf();
        $this->fpdf->AddPage("landscape"); 
        $this->fpdf->AliasNbPages(); 
        $i = 0;
        $this->fpdf->SetFont('Arial', '', 12);
        //     Crear objeto FPDF y definir encabezado y pie de página
        //     Header para abajo
            //$this->fpdf->Image('zoofari/img/logoCorredor.png', 20, 5, 30); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
            $this->fpdf->SetFont('Helvetica', '', 21); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
            $this->fpdf->Cell(95); // Movernos a la derecha
            $this->fpdf->SetTextColor(0, 174, 0); //color
            $this->fpdf->Cell(110, 15, utf8_decode('Sistema de Información Corredor Biológico Hojancha Nandayure'), 3, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
            $this->fpdf->Ln(3); // Salto de línea
            $this->fpdf->SetTextColor(0); //color
            /* TITULO DE LA TABLA */
            $this->fpdf->SetTextColor(255, 191, 0);
            $this->fpdf->Cell(100); // mover a la derecha
            $this->fpdf->SetFont('Arial', 'B', 16);
            $this->fpdf->Cell(80, 10, utf8_decode("REPORTE DE GESTIÓN DE PERSONAS"), 0, 1, 'C', 0);
            $this->fpdf->Ln(7);
            //Header Fin
            $this->fpdf->SetX(2);
            $this->fpdf->SetFillColor(56, 176, 0); //colorFondo
            $this->fpdf->SetTextColor(255, 255, 255); //colorTexto
            $this->fpdf->SetDrawColor(0, 0, 0); //colorBorde
            $this->fpdf->SetFont('Arial', 'B', 12);
            $this->fpdf->Cell(6, 10, utf8_decode('N°'), 1, 0, 'C', 1);
            $this->fpdf->Cell(70, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
            $this->fpdf->Cell(80, 10, utf8_decode('APELLIDOS'), 1, 0, 'C', 1);
            $this->fpdf->Cell(54, 10, utf8_decode('TIPO DE IDENTIFICACIÓN'), 1, 0, 'C', 1);
            $this->fpdf->Cell(40, 10, utf8_decode('IDENTIFICACIÓN'), 1, 0, 'C', 1);
            $this->fpdf->Cell(15, 10, utf8_decode('EDAD'), 1, 0, 'C', 1);
            $this->fpdf->Cell(28, 10, utf8_decode('TipoPersona'), 1, 1, 'C', 1);
			$this->fpdf->SetFont('Arial', '', 12);
            $this->fpdf->SetTextColor(0, 0, 0); //colorTexto
            $this->fpdf->SetFillColor(255, 255, 255); //color de fondo rgb
            $this->fpdf->SetDrawColor(61, 61, 61); //color de linea  rgb
            $this->fpdf->SetFont('Arial', '', 12);
            foreach ($personas as $row)
                {
                    $this->fpdf->SetX(2);
                    $this->fpdf->Cell(6,8,$row->id,1);
                    $this->fpdf->Cell(70, 8, utf8_decode($row->nombre), 1, 0, 'C', 1);
                    $this->fpdf->Cell(80, 8, utf8_decode($row->apellidos), 1, 0, 'C', 1);
                    $this->fpdf->Cell(54, 8, utf8_decode($row->tipo_identificacion), 1, 0, 'C', 1);
                    $this->fpdf->Cell(40, 8, utf8_decode($row->numero_identificacion), 1, 0, 'C', 1);
                    $this->fpdf->Cell(15, 8, utf8_decode($row->edad), 1, 0, 'C', 1);
                    $this->fpdf->Cell(28, 8, utf8_decode($row->tipo_persona_id_tipo_persona), 1, 1, 'C', 1);
                    $this->fpdf->Ln(0);
                }
        // Generar el archivo fpdf y descargarlo
        $this->fpdf->Output('Reporte de Personas del CBHN.pdf', 'I', true, 'UTF-8');
        exit;
    }

    public function ReporteCampañas() 
    {
        $campañas = Campaña::all();
        $this->fpdf = new Fpdf();
        $this->fpdf->AddPage("landscape"); 
        $this->fpdf->AliasNbPages(); 
        $i = 0;
        $this->fpdf->SetFont('Arial', '', 12);
        //     Crear objeto FPDF y definir encabezado y pie de página
        //     Header para abajo
            //$this->fpdf->Image('zoofari/img/logoCorredor.png', 20, 5, 30); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
            $this->fpdf->SetFont('Helvetica', '', 21); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
            $this->fpdf->Cell(95); // Movernos a la derecha
            $this->fpdf->SetTextColor(0, 174, 0); //color
        //
            $this->fpdf->Cell(110, 15, utf8_decode('Sistema de Información Corredor Biológico Hojancha Nandayure'), 3, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
            $this->fpdf->Ln(3); // Salto de línea
            $this->fpdf->SetTextColor(0); //color
            /* TITULO DE LA TABLA */
            $this->fpdf->SetTextColor(255, 191, 0);
            $this->fpdf->Cell(100); // mover a la derecha
            $this->fpdf->SetFont('Arial', 'B', 16);
            $this->fpdf->Cell(80, 10, utf8_decode("REPORTE DE GESTIÓN DE CAMPAÑAS"), 0, 1, 'C', 0);
            $this->fpdf->Ln(7);
     //     Header Fin
            $this->fpdf->SetX(2);
            $this->fpdf->SetFillColor(56, 176, 0); //colorFondo
            $this->fpdf->SetTextColor(255, 255, 255); //colorTexto
            $this->fpdf->SetDrawColor(0, 0, 0); //colorBorde
            $this->fpdf->SetFont('Arial', 'B', 12);
            $this->fpdf->Cell(6, 10, utf8_decode('N°'), 1, 0, 'C', 1);
            $this->fpdf->Cell(78, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
            $this->fpdf->Cell(88, 10, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C', 1);
            $this->fpdf->Cell(78, 10, utf8_decode('UBICACIÓN'), 1, 0, 'C', 1);
            $this->fpdf->Cell(25, 10, utf8_decode('FECHA'), 1, 0, 'C', 1);
            $this->fpdf->Cell(18, 10, utf8_decode('HORA'), 1, 1, 'C', 1);
			$this->fpdf->SetFont('Arial', '', 12);
            $this->fpdf->SetTextColor(0, 0, 0); //colorTexto
            $this->fpdf->SetFillColor(255, 255, 255); //color de fondo rgb
            $this->fpdf->SetDrawColor(61, 61, 61); //color de linea  rgb
            $this->fpdf->SetFont('Arial', '', 12);
            foreach ($campañas as $row)
                {
                    $this->fpdf->SetX(2);
                    $this->fpdf->Cell(6,8,$row->id,1);
                    $this->fpdf->Cell(78, 8, utf8_decode($row->nombre), 1, 0, 'C', 1);
                    $this->fpdf->Cell(88, 8, utf8_decode($row->ubicacion), 1, 0, 'C', 1);
                    $this->fpdf->Cell(78, 8, utf8_decode($row->descripcion), 1, 0, 'C', 1);
                    $this->fpdf->Cell(25, 8, utf8_decode($row->fecha), 1, 0, 'C', 1);
                    $this->fpdf->Cell(18, 8, utf8_decode($row->hora), 1, 1, 'C', 1);
                    $this->fpdf->Ln(0);
                }
        // Generar el archivo fpdf y descargarlo
        $this->fpdf->Output('Reporte de Campañas del CBHN.pdf', 'I', true, 'UTF-8');
        exit;
    }

    public function ReporteVoluntarios() 
    {
        $voluntariado = Voluntariado::all();
        $this->fpdf = new Fpdf();
        $this->fpdf->AddPage("landscape"); 
        $this->fpdf->AliasNbPages(); 
        $i = 0;
        $this->fpdf->SetFont('Arial', '', 12);
        //     Crear objeto FPDF y definir encabezado y pie de página
        //     Header para abajo
            //$this->fpdf->Image('zoofari/img/logoCorredor.png', 20, 5, 30); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
            $this->fpdf->SetFont('Helvetica', '', 21); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
            $this->fpdf->Cell(95); // Movernos a la derecha
            $this->fpdf->SetTextColor(0, 174, 0); //color
        //
            $this->fpdf->Cell(110, 15, utf8_decode('Sistema de Información Corredor Biológico Hojancha Nandayure'), 3, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
            $this->fpdf->Ln(3); // Salto de línea
            $this->fpdf->SetTextColor(0); //color
            /* TITULO DE LA TABLA */
            $this->fpdf->SetTextColor(255, 191, 0);
            $this->fpdf->Cell(100); // mover a la derecha
            $this->fpdf->SetFont('Arial', 'B', 16);
            $this->fpdf->Cell(80, 10, utf8_decode("REPORTE DE GESTIÓN DE VOLUNTARIADOS"), 0, 1, 'C', 0);
            $this->fpdf->Ln(7);
     //     Header Fin
            $this->fpdf->SetX(2);
            $this->fpdf->SetFillColor(56, 176, 0); //colorFondo
            $this->fpdf->SetTextColor(255, 255, 255); //colorTexto
            $this->fpdf->SetDrawColor(0, 0, 0); //colorBorde
            $this->fpdf->SetFont('Arial', 'B', 12);
            $this->fpdf->Cell(6, 10, utf8_decode('N°'), 1, 0, 'C', 1);
            $this->fpdf->Cell(78, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
            $this->fpdf->Cell(88, 10, utf8_decode('DESCRIPCIÓN'), 1, 0, 'C', 1);
            $this->fpdf->Cell(78, 10, utf8_decode('UBICACIÓN'), 1, 0, 'C', 1);
            $this->fpdf->Cell(25, 10, utf8_decode('FECHA'), 1, 0, 'C', 1);
            $this->fpdf->Cell(18, 10, utf8_decode('HORA'), 1, 1, 'C', 1);
			$this->fpdf->SetFont('Arial', '', 12);
            $this->fpdf->SetTextColor(0, 0, 0); //colorTexto
            $this->fpdf->SetFillColor(255, 255, 255); //color de fondo rgb
            $this->fpdf->SetDrawColor(61, 61, 61); //color de linea  rgb
            $this->fpdf->SetFont('Arial', '', 12);
            foreach ($voluntariado as $row)
                {
                    $this->fpdf->SetX(2);
                    $this->fpdf->Cell(6,8,$row->id,1);
                    $this->fpdf->Cell(78, 8, utf8_decode($row->nombre), 1, 0, 'C', 1);
                    $this->fpdf->Cell(88, 8, utf8_decode($row->ubicacion), 1, 0, 'C', 1);
                    $this->fpdf->Cell(78, 8, utf8_decode($row->descripcion), 1, 0, 'C', 1);
                    $this->fpdf->Cell(25, 8, utf8_decode($row->fecha), 1, 0, 'C', 1);
                    $this->fpdf->Cell(18, 8, utf8_decode($row->hora), 1, 1, 'C', 1);
                    $this->fpdf->Ln(0);
                }
        // Generar el archivo fpdf y descargarlo
        $this->fpdf->Output('Reporte de Voluntariados del CBHN.pdf', 'I', true, 'UTF-8');
        exit;
    }
    
    public function ReporteUsuarios() 
    {
        $usuarios = User::all();
        $this->fpdf = new Fpdf();
        $this->fpdf->AddPage("landscape"); 
        $this->fpdf->AliasNbPages(); 
        $i = 0;
        $this->fpdf->SetFont('Arial', '', 12);
        //     Crear objeto FPDF y definir encabezado y pie de página
            
        //     Header para abajo
        
        // Encabezado
            //$this->fpdf->Image('zoofari/img/logoCorredor.png', 20, 5, 30); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
            $this->fpdf->SetFont('Helvetica', '', 21); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
            $this->fpdf->Cell(95); // Movernos a la derecha
            $this->fpdf->SetTextColor(0, 174, 0); //color
            $this->fpdf->Cell(110, 15, utf8_decode('Sistema de Información Corredor Biológico Hojancha Nandayure'), 3, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
            $this->fpdf->Ln(3); // Salto de línea
            $this->fpdf->SetTextColor(0); //color
            /* TITULO DE LA TABLA */
            $this->fpdf->SetTextColor(255, 191, 0);
            $this->fpdf->Cell(100); // mover a la derecha
            $this->fpdf->SetFont('Arial', 'B', 16);
            $this->fpdf->Cell(80, 10, utf8_decode("REPORTE DE GESTIÓN DE USUARIOS"), 0, 1, 'C', 0);
            $this->fpdf->Ln(7);

            
            
     //     Header Fin
     
            $this->fpdf->SetX(3);
            $this->fpdf->SetFillColor(56, 176, 0); //colorFondo
            $this->fpdf->SetTextColor(255, 255, 255); //colorTexto
            $this->fpdf->SetDrawColor(0, 0, 0); //colorBorde
            $this->fpdf->SetFont('Arial', 'B', 12);
            $this->fpdf->Cell(10, 10, utf8_decode('N°'), 1, 0, 'C', 1);
            $this->fpdf->Cell(130, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
            $this->fpdf->Cell(150, 10, utf8_decode('CORREO ELECTRÓNICO'), 1, 1, 'C', 1);
			$this->fpdf->SetFont('Arial', '', 12);
            $this->fpdf->SetTextColor(0, 0, 0); //colorTexto
            $this->fpdf->SetFillColor(255, 255, 255); //color de fondo rgb
            $this->fpdf->SetDrawColor(61, 61, 61); //color de linea  rgb
            $this->fpdf->SetFont('Arial', '', 12);
            
            foreach ($usuarios as $row)
                {
                    $this->fpdf->SetX(3);
                    $this->fpdf->Cell(10,8,$row->id,1);
                    $this->fpdf->Cell(130, 8, utf8_decode($row->name), 1, 0, 'C', 1);
                    $this->fpdf->Cell(150, 8, utf8_decode($row->email), 1, 1, 'C', 1);
                    $this->fpdf->Ln(0);
                }

            
        // Generar el archivo fpdf y descargarlo
        $this->fpdf->Output('Reporte de Usuarios del CBHN.pdf', 'I', true, 'UTF-8');
        exit;
    }

    public function ReporteTalleres() 
    {
        $talleres = Taller::all();
        $this->fpdf = new Fpdf();
        $this->fpdf->AddPage("landscape"); 
        $this->fpdf->AliasNbPages(); 
        $i = 0;
        $this->fpdf->SetFont('Arial', '', 12);
        //     Crear objeto FPDF y definir encabezado y pie de página
            
        //     Header para abajo
        
        // Encabezado
            //$this->fpdf->Image('zoofari/img/logoCorredor.png', 20, 5, 30); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
            $this->fpdf->SetFont('Helvetica', '', 21); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
            $this->fpdf->Cell(95); // Movernos a la derecha
            $this->fpdf->SetTextColor(0, 174, 0); //color
            $this->fpdf->Cell(110, 15, utf8_decode('Sistema de Información Corredor Biológico Hojancha Nandayure'), 3, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
            $this->fpdf->Ln(3); // Salto de línea
            $this->fpdf->SetTextColor(0); //color
            /* TITULO DE LA TABLA */
            $this->fpdf->SetTextColor(255, 191, 0);
            $this->fpdf->Cell(100); // mover a la derecha
            $this->fpdf->SetFont('Arial', 'B', 16);
            $this->fpdf->Cell(80, 10, utf8_decode("REPORTE DE GESTIÓN DE TALLERES"), 0, 1, 'C', 0);
            $this->fpdf->Ln(7);

            
            
     //     Header Fin
     
            $this->fpdf->SetX(3);
            $this->fpdf->SetFillColor(56, 176, 0); //colorFondo
            $this->fpdf->SetTextColor(255, 255, 255); //colorTexto
            $this->fpdf->SetDrawColor(0, 0, 0); //colorBorde
            $this->fpdf->SetFont('Arial', 'B', 12);
            $this->fpdf->Cell(7, 10, utf8_decode('N°'), 1, 0, 'C', 1);
            $this->fpdf->Cell(85, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
            $this->fpdf->Cell(88, 10, utf8_decode('UBICACIÓN'), 1, 0, 'C', 1);
            $this->fpdf->Cell(50, 10, utf8_decode('TIPO'), 1, 0, 'C', 1); 
            $this->fpdf->Cell(15, 10, utf8_decode('CUPO'), 1, 0, 'C', 1);
            $this->fpdf->Cell(25, 10, utf8_decode('FECHA'), 1, 0, 'C', 1);
            $this->fpdf->Cell(18, 10, utf8_decode('HORA'), 1, 1, 'C', 1);
			$this->fpdf->SetFont('Arial', '', 12);
            $this->fpdf->SetTextColor(0, 0, 0); //colorTexto
            $this->fpdf->SetFillColor(255, 255, 255); //color de fondo rgb
            $this->fpdf->SetDrawColor(61, 61, 61); //color de linea  rgb
            $this->fpdf->SetFont('Arial', '', 12);
            
            foreach ($talleres as $row)
                {
                    $this->fpdf->SetX(3);
                    $this->fpdf->Cell(7,8,$row->id,1);
                    $this->fpdf->Cell(85, 8, utf8_decode($row->nombre), 1, 0, 'C', 1);
                    $this->fpdf->Cell(88, 8, utf8_decode($row->ubicacion), 1, 0, 'C', 1);
                    $this->fpdf->Cell(50, 8, utf8_decode($row->tipo_taller), 1, 0, 'C', 1);
                    $this->fpdf->Cell(15, 8, utf8_decode($row->cupo), 1, 0, 'C', 1);
                    $this->fpdf->Cell(25, 8, utf8_decode($row->fecha), 1, 0, 'C', 1);
                    $this->fpdf->Cell(18, 8, utf8_decode($row->hora), 1, 1, 'C', 1);
                    $this->fpdf->Ln(0);
                }

            
        // Generar el archivo fpdf y descargarlo
        $this->fpdf->Output('Reporte de Talleres del CBHN.pdf', 'I', true, 'UTF-8');
        exit;
    }
}