<?php
include_once 'conn.php';



$id = $_REQUEST['cod'];


	if ($id != null) {
		
		
		$sql= "delete from membros where id_membro=".$id;
		
		$query = mysqli_query($mysqli,$sql) or die(mysql_error());
		$row = mysqli_fetch_object($query);
		header("Location: relmembros.php");
	}
	else
	{
		
		header("Location: sistema.php");
		
	}

?>


<html>
<head>
</head>

<title>Excluir Membros</title>

<body>
</body>



</html>