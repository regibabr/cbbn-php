<?php
session_start();
if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])){
	
	header("Location: ../index.php");
	exit;		
		
		
	}

?>











<?php
include("conn.php");

$sql = "SELECT * FROM igreja ORDER BY nome_igreja ASC";
$resultado_usuario= mysqli_query($mysqli,$sql);

?>

<html>
<head>
<meta charset="UTF-8">
<link href="../css\stylesis.css" rel="stylesheet"/>
<title>Lista de Igrejas</title>
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
<li><a href="assuntos/quemsomos.html">Listas</a></li>

				
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







<div id="listamembros">
<h3>Lista Geral de Igrejas<h3>

</div>



<div id="iconePDF">

<a href="religreja_pdf.php" id="iPdf" target="blank"><img src="../imgsis/iconePDF.png"></a>
</div>



<div id="tabela">

<table>
<tr>
	
	<td class="td">Nome</td>
	<td class="td">Endereco</td>
	<td class="td">Número</td>
	<td class="td">Bairro</td>
	<td class="td">Dirigente</td>
	</tr>
	<?php while($dado = $resultado_usuario->fetch_array()){ 
	$url_alterar_igreja = "form_alterar_igreja.php?cod=".$dado['id_igreja'];
	/*$url_excluir_igreja = "form_excluir_igreja.php?cod=".$dado['id_igreja'];*/
	?>
	<tr>
		
		<td><?php echo $dado['nome_igreja'];?></td>
		<td><?php echo $dado['endereco_igreja']; ?></td>
		<td><?php echo $dado['numero_igreja'];?></td>
		<td><?php echo $dado['bairro_igreja'];?></td>
		<td><?php echo $dado['dirigente'];?></td>
		<?php echo "<td><a href=".$url_alterar_igreja.">Alterar</a></td>";?>
		<?php /* echo "<td><a href=".$url_excluir_igreja.">Excluir</a></td>"; */ ?>
		</tr>
		<?php } ?>
		</table>
	</div>
</body>
</html>

