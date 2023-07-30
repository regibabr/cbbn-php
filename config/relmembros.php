<?php
session_start();
if(!isset($_SESSION['usuario']) || !isset($_SESSION['senha'])){
	
	header("Location: ../index.php");
	exit;		
		
		
	}

?>











<?php
include("conn.php");

$sql = "SELECT * FROM membros ORDER BY nome_membro ASC";
$resultado_usuario= mysqli_query($mysqli,$sql);

?>

<html>
<head>
<meta charset="UTF-8">
<link href="../css\stylesis.css" rel="stylesheet"/>
<title>Relatorio de Membros</title>
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
<h3>Lista Geral de Membros<h3>

</div>



<div id="iconePDF">

<a href="relmembros_pdf.php" id="iPdf" target="blank"><img src="../imgsis/iconePDF.png"></a>
</div>



<div id="tabela">

<table>
<tr>
	<td class="td">ID</td>
	<td class="td">Nome</td>
	<td class="td">Endereco</td>
	<td class="td">Número</td>
	<td class="td">Bairro</td>
	<td class="td">telefone</td>
	</tr>
	<?php while($dado = $resultado_usuario->fetch_array()){ 
	
	$url_alterar_membros = "form_alterar_membros.php?cod=".$dado['id_membro'];
/*	$url_excluir_membros = "form_excluir_membros.php?cod=".$dado['id_membro'];*/
	?>
	
	

	
	<tr>
		<td><?php echo $dado['id_membro'];?></td>
		<td><?php echo $dado['nome_membro'];?></td>
		<td><?php echo $dado['endereco_membro']; ?></td>
		<td><?php echo $dado['numero_membro'];?></td>
		<td><?php echo $dado['bairro_membro'];?></td>
		<td><?php echo $dado['foneCelular'];?></td>
		<?php echo "<td><a href=".$url_alterar_membros.">Alterar</a></td>";?>
		<?php /* echo "<td><a href=".$url_excluir_membros.">Excluir</a></td>";*/?>
		</tr>
	<?php } ?>
	</table>
	</div>
</body>
</html>

