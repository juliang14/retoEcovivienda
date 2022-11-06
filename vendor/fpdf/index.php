<?php


require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header(){
    // Logo
    $this->Image('mill.jpg',10,8,23);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(50);
    // Título
    $this->Cell(100,10,'Reporte XXXXX',1,0,'C');
    // Salto de línea
    $this->Ln(30);

    $this->Cell(40, 10, 'TITULO',1, 0, 'c',0);
    $this->Cell(40, 10, 'TITULO1',1, 0, 'c',0);
    $this->Cell(40, 10, 'TITULO2',1, 0, 'c',0);
    $this->Cell(40, 10, 'TITULO3',1, 1, 'c',0);
}

// Pie de página
function Footer(){
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF('L','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++){
    //$pdf->Cell(0,10,utf8_decode('Imprimiendo línea número ').$i,0,1);
    $pdf->Cell(40, 10, 'celda',1, 0, 'c',0);
    $pdf->Cell(40, 10, 'celda1',1, 0, 'c',0);
    $pdf->Cell(40, 10, 'celda2',1, 0, 'c',0);
    $pdf->Cell(40, 10, 'celda3',1, 1, 'c',0);

}


$pdf->Output();

?>