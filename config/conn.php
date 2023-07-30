

<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco= "cbbnc407_ibbn";
// Conecta ao banco de dados
$mysqli = new mysqli($host, $user, $pass, $banco);
// Verifica se ocorreu algum erro
if (mysqli_connect_error()) {
die('Não foi possível conectar-se ao banco de dados: ' . mysqli_connect_error());
exit();
}


?>