

<?php
include_once("conn.php");


$nomeCongreg = $_POST['tNomeIgreja'];
$endCongreg = $_POST['tEndIgreja'];
$numeroCongreg = $_POST['tNumIgreja'];
$cepCongreg = $_POST['tCepIgreja'];
$bairroCongreg = $_POST['tBairroIgreja'];
$cidadeCongreg = $_POST['tCidIgreja'];
$estadoCongreg = $_POST['tEstIgreja'];
$paisCongreg = $_POST['tPaisIgreja'];
$telefoneCongreg = $_POST['tFoneIgreja'];
$dirigenteCongreg = $_POST['tDirigente'];
$tipoCongreg = $_POST['tTipo'];




$sql = "INSERT INTO igreja (nome_igreja, endereco_igreja, numero_igreja, cep_igreja,
bairro_igreja, cidade_igreja, estado_igreja, pais_igreja, tel_igreja, dirigente, tipo ) 
VALUES ('$nomeCongreg', '$endCongreg', '$numeroCongreg','$cepCongreg','$bairroCongreg', 
'$cidadeCongreg', '$estadoCongreg', '$paisCongreg', '$telefoneCongreg', '$dirigenteCongreg', '$tipoCongreg')";

$resultado_usuario= mysqli_query($mysqli,$sql);

if(mysqli_affected_rows($mysqli) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/www.ibbn/config/cadCongregacao.php'>
	<script type=\"text/javascript\">
	alert(\"Igreja cadastrada com sucesso.\");
	</script>
	";
}else{
	
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/www.ibbn/config/cadCongregacao.php'>
	<script type=\"text/javascript\">
	alert(\"A Igreja nao foi cadastrada.\");
	</script>
	";
	
	

}


?>