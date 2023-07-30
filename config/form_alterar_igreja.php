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

$sql = "select * from igreja where id_igreja=".$id;
$query = mysqli_query($mysqli,$sql) or die(mysql_error());
$row = mysqli_fetch_object($query);

$nome_alterar = $row->nome_igreja;
$endereco_alterar = $row->endereco_igreja;
$numero_alterar = $row->numero_igreja;

$bairro_alterar = $row->bairro_igreja;




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
	<form method ="GET" action="alterar_gravar_igreja.php">
	<input type="hidden" name="codigo" value="<?php echo $id ?>">
	
<div id="um">







<p><label for="cNomeIgreja"> Nome: <input type="text" name= "tNomeIgreja" id="cNomeIgreja" size="20" maxlength="30" placeholder="Nome completo" value="<?php if($nome_alterar != null) { echo $nome_alterar;}else{"";} ?>"></p></label>

<p><label for="cEndIgreja">Endereco: <input type="text" name= "tEndIgreja" id="cEndIgreja" size="20" maxlength="50" placeholder="Rua, Av, travessa" value="<?php if($endereco_alterar!= null) { echo $endereco_alterar;}else{"";} ?>"/></p></label>

<p><label for="cNumIgreja">Numero: <input type="number" name="tNumIgreja" id="cNumIgreja" min="0"  max="9999" value="<?php if($numero_alterar!= null) { echo $numero_alterar;}else{"";} ?>"/></p></label>



<p><label for="cBairroIgreja">Bairro: <input type="text" name= "tBairroIgreja" id="cBairroIgreja" size="20" maxlength="30" value="<?php if($bairro_alterar!= null) { echo $bairro_alterar;}else{"";} ?>"/></p></label>





</div>

<input type = "submit" class="bt" value="Alterar"/>



		
	</form>
</div>







</div>
</body>
</html>