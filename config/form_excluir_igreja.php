<?php
include_once 'conn.php';



$id = $_REQUEST['cod'];


	if ($id != null) {
		
		
		$sql= "delete from igreja where id_igreja=".$id;
		
		$query = mysqli_query($mysqli,$sql) or die(mysql_error());
		$row = mysqli_fetch_object($query);
		header("Location: religreja.php");
	}
	else
	{
		
		header("Location: sistema.php");
		
	}

?>


<html>
<head>
</head>

<title>Excluir Igreja</title>

<body>
</body>



</html>