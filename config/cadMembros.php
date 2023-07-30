<?php
session_start();
if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])){
	
	header("Location: ../index.php");
	exit;		
		
		
	}

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
<a href="religreja.php" id="previous"><img src="../imgsis/iconeIgreja.png">
</div>

<div id="membros">
<a href="relmembros.php" id="previous"><img src="../imgsis/iconeMembros.png"></a>
</div>



<div id="cad">
	<form method ="post" action="cad.php">
	
<div id="um">

<p><label for="cNome"> Nome: <input type="text" name= "tNome" id="cNome" size="20" maxlength="30" placeholder="Nome completo"></p></label>

<p><label for="cEnd">Endereço: <input type="text" name= "tEnd" id="cEnd" size="20" maxlength="50" placeholder="Rua, Av, travessa"/></p></label>

<p><label for="cNum">Número: <input type="number" name="tNum" id="cNum" min="0"  max="9999"/></p></label>

<p><label for="cCompl">Complemento: <input type="text" name= "tCompl" id="cCompl" size="20" maxlength="30" placeholder="Casa, Apt..."/> </p></label>

<p><label for="cCep">CEP: <input type="number" name="tCep" id="cCep" maxlength="8" /></p></label>

<p><label for="cBairro">Bairro: <input type="text" name= "tBairro" id="cBairro" size="20" maxlength="30"/></p></label>

<p><label for="cCid">Cidade</label>
<input type="text" name="tCid" id="cCid" maxlength="20" size="20" placeholder="Sua cidade" list="cidades"/></p>
<datalist id="cidades">
	<option value="Salvador"></option>
</datalist>	


<p><label for="cEst">Estado</label>
<input type="text" name="tEst" id="cEst" maxlength="20" size="20" placeholder="Seu Estado" list="estado"/></p>
<datalist id="estado">
	<option value="Bahia"></option>
</datalist>	

<p><label for="cPais">País:</label>
<input type="text" name="tPais" id="cPais" maxlength="20" size="20" placeholder="Seu País" list="pais"/></p>
<datalist id="pais">
	<option value="Brasil"></option>
</datalist>	

</div>



<div id="dois">



<p><label for="cNPai"> Nome do pai: <input type="text" name= "tNPai" id="cNPai" size="20" maxlength="30" placeholder="Nome do pai"/></p></label>
<p><label for="cNMae"> Nome da mãe: <input type="text" name= "tNMae" id="cNMae" size="20" maxlength="30" placeholder="Nome da mãe"/></p></label>



<p><label for="cNasc">Data de Nascimento <input type="date" name="tNasc" id="cNasc" /></p></label>

	
<p> <label for="ceCivil">Estado Civil:</label>
<select name="teCivil" id="ceCivil">
<option>Casado</option>
<option>Solteiro</option>
<option>Viuvo</option>
</select></p>	
	

<p><label for="cNConj"> Cônjugue: <input type="text" name= "tNConj" id="cNConj" size="20" maxlength="30" placeholder="Nome do esposo(a)"/></p></label>




<p><label for="cCasamento">Data de casamento <input type="date" name="tCasamento" id="cCasamento" /></p></label>
<p><label for="cBatismo">Data de batismo <input type="date" name="tBatismo" id="cBatismo" /></p></label>







<p><label for="cProf">Profissão: <input type="text" name= "tProf" id="cProf" size="20" maxlength="30"/> </p></label>

<p> <label for="cSit">Situação Profissional:</label>
<select name="tSitProf" id="cSit">
<option>Trabalhando</option>
<option>Desempregado</option>
</select></p>




</div>



<div id="tres">


<p> <label for="cEsc">Escolaridade:</label>
<select name="tEsc" id="cEsc">
<option>Nenhum</option>
<option>Fundamental Incompleto</option>
<option>Fundamental Completo</option>
<option>Médio Incompleto</option>
<option>Médio Completo</option>
<option>Superior Completo</option>
<option>Superior Incompleto</option>
</select></p>	



<p><label for="cRG">RG: <input type="number" name="tRG" id="cRG" maxlength="10" /></p></label>
<p><label for="cCPF">CPF: <input type="number" name="tCPF" id="cCPF" maxlength="11" /></p></label>


<p><label for="cEmail">Email: <input type="email" name= "tEmail" id="cEmail" size="20" maxlength="40"/></p></label>


<p><label for="cFoneCasa">Fone Residêncial: <input type="number" name="tFoneCasa" id="cFoneCasa" maxlength="11" /></p></label>

<p><label for="cFoneCel">Fone Celular: <input type="number" name="tFoneCel" id="cFoneCel" maxlength="12" /></p></label>


<!--<p><label>Sexo</p></label>
<input type="radio" name="tSexo" id="cMasc"/><label for="cMasc">Masculino</label></br>
<input type="radio" name="tSexo" id="cFem"/><label for="cFem">Femenino</label></fieldset> -->



<p> <label for="cMasc">Sexo:</label>
<select name="tSexo" id="cSexo">
<option>Masculino</option>
<option>Femenino</option>
</select></p>	





<p> <label for="cPos">Posição:</label>
<select name="tPos" id="cPos">
<option>Novo convertido</option>
<option>Jovem</option>
<option>Adolescente</option>
<option>Obreiro</option>
<option>Diácono</option>
<option>Evangelista</option>
<option>Pastor</option>
<option>Missionário</option>
<option>Membro</option>
<option>Levita</option>
</select></p>	


<p> <label for="cSit">Situação:</label>
<select name="tSit" id="cSit">
<option>Ativo (Em comunhão)</option>
<option>Inativo (Fora da comunhão)</option>
</select></p>




<p><label for="cCongregacao">Codigo Congregação: <input type="number" name="Tidigreja" id="Ccongreg" maxlength="10" /></p></label>








</div>

<input type = "submit" class="bt" value="Inserir"/>
<input type = "reset" class="bt" value="Limpar"/>


		
	</form>
</div>







</div>

</body>
</html>
