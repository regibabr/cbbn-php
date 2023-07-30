<?php
include_once 'conn.php';
?>


<?php
session_start();
if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])){
	
	header("Location: ../index.php");
	exit;		
		
		
	}

?>


<?php



$id = $_REQUEST['cod'];

$sql = "select * from membros where id_membro=".$id;
$query = mysqli_query($mysqli,$sql) or die(mysql_error());
$row = mysqli_fetch_object($query);

$nome_alterar = $row->nome_membro;
$endereco_alterar = $row->endereco_membro;
$numero_alterar = $row->numero_membro;
$complemento_alterar = $row->complemento;
$cep_alterar = $row->cep_membro;
$bairro_alterar = $row->bairro_membro;
$cidade_alterar = $row->cidade_membro;
$estado_alterar = $row->estado_membro;
$pais_alterar = $row->pais_membro;
$pai_alterar = $row->nomePai;
$mae_alterar = $row->nomeMae;
$datanasc_alterar = $row->dataNasc;
$estadocivil_alterar = $row->estadoCivil;
$conjugue_alterar = $row-> conjugue;
$datacasamento_alterar = $row->dataCasamento;
$profissao_alterar = $row->profissao;
$situacaoprof_alterar = $row->situacaoProf;
$escolaridade_alterar = $row->escolaridade;
$rg_alterar = $row->rg;
$cpf_alterar = $row->cpf;
$email_alterar = $row->email;
$fonecasa_alterar = $row->foneResidencial;
$fonecel_alterar = $row->foneCelular;
$sexo_alterar = $row->sexo;
$posicao_alterar = $row->posicao;
$situacao_alterar = $row->situacao;
$databatismo_alterar = $row->dataBatismo;
$id_igreja_alterar = $row->id_igreja;


?>


<html>

<head>
<meta charset="UTF-8">
<link href="../css\stylesis.css" rel="stylesheet"/>
<title>HERDEIROS - Gestão de igrejas</title>


</head>



<body>

<div id = "corpo">

<div id="menu">
<nav>
			<ul>
			<li><a href="#">Cadastro</a>
			<ul>
				<li><a href="cadCongregacao.php">Igrejas</a></li>
				<li><a href="cadMembros.php">Membros</a></li>
			</ul>
			</li>	
			<li><a href="#">Listas</a></li>	
			<li><a href="#">Informações</a></li>
			<li><a href="#">Opções</a></li>
			<li><a href="logout.php">Sair</a></li>
			</ul>
</nav>
</div>

<div id="icones">
<div id="igreja">
<img src="../imgsis/iconeIgreja.png">
</div>

<div id="membros">
<a href="relmembros.php" id="previous"><img src="../imgsis/iconeMembros.png"></a>
</div>



<div id="cad">
	<form method ="GET" action="alterar_gravar_membros.php">
	<input type="hidden" name="codigo" value="<?php echo $id ?>">
	
<div id="um">

<p><label for="cNome"> Nome: <input type="text" name= "tNome" id="cNome" size="20" maxlength="30" placeholder="Nome completo" value="<?php if($nome_alterar != null) { echo $nome_alterar;}else{"";} ?>"></p></label>

<p><label for="cEnd">Endereço: <input type="text" name= "tEnd" id="cEnd" size="20" maxlength="50" placeholder="Rua, Av, travessa" value="<?php if($endereco_alterar!= null) { echo $endereco_alterar;}else{"";} ?>"/></p></label>

<p><label for="cNum">Numero: <input type="number" name="tNum" id="cNum" min="0"  max="9999" value="<?php if($numero_alterar!= null) { echo $numero_alterar;}else{"";} ?>"/></p></label>

<p><label for="cCompl">Complemento: <input type="text" name= "tCompl" id="cCompl" size="20" maxlength="30" placeholder="Casa, Apt..." value="<?php if($complemento_alterar!= null) { echo $complemento_alterar;}else{"";} ?>"/> </p></label>

<p><label for="cCep">CEP: <input type="number" name="tCep" id="cCep" maxlength="8" value="<?php if($cep_alterar!= null) { echo $cep_alterar;}else{"";} ?>"/></p></label>

<p><label for="cBairro">Bairro: <input type="text" name= "tBairro" id="cBairro" size="20" maxlength="30" value="<?php if($bairro_alterar!= null) { echo $bairro_alterar;}else{"";} ?>"/></p></label>

<p><label for="cCid">Cidade</label>
<input type="text" name="tCid" id="cCid" maxlength="20" size="20" placeholder="Sua cidade" list="cidades" value="<?php if($cidade_alterar!= null) { echo $cidade_alterar;}else{"";} ?>" /></p>
<datalist id="cidades">
	<option value="Salvador"></option>
</datalist>	


<p><label for="cEst">Estado</label>
<input type="text" name="tEst" id="cEst" maxlength="20" size="20" placeholder="Seu Estado" list="estado" value="<?php if($estado_alterar!= null) { echo $estado_alterar;}else{"";} ?>"/></p>
<datalist id="estado">
	<option value="Bahia"></option>
</datalist>	

<p><label for="cPais">País:</label>
<input type="text" name="tPais" id="cPais" maxlength="20" size="20" placeholder="Seu País" list="pais" value="<?php if($pais_alterar!= null) { echo $pais_alterar;}else{"";} ?>"/></p>
<datalist id="pais">
	<option value="Brasil"></option>
</datalist>	

</div>



<div id="dois">



<p><label for="cNPai"> Nome do pai: <input type="text" name= "tNPai" id="cNPai" size="20" maxlength="30" placeholder="Nome do pai" value="<?php if($pai_alterar!= null) { echo $pai_alterar;}else{"";} ?>"/></p></label>
<p><label for="cNMae"> Nome da mãe: <input type="text" name= "tNMae" id="cNMae" size="20" maxlength="30" placeholder="Nome da mãe" value="<?php if($mae_alterar!= null) { echo $mae_alterar;}else{"";} ?>"/></p></label>



<p><label for="cNasc">Data de Nascimento <input type="date" name="tNasc" id="cNasc" value="<?php if($datanasc_alterar!= null) { echo $datanasc_alterar;}else{"";} ?>"/></p></label>





<!-- ESTADO CIVIL -->


<?php		
// inicializar variáveis a vazio
$check0 = $check1 = $check2 = "";

/* verificar qual o valor contido na variável $situacaoprof_alterar
 * e preencher a variável de marcação com o atributo "selected"
 */
switch ($estadocivil_alterar) {
  case "Casado": {
    $check0 = "selected";
    break;
  }
  case "Solteiro": {
    $check1 = "selected";
    break;
  }
  case "Viuvo": {
    $check2 = "selected";
    break;
  }
}


echo '
<p> <label for="ceCivil">Estado Civil:</label> 
  <select name="tecivil">
    <option value="0" '.$check0.'>Casado</option>
    <option value="1" '.$check1.'>Solteiro</option>
	<option value="2" '.$check2.'>Viuvo</option>
  </select>	';
		
		
?>		

	
	
	
	
	
	
	
	
	
	

<p><label for="cNConj"> Cônjugue: <input type="text" name= "tNConj" id="cNConj" size="20" maxlength="30" placeholder="Nome do esposo(a)" value="<?php if($conjugue_alterar!= null) { echo $conjugue_alterar;}else{"";} ?>"/></p></label>




<p><label for="cCasamento">Data de casamento <input type="date" name="tCasamento" id="cCasamento" value="<?php if($datacasamento_alterar!= null) { echo $datacasamento_alterar;}else{"";} ?>"/></p></label>
<p><label for="cBatismo">Data de batismo <input type="date" name="tBatismo" id="cBatismo" value="<?php if($databatismo_alterar!= null) { echo $databatismo_alterar;}else{"";} ?>"/></p></label>







<p><label for="cProf">Profissão: <input type="text" name= "tProf" id="cProf" size="20" maxlength="30" value="<?php if($profissao_alterar!= null) { echo $profissao_alterar;}else{"";} ?>"/> </p></label>








<!-- SITUAÇÃO PROFISSIONAL -->		
		
<?php		
// inicializar variáveis a vazio
$check0 = $check1 = "";

/* verificar qual o valor contido na variável $situacaoprof_alterar
 * e preencher a variável de marcação com o atributo "selected"
 */
switch ($situacaoprof_alterar) {
  case "Trabalhando": {
    $check0 = "selected";
    break;
  }
  case "Desempregado": {
    $check1 = "selected";
    break;
  }
  
  }



echo '
<label for="cSit">Situação Profissional: </label>  
  <select name="tSitProf" id="cSit">
    <option value="0" '.$check0.'>Trabalhando</option>
    <option value="1" '.$check1.'>Desempregado</option>
  </select>	';
		
		
?>		
























</div>



<div id="tres">





<!-- ESCOLARIDADE -->


<?php		
// inicializar variáveis a vazio
$check0 = $check1 = $check2 = $check3 = $check4 = $check5 = $check6 = "";

/* verificar qual o valor contido na variável $situacaoprof_alterar
 * e preencher a variável de marcação com o atributo "selected"
 */
switch ($escolaridade_alterar) {
  case "Nenhum": {
    $check0 = "selected";
    break;
  }
  case "Fundamental Incompleto": {
    $check1 = "selected";
    break;
  }
  case "Fundamental Completo": {
    $check2 = "selected";
    break;
  }
  case "Médio Incompleto": {
    $check3 = "selected";
    break;
  }
  case "Médio Completo": {
    $check4 = "selected";
    break;
  }
  case "Superior Completo": {
    $check5 = "selected";
    break;
  }
  case "Superior Incompleto": {
    $check6 = "selected";
    break;
  }
}


echo '
<p> <label for="cEsc">Escolaridade:</label> 
  <select name="tEsc" id="cEsc">
    <option value="0" '.$check0.'>Nenhum</option>
    <option value="1" '.$check1.'>Fundamental Incompleto</option>
	<option value="2" '.$check2.'>Fundamental Completo</option>
	<option value="3" '.$check3.'>Médio Incompleto</option>
	<option value="4" '.$check4.'>Médio Completo</option>
	<option value="5" '.$check5.'>Superior Completo</option>
	<option value="6" '.$check6.'>Superior incompleto</option>
  </select>	';
		
		
?>	















<p><label for="cRG">RG: <input type="number" name="tRG" id="cRG" maxlength="10" value="<?php if($rg_alterar!= null) { echo $rg_alterar;}else{"";} ?>" /></p></label>
<p><label for="cCPF">CPF: <input type="number" name="tCPF" id="cCPF" maxlength="11" value="<?php if($cpf_alterar!= null) { echo $cpf_alterar;}else{"";} ?>"/></p></label>


<p><label for="cEmail">Email: <input type="email" name= "tEmail" id="cEmail" size="20" maxlength="40" value="<?php if($email_alterar!= null) { echo $email_alterar;}else{"";} ?>"/></p></label>


<p><label for="cFoneCasa">Fone Residêncial: <input type="number" name="tFoneCasa" id="cFoneCasa" maxlength="11" value="<?php if($fonecasa_alterar!= null) { echo $fonecasa_alterar;}else{"";} ?>" /></p></label>

<p><label for="cFoneCel">Fone Celular: <input type="number" name="tFoneCel" id="cFoneCel" maxlength="12" value="<?php if($fonecel_alterar!= null) { echo $fonecel_alterar;}else{"";} ?>" /></p></label>


<!--<p><label>Sexo</p></label>
<input type="radio" name="tSexo" id="cMasc"/><label for="cMasc">Masculino</label></br>
<input type="radio" name="tSexo" id="cFem"/><label for="cFem">Femenino</label></fieldset> -->


<!-- Sexo -->

<?php		
// inicializar variáveis a vazio
$check0 = $check1 = "";

/* verificar qual o valor contido na variável $situacaoprof_alterar
 * e preencher a variável de marcação com o atributo "selected"
 */
switch ($sexo_alterar) {
  case "Masculino": {
    $check0 = "selected";
    break;
  }
  case "Femenino": {
    $check1 = "selected";
    break;
  }
  
  }



echo '
<label for="cSit">Sexo: </label>  
  <select name="tSexo" id="cSexo">
    <option value="0" '.$check0.'>Masculino</option>
    <option value="1" '.$check1.'>Femenino</option>
  </select>	';
		
		
?>	






















<!-- POSIÇÃO -->


<?php		
// inicializar variáveis a vazio
$check0 = $check1 = $check2 = $check3 = $check4 = $check5 = $check6 = $check7 = $check8 = $check9 ="";

/* verificar qual o valor contido na variável $situacaoprof_alterar
 * e preencher a variável de marcação com o atributo "selected"
 */
switch ($posicao_alterar) {
  case "Novo convertido": {
    $check0 = "selected";
    break;
  }
  case "Jovem": {
    $check1 = "selected";
    break;
  }
  case "Adolescente": {
    $check2 = "selected";
    break;
  }
  case "Obreiro": {
    $check3 = "selected";
    break;
  }
  case "Diácono": {
    $check4 = "selected";
    break;
  }
  case "Evangelista": {
    $check5 = "selected";
    break;
  }
  case "Pastor": {
    $check6 = "selected";
    break;
  }
  case "Missionário": {
    $check6 = "selected";
    break;
  }
  case "Membro": {
    $check6 = "selected";
    break;
  }
  case "Levita": {
    $check6 = "selected";
    break;
  }
}


echo '
<p> <label for="cPos">Posição:</label>
  <select name="tPos" id="cPos">
    <option value="0" '.$check0.'>Novo convertido</option>
    <option value="1" '.$check1.'>Jovem</option>
	<option value="2" '.$check2.'>Adolescente</option>
	<option value="3" '.$check3.'>Obreiro</option>
	<option value="4" '.$check4.'>Diácono</option>
	<option value="5" '.$check5.'>Evangelista</option>
	<option value="6" '.$check6.'>Pastor</option>
	<option value="6" '.$check7.'>Missionário</option>
	<option value="6" '.$check8.'>Membro</option>
	<option value="6" '.$check9.'>Levita</option>
  </select>	';
		
		
?>	








<!-- Situação -->

<?php		
// inicializar variáveis a vazio
$check0 = $check1 = "";

/* verificar qual o valor contido na variável $situacaoprof_alterar
 * e preencher a variável de marcação com o atributo "selected"
 */
switch ($situacao_alterar) {
  case "Ativo (Em comunhão)": {
    $check0 = "selected";
    break;
  }
  case "Inativo (Fora da comunhão)": {
    $check1 = "selected";
    break;
  }
  
  }



echo '
<p> <label for="cSit">Situação:</label>
<select name="tSit" id="cSit">
    <option value="0" '.$check0.'>Ativo (Em comunhão)</option>
    <option value="1" '.$check1.'>Inativo (Fora da comunhão)</option>
  </select>	';
		
		
?>	




<p><label for="cCongregacao">Codigo Congregação: <input type="number" name="Tidigreja" id="Ccongreg" maxlength="10" value="<?php if($id_igreja_alterar!= null) { echo $id_igreja_alterar;}else{"";} ?>"/></p></label>








</div>

<input type = "submit" class="bt" value="Alterar"/>



		
	</form>
</div>







</div>

</body>
</html>
