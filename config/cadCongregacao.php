<?php
session_start();
if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])){
	
	header("Location: ../index.php");
	exit;		
		
		
	}

?>




<?php
include_once("conn.php");
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
	<form method ="post" action="cad2.php">
	
<div id="um">

<p><label for="cNomeIgreja"> Nome: <input type="text" name= "tNomeIgreja" id="cNomeIgreja" size="20" maxlength="30" placeholder="Nome completo"></p></label>

<p><label for="cEndIgreja">Endereço: <input type="text" name= "tEndIgreja" id="cEndIgreja" size="20" maxlength="50" placeholder="Rua, Av, travessa"/></p></label>

<p><label for="cNumIgreja">Numero: <input type="number" name="tNumIgreja" id="cNumIgreja" min="0"  max="9999"/></p></label>


<p><label for="cCepIgreja">CEP: <input type="number" name="tCepIgreja" id="cCepIgreja" maxlength="8" /></p></label>

<p><label for="cBairroIgreja">Bairro: <input type="text" name= "tBairroIgreja" id="cBairroIgreja" size="20" maxlength="30"/></p></label>

<p><label for="cCidIgreja">Cidade</label>
<input type="text" name="tCidIgreja" id="cCidIgreja" maxlength="20" size="20" placeholder="Sua cidade" list="cidades"/></p>
<datalist id="cidades">
	<option value="Salvador"></option>
</datalist>	


<p><label for="cEstIgreja">Estado</label>
<input type="text" name="tEstIgreja" id="cEstIgreja" maxlength="20" size="20" placeholder="Seu Estado" list="estado"/></p>
<datalist id="estado">
	<option value="Bahia"></option>
</datalist>	

<p><label for="cPaisIgreja">País:</label>
<input type="text" name="tPaisIgreja" id="cPaisIgreja" maxlength="20" size="20" placeholder="Seu País" list="pais"/></p>
<datalist id="pais">
	<option value="Brasil"></option>
</datalist>	



<p><label for="cFoneIgreja">Telefone: <input type="number" name="tFoneIgreja" id="cFoneIgreja" maxlength="11" /></p></label>


</div>



<div id="dois">











<label for="cDirigente">Dirigente:</label>
<select name="tDirigente" id="cDirigente">
<option>Selecione...</option>

<?php
$result_niveis_acessos = "SELECT * FROM membros ORDER BY nome_membro ASC";
$resultado_niveis_acesso= mysqli_query($mysqli, $result_niveis_acessos);

while($dado = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
<option value="<?php echo $dado['id_membro'];?>"><?php echo $dado ['nome_membro']; ?>
</option><?php 
	} 
?>
</select>







<p> <label for="cTipo">Tipo:</label>
<select name="tTipo" id="cTipo">
<option>Sede Nacional</option>
<option>Sede Regional</option>
<option>Sede Estadual</option>
<option>Congregação</option>
<option>Ponto de Pregação</option>

</select></p>




</div>



<div id="tres">




</div>

<input type = "submit" class="bt" value="Inserir"/>
<input type = "reset" class="bt" value="Limpar"/>


		
	</form>
</div>







</div>

</body>
</html>
