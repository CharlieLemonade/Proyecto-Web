<?php
require('fpdf/fpdf.php');

// Recibe los datos del pedido
$titulo = $_POST['titulo'];
$cantidad = $_POST['cantidad'];

// Crea una instancia de FPDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Detalle de Compra:');
$pdf->Ln(); // Salto de línea
$pdf->Cell(40, 10, 'Título: ' . $titulo);
$pdf->Ln();
$pdf->Cell(40, 10, 'Cantidad: ' . $cantidad);

// Guarda o muestra el PDF (puedes personalizar esto según tus necesidades)
$pdf->Output('F'); // 'I' para mostrar en el navegador, 'F' para guardar en un archivo

?>
