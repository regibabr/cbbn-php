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
<li><a href="assuntos/quemsomos.html">Listas</a></li>			
			<li><a href="assuntos/quemsomos.html">Informações</a></li>
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

<div id="tituloLogo">
HERDEIROS 1.0
</div>

<div id="logo">

<img src="../imgsis/logo.png">
</div>





</div>


</body>


</html>
