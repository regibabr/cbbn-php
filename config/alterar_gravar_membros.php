

<?php
include_once 'conn.php';

$id = $_REQUEST['codigo'];
$nome = $_REQUEST['tNome'];
$endereco = $_REQUEST['tEnd'];
$numero = $_REQUEST ['tNum'];
$complemento = $_REQUEST['tCompl'];
$cep = $_REQUEST ['tCep'];
$bairro = $_REQUEST ['tBairro'];
$cidade = $_REQUEST['tCid'];
$estado = $_REQUEST['tEst'];
$pais = $_REQUEST ['tPais'];
$pai = $_REQUEST['tNPai'];
$mae = $_REQUEST['tNMae'];
$datanasc = $_REQUEST ['tNasc'];
$estadocivil = $_REQUEST['tecivil'];
$conjugue = $_REQUEST['tNConj'];
$datacasamento = $_REQUEST ['tCasamento'];
$profissao = $_REQUEST['tProf'];
$situacaoprof = $_REQUEST['tSitProf'];
$escolaridade = $_REQUEST ['tEsc'];
$rg = $_REQUEST['tRG'];
$cpf = $_REQUEST['tCPF'];
$email = $_REQUEST ['tEmail'];
$fonecasa = $_REQUEST['tFoneCasa'];
$fonecel = $_REQUEST['tFoneCel'];
$sexo = $_REQUEST ['tSexo'];
$posicao = $_REQUEST['tPos'];
$situacao = $_REQUEST['tSit'];
$databatismo = $_REQUEST['tBatismo'];
$id_igreja = $_REQUEST['Tidigreja'];


$sql = "update membros set nome_membro='".$nome."',endereco_membro='".$endereco."',numero_membro='".$numero."',complemento='".$complemento."',
cep_membro='".$cep."',bairro_membro='".$bairro."',cidade_membro='".$cidade."',estado_membro='".$estado."',pais_membro='".$pais."',
nomePai='".$pai."',nomeMae='".$mae."',dataNasc='".$datanasc."',estadoCivil='".$estadocivil."',conjugue='".$conjugue."',dataCasamento='".$datacasamento."',
profissao='".$profissao."',situacaoProf='".$situacaoprof."',escolaridade='".$escolaridade."',rg='".$rg."',cpf='".$cpf."',
email='".$email."',foneResidencial='".$fonecasa."',foneCelular='".$fonecel."',sexo='".$sexo."',posicao='".$posicao."',
situacao='".$situacao."',dataBatismo='".$databatismo."',id_igreja='".$id_igreja."' 


where id_membro=".$id;






$query = mysqli_query($mysqli,$sql) or die(mysql_error());
$row = mysqli_fetch_object($query);
header("Location: relmembros.php");

?>
