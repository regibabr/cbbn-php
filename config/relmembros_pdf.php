

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
$pdf->Cell(100, 8, 'LISTA DE MEMBROS', 0);
$pdf->Ln(15);
	
	
	
	
	
	
	
	
	
	
	
	
	
	$pdf->SetFont('Arial', 'B', 8);
	$pdf->Cell(25, 8, 'Id', 1);
$pdf->Cell(50, 8, 'Nome', 1);
$pdf->Cell(40, 8, 'Endereço', 1);
$pdf->Cell(20, 8, 'Número', 1);
$pdf->Cell(25, 8, 'Bairro', 1);
$pdf->Cell(25, 8, 'Celular', 1);
$pdf->Ln(1);

$pdf->SetFont('Arial', '', 8);
$pdf->Ln(7);
	
	$pdo=new PDO ('mysql:host=localhost;dbname=ibbn','root','');
	$sql = $pdo->prepare("SELECT * FROM membros ORDER BY nome_membro ASC"
	
	);
	
	
	
	$sql->execute();
	foreach($sql as $resultado){
		
		$pdf->Cell(25,8, $resultado['id_membro'],1,0,'C');
		$pdf->Cell(50,8, $resultado['nome_membro'],1,0,'C');
		$pdf->Cell(40,8, $resultado['endereco_membro'],1,0,'C');
		$pdf->Cell(20,8, $resultado['numero_membro'],1,0,'C');
		$pdf->Cell(25,8, $resultado['bairro_membro'],1,0,'C');
		$pdf->Cell(25,8, $resultado['foneCelular'],1,1,'C');
	}
	
	$pdf->OutPut();
	
	
?>