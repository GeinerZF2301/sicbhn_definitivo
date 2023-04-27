<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use App\Models\Persona;
class PdfController extends Controller
{
    protected $fpdf;
    protected $widths;
    protected $aligns;

    public function __construct()
    {
        $this->fpdf = new Fpdf;
        $this->widths = [];
        $this->aligns = [];
    }

    public function ReportePersonas() 
    {
        $personas = Persona::all();

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
     //     Header Fin
        
    

            function SetWidths($w)
            {
                // Set the array of column widths
                $this->fpdf->widths = $w;
            }
            function SetAligns($a)
            {
                // Set the array of column alignments
                $this->fpdf->aligns = $a;
            }

            function Row($data, $setX)
            {
                // Calculate the height of the row
                $nb = 0;
                for($i=0;$i<count($data);$i++)
                    $nb = max($nb,$this->fpdf->NbLines($this->fpdf->widths[$i],$data[$i]));
                $h = 5*$nb;
                // Issue a page break first if needed
                $this->fpdf->CheckPageBreak($h, $setX);
                // Draw the cells of the row
                for($i=0;$i<count($data);$i++)
                {
                    $w = $this->fpdf->widths[$i];
                    $a = isset($this->fpdf->aligns[$i]) ? $this->fpdf->aligns[$i] : 'C';
                    // Save the current position
                    $x = $this->fpdf->GetX();
                    $y = $this->fpdf->GetY();
                    // Draw the border
                    $this->fpdf->Rect($x,$y,$w,$h, "DF");
                    // Print the text
                    $this->fpdf->MultiCell($w,5,$data[$i],0,$a);
                    // Put the position to the right of the cell
                    $this->fpdf->SetXY($x+$w,$y);
                }
                // Go to the next line
                $this->fpdf->Ln($h);
            }

            function CheckPageBreak($h, $setX) {
                //If the height h would cause an overflow, add a new page immediately
                if ($this->fpdf->GetY() + $h > $this->fpdf->PageBreakTrigger) {
                    $this->fpdf->AddPage($this->fpdf->CurOrientation);
                    $this->fpdf->SetX($setX);
                    $this->fpdf->SetFillColor(56, 176, 0); //colorFondo
                    $this->fpdf->SetTextColor(255, 255, 255); //colorTexto
                    $this->fpdf->SetDrawColor(0, 0, 0); //colorBorde
                    $this->fpdf->SetFont('Arial', 'B', 12);
                    
        
                    //volvemos a definir el  encabezado cuando se crea una nueva pagina
                    $this->fpdf->Cell(20, 10, utf8_decode('N°'), 1, 0, 'C', 1);
                    $this->fpdf->Cell(50, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
                    $this->fpdf->Cell(60, 10, utf8_decode('APELLIDOS'), 1, 0, 'C', 1);
                    $this->fpdf->Cell(60, 10, utf8_decode('TIPO DE IDENTIFICACIÓN'), 1, 0, 'C', 1);
                    $this->fpdf->Cell(40, 10, utf8_decode('IDENTIFICACIÓN'), 1, 0, 'C', 1);
                    $this->fpdf->Cell(40, 10, utf8_decode('EDAD'), 1, 1, 'C', 1);
                    $this->fpdf->SetFillColor(255, 255, 255); //colorFondo
                    $this->fpdf->SetTextColor(0, 0, 0); //colorTexto
        
                    
                    $this->fpdf->SetFont('Arial', '', 12);
        
                }
        
                if ($setX == 100) {
                    $this->fpdf->SetX(100);
                } else {
                    $this->fpdf->SetX($setX);
                }
        
            }

            function NbLines($w, $txt) {
                //Computes the number of lines a MultiCell of width w will take
                $cw = &$this->fpdf->CurrentFont['cw'];
                if ($w == 0) {
                    $w = $this->fpdf->w - $this->fpdf->rMargin - $this->fpdf->x;
                }
        
                $wmax = ($w - 2 * $this->fpdf->cMargin) * 1000 / $this->fpdf->FontSize;
                $s = str_replace("\r", '', $txt);
                $nb = strlen($s);
                if ($nb > 0 and $s[$nb - 1] == "\n") {
                    $nb--;
                }
        
                $sep = -1;
                $i = 0;
                $j = 0;
                $l = 0;
                $nl = 1;
                while ($i < $nb) {
                    $c = $s[$i];
                    if ($c == "\n") {
                        $i++;
                        $sep = -1;
                        $j = $i;
                        $l = 0;
                        $nl++;
                        continue;
                    }
                    if ($c == ' ') {
                        $sep = $i;
                    }
        
                    $l += $cw[$c];
                    if ($l > $wmax) {
                        if ($sep == -1) {
                            if ($i == $j) {
                                $i++;
                            }
        
                        } else {
                            $i = $sep + 1;
                        }
        
                        $sep = -1;
                        $j = $i;
                        $l = 0;
                        $nl++;
                    } else {
                        $i++;
                    }
        
                }
                return $nl;
            }

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
            $this->fpdf->Cell(28, 10, utf8_decode('PAIS'), 1, 1, 'C', 1);
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
                    $this->fpdf->Cell(28, 8, utf8_decode($row->pais), 1, 1, 'C', 1);
                    $this->fpdf->Ln(0);
                }
    
        

        // Generar el archivo fpdf y descargarlo
        $this->fpdf->Output('Reporte de Personas.pdf', 'I');
        exit;
    }

    
}