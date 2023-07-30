<?php
include_once("conn.php");

$nome = $_POST['tNome'];
$endereco = $_POST['tEnd'];
$numero = $_POST ['tNum'];
$complemento = $_POST['tCompl'];
$cep = $_POST['tCep'];
$bairro = $_POST ['tBairro'];
$cidade = $_POST['tCid'];
$estado = $_POST['tEst'];
$pais = $_POST ['tPais'];
$pai = $_POST['tNPai'];
$mae = $_POST['tNMae'];
$datanasc = $_POST ['tNasc'];
$estadocivil = $_POST['teCivil'];
$conjugue = $_POST['tNConj'];
$datacasamento = $_POST ['tCasamento'];
$profissao = $_POST['tProf'];
$situacaoprof = $_POST['tSitProf'];
$escolaridade = $_POST ['tEsc'];
$rg = $_POST['tRG'];
$cpf = $_POST['tCPF'];
$email = $_POST ['tEmail'];
$fonecasa = $_POST['tFoneCasa'];
$fonecel = $_POST['tFoneCel'];
$sexo = $_POST ['tSexo'];
$posicao = $_POST['tPos'];
$situacao = $_POST['tSit'];
$databatismo = $_POST['tBatismo'];
$id_igreja = $_POST['Tidigreja'];





$sql = "INSERT INTO membros (nome_membro, endereco_membro, numero_membro, complemento, cep_membro, bairro_membro, cidade_membro, estado_membro, pais_membro, nomePai, nomeMae, 
dataNasc, estadoCivil, conjugue, dataCasamento, profissao, situacaoProf, escolaridade, rg, cpf, email,
foneResidencial, foneCelular, sexo, posicao, situacao, dataBatismo, id_igreja ) VALUES ('$nome', '$endereco', '$numero','$complemento','$cep', 
'$bairro', '$cidade', '$estado', '$pais', '$pai', '$mae', '$datanasc', '$estadocivil', '$conjugue', '$datacasamento',
 '$profissao','$situacaoprof' ,'$escolaridade', '$rg', '$cpf', '$email', '$fonecasa', '$fonecel','$sexo','$posicao',
'$situacao','$databatismo', $id_igreja)";

$resultado_usuario= mysqli_query($mysqli,$sql);

if(mysqli_affected_rows($mysqli) !=0){
	echo"
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/www.ibbn/config/cadMembros.php'>
	<script type=\"text/javascript\">
	alert(\"Usuario cadastrado com sucesso.\");
	</script>
	";
}else{
	
	echo "
	<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/www.ibbn/config/cadMembros.php'>
	<script type=\"text/javascript\">
	alert(\"O Usuario nao foi cadastrado com sucesso.\");
	</script>
	";
	
	
	
}
	
	


?>























