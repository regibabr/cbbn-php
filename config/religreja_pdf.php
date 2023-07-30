<?php


// Instanciation of inherited class
	define('FPDF_FONTPATH', 'font/');
	require ('../fpdf/fpdf.php');
	require ('../fpdf/header_fpdf.php');
	
	
	$pdf = new FPDF ();
	$pdf->Open();
	$pdf->AddPage();
	
	
	$pdf->SetFont('Arial', '', 10);
$pdf->Image('../img/LogoIBBN.jpg' , 10 ,8, 15 , 13,'jpg');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'IGREJA BATISTA BOAS NOVAS', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Data: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTA DE IGREJAS', 0);
$pdf->Ln(15);
	
	
	
	
	
	
	
	
	
	
	
	
	
	$pdf->SetFont('Arial', 'B', 8);
	$pdf->Cell(10, 8, 'Id', 1);
$pdf->Cell(50, 8, 'Nome', 1);
$pdf->Cell(40, 8, 'Endereço', 1);
$pdf->Cell(15, 8, 'Número', 1);
$pdf->Cell(25, 8, 'Bairro', 1);
$pdf->Cell(50, 8, 'Dirigente', 1);
$pdf->Ln(1);

$pdf->SetFont('Arial', '', 8);
$pdf->Ln(7);
	
	$pdo=new PDO ('mysql:host=localhost;dbname=ibbn','root','');
	$sql = $pdo->prepare("SELECT * FROM igreja ORDER BY nome_igreja ASC");
	
	
	$sql->execute();
	foreach($sql as $resultado){
		
		$pdf->Cell(10,8, $resultado['id_igreja'],1,0,'C');
		$pdf->Cell(50,8, $resultado['nome_igreja'],1,0,'C');
		$pdf->Cell(40,8, $resultado['endereco_igreja'],1,0,'C');
		$pdf->Cell(15,8, $resultado['numero_igreja'],1,0,'C');
		$pdf->Cell(25,8, $resultado['bairro_igreja'],1,0,'C');
		$pdf->Cell(50,8, $resultado['dirigente'],1,1,'C');
	}
	
	$pdf->OutPut();
	
	
?>