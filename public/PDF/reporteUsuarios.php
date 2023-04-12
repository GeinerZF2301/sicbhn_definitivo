<?php 

require('./fpdf.php');
require('../../public/conexion/conexion.php');

class PDF extends FPDF {

    // Cabecera de página
    
    function Header() {
        $this->Image('logoCorredor.png', 20, 5, 30); //logo de la empresa,moverDerecha,moverAbajo,tamañoIMG
        $this->SetFont('Helvetica', '', 21); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
        $this->Cell(95); // Movernos a la derecha
        $this->SetTextColor(0, 174, 0); //color

        //creamos una celda o fila
        $this->Cell(110, 15, utf8_decode('Sistema de Información Corredor Biológico Hojancha Nandayure'), 3, 1, 'C', 0); // AnchoCelda,AltoCelda,titulo,borde(1-0),saltoLinea(1-0),posicion(L-C-R),ColorFondo(1-0)
        $this->Ln(3); // Salto de línea
        $this->SetTextColor(0); //color

        /* TITULO DE LA TABLA */
        $this->SetTextColor(255, 191, 0);
        $this->Cell(100); // mover a la derecha
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(80, 10, utf8_decode("REPORTE DE USUARIOS"), 0, 1, 'C', 0);
        $this->Ln(7);

    }
    
    // Pie de página
    
    function Footer(){
        $this->SetY(-15); // Posición: a 1,5 cm del final
        $this->SetFont('Arial', 'I', 8); //tipo fuente, negrita(B-I-U-BIU), tamañoTexto
        $this->Cell(0, 10, utf8_decode('Página ') . $this->PageNo() . '/{nb}', 0, 0, 'C'); //pie de pagina(numero de pagina)
        $this->SetY(-15); // Posición: a 1,5 cm del final
        $this->SetFont('Arial', 'I', 8); //tipo fuente, cursiva, tamañoTexto
        $hoy = date('d/m/Y');
        $this->Cell(540, 10, utf8_decode($hoy), 0, 0, 'C'); // pie de pagina(fecha de pagina)
    }
    
    
    // --------------------METODO PARA ADAPTAR LAS CELDAS------------------------------
    var $widths;
	var $aligns;

    function SetWidths($w)
    {
        // Set the array of column widths
        $this->widths = $w;
    }
    function SetAligns($a)
    {
        // Set the array of column alignments
        $this->aligns = $a;
    }

	function Row($data, $setX)
    {
        // Calculate the height of the row
        $nb = 0;
        for($i=0;$i<count($data);$i++)
            $nb = max($nb,$this->NbLines($this->widths[$i],$data[$i]));
        $h = 5*$nb;
        // Issue a page break first if needed
        $this->CheckPageBreak($h, $setX);
        // Draw the cells of the row
        for($i=0;$i<count($data);$i++)
        {
            $w = $this->widths[$i];
            $a = isset($this->aligns[$i]) ? $this->aligns[$i] : 'C';
            // Save the current position
            $x = $this->GetX();
            $y = $this->GetY();
            // Draw the border
            $this->Rect($x,$y,$w,$h, "DF");
            // Print the text
            $this->MultiCell($w,5,$data[$i],0,$a);
            // Put the position to the right of the cell
            $this->SetXY($x+$w,$y);
        }
        // Go to the next line
        $this->Ln($h);
    }

	function CheckPageBreak($h, $setX) {
		//If the height h would cause an overflow, add a new page immediately
		if ($this->GetY() + $h > $this->PageBreakTrigger) {
			$this->AddPage($this->CurOrientation);
			$this->SetX($setX);
            $this->SetFillColor(56, 176, 0); //colorFondo
            $this->SetTextColor(255, 255, 255); //colorTexto
            $this->SetDrawColor(0, 0, 0); //colorBorde
            $this->SetFont('Arial', 'B', 12);
            

			//volvemos a definir el  encabezado cuando se crea una nueva pagina
			$this->Cell(30, 20, utf8_decode('N°'), 1, 0, 'C', 1);
            $this->Cell(80, 20, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
            $this->Cell(120, 20, utf8_decode('CORREO ELECTRÓNICO'), 1, 1, 'C', 1);
            $this->SetFillColor(255, 255, 255); //colorFondo
            $this->SetTextColor(0, 0, 0); //colorTexto

            
			$this->SetFont('Arial', '', 12);

		}

		if ($setX == 100) {
			$this->SetX(100);
		} else {
			$this->SetX($setX);
		}

	}

	function NbLines($w, $txt) {
		//Computes the number of lines a MultiCell of width w will take
		$cw = &$this->CurrentFont['cw'];
		if ($w == 0) {
			$w = $this->w - $this->rMargin - $this->x;
		}

		$wmax = ($w - 2 * $this->cMargin) * 1000 / $this->FontSize;
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
    // -----------------------------------TERMINA---------------------------------
    }
    
    //------------------OBTENES LOS DATOS DE LA BASE DE DATOS-------------------------
    $data=new ConexionUsuarios();
	$conexion=$data->conect();
	$strquery ="SELECT * FROM `users`";
	$result = $conexion->prepare($strquery);
	$result->execute();
	$data = $result->fetchall(PDO::FETCH_ASSOC);
    
    /* IMPORTANTE: si estan usando MVC o algún CORE de php les recomiendo hacer uso del metodo
    que se llama select_all ya que es el que haria uso del fetchall tal y como ven en la linea 161
    ya que es el que devuelve un array de todos los registros de la base de datos
    si hacen uso de el metodo select hara uso de fetch y este solo selecciona una linea*/
    
    //--------------TERMINA BASE DE DATOS-----------------------------------------------
    
    // Creación del objeto de la clase heredada
    $pdf = new PDF();
    $pdf->AddPage("landscape"); 
    $pdf->AliasNbPages(); 
    $i = 0;
    $pdf->SetFont('Arial', '', 12);

    
// -----------ENCABEZADO------------------
            $pdf->SetX(30);
            $pdf->SetFillColor(56, 176, 0); //colorFondo
            $pdf->SetTextColor(255, 255, 255); //colorTexto
           
            $pdf->SetDrawColor(0, 0, 0); //colorBorde
            $pdf->SetFont('Arial', 'B', 12);
            $pdf->Cell(30, 10, utf8_decode('N°'), 1, 0, 'C', 1);
            $pdf->Cell(80, 10, utf8_decode('NOMBRE'), 1, 0, 'C', 1);
            $pdf->Cell(120, 10, utf8_decode('CORREO ELECTRÓNICO'), 1, 1, 'C', 1);
			$pdf->SetFont('Arial', '', 12);
            $pdf->SetTextColor(0, 0, 0); //colorTexto
            

// -------TERMINA----ENCABEZADO------------------

$pdf->SetFillColor(255, 255, 255); //color de fondo rgb
$pdf->SetDrawColor(61, 61, 61); //color de linea  rgb

$pdf->SetFont('Arial', '', 12);

   




//El ancho de las celdas
$pdf->SetWidths(array(30, 80, 120)); //???
// esto no lo mencione en el video pero también pueden poner la alineación de cada COLUMNA!!!


for ($i = 0; $i < count($data); $i++) {

    $pdf->Row(array($i + 1, $data[$i]['name'], utf8_decode($data[$i]["email"])), 30);
}
    // cell(ancho, largo, contenido,borde?, salto de linea?)
    
    $pdf->Output('Reporte de Usuarios.pdf', 'I');//nombreDescarga, Visor(I->visualizar - D->descargar)
    ?>