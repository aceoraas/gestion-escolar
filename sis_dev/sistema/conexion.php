<?php
	$conexion = mysqli_connect('localhost','root','27226407A','db_acb');

if ($conexion->connect_error) {

 die("La conexion falló: " . $conexion->connect_error);
}

?>