<?php
// Incluye la biblioteca TCPDF
require_once('tcpdf/tcpdf.php');

// Crea una nueva instancia de TCPDF
$pdf = new TCPDF();

// Establece el formato del papel y la orientación (opcional)
$pdf->setFormat(80, 150); // Tamaño personalizado para simular un ticket
$pdf->SetMargins(5, 5, 5);

// Agrega una nueva página
$pdf->AddPage();

// Agrega contenido al PDF
$pdf->SetFont('times', 'B', 12);
$pdf->Cell(0, 10, 'TIENDA ABC', 0, 1, 'C'); // Nombre de la tienda

$pdf->SetFont('times', '', 10);
$texto = 'Gracias por su compra.';
$pdf->MultiCell(0, 10, $texto, 0, 'C');

// Línea divisoria
$pdf->Ln(2);
$pdf->Cell(0, 0, '', 'T');

// Detalles del producto (puedes ajustar según tus necesidades)
$pdf->Ln(2);
$pdf->Cell(40, 10, 'Producto 1', 0, 0);
$pdf->Cell(40, 10, 'Cantidad: 1', 0, 0);
$pdf->Cell(40, 10, '$10.00', 0, 1);

$pdf->Cell(40, 10, 'Producto 2', 0, 0);
$pdf->Cell(40, 10, 'Cantidad: 2', 0, 0);
$pdf->Cell(40, 10, '$20.00', 0, 1);

// Total
$pdf->Ln(2);
$pdf->Cell(0, 0, '', 'T');
$pdf->Ln(2);
$pdf->Cell(40, 10, 'Total:', 0, 0);
$pdf->Cell(0, 10, '$30.00', 0, 1);

// Pie de página
$pdf->Ln(5);
$pdf->SetFont('times', 'I', 8);
$pdf->Cell(0, 10, 'Gracias por su visita a la TIENDA ABC', 0, 1, 'C');

// Guarda el PDF en un archivo o muestra en el navegador
$pdf->Output('ticket.pdf', 'D');
?>
