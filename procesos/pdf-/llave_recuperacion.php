<?php

require 'lib_pdf/fpdf.php';


	// NUESTRA CLASE 
$pdf= new FPDF('L','mm',array(110,210));

//PARA INICAR DEBEMOS AGREGAR UNA NUEVA PAGINA
$pdf->AddPage();
//PONER FUENTE


//SE MANEJAN POR CELDAS O MULTICELDAS
$pdf->SetFont('Arial','I',20);
$pdf->Cell(0, 6,'"U.E.B ANGEL CELESTINO BELLO"',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(24,188,185);
$pdf->SetY(20);
$pdf->Cell(0, 6,'Usuario',1,1,'C',1);
$pdf->Cell(190, 6,$_GET['user'],1,1,'C');
$pdf->Cell(0, 6,'ID CUENTA UNICA',1,1,'C',1);
$pdf->SetX(10);
$pdf->Cell(190, 6,$_GET['ID'],1,1,'C');

$pdf->Cell(0, 6,'Llave Hash',1,1,'C',1);

$pdf->Cell(0, 6,$_GET['key'],1,1,'C');
$pdf->Cell(95, 6,'Pregunta Secreta',1,0,'C',1);
$pdf->Cell(95, 6,'Respuesta Secreta',1,1,'C',1);
$pdf->Cell(95, 6,$_GET['ps'],1,0,'C');
$pdf->Cell(95, 6,$_GET['rs'],1,1,'C');
$pdf->Cell(0, 6,'',1,1,'C',1);

$pdf->SetFont('Arial','B',10);
$pdf->SetY(74);
$pdf->Cell(0, 6,utf8_decode('NOTA: Es Importante Guardar este Archivo PDF, este es su Llave en caso de que olvide su Usuario o Contraseña'),0,1,'C');



//para mostrar el pdf
$pdf->Output();


?>