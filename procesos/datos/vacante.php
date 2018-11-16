<?php

require_once('../../db/buscar/sistema-db.php');

$a= new system();
$b=$a->getdatamatricula();
$b=json_encode($b,true);
echo $b;

?>