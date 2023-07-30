<?php

if(isset($_REQUEST['logar'])) {

$usuario = $_REQUEST ['usuario'];
$senha = $_REQUEST ['senha'];

$sql = "select * from usuario where usuario = '$usuario' AND senha = '$senha'";
$query = mysqli_query($mysqli,$sql) or die(mysql_error());
$row = mysqli_num_rows($query);

if ($row == 1) {
	
	session_start();
	$_SESSION['usuario'] =$_POST['usuario'];
	$_SESSION['senha'] =$_POST['senha'];
	
	
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/cbbn-php/config/sistema.php'>
	<script type=\"text/javascript\">
	
	</script>";

}else{

	if($row == 0) {
		
		
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/cbbn-php/index.php'>
	<script type=\"text/javascript\">
	alert(\"Não foi possivel logar.\");
	</script>";
		
	}
	
}


}










?>










