<?php

include_once 'conn.php';

include ('pdf/mpdf.php');



$grupo = selectAllPessoa();
var_dump($grupo);

?>