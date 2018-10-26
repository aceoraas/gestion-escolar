<?php

 require_once ('../../db/buscar/sistema-db.php');


 $a= new system();
 $r= $a->getinscripcion();
 echo json_encode($r);

 ?>