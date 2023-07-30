

<?php
include_once 'conn.php';

$id = $_REQUEST['codigo'];
$nome = $_REQUEST['tNomeIgreja'];
$endereco = $_REQUEST['tEndIgreja'];
$numero = $_REQUEST ['tNumIgreja'];
$bairro = $_REQUEST ['tBairroIgreja'];


$sql = "update igreja set nome_igreja='".$nome."',endereco_igreja='".$endereco."',numero_igreja='".$numero."',
bairro_igreja='".$bairro."'


where id_igreja=".$id;






$query = mysqli_query($mysqli,$sql) or die(mysql_error());
$row = mysqli_fetch_object($query);
header("Location: religreja.php");

?>
