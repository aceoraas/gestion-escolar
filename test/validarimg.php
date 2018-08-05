<?php
// Recibo los datos de la imagen
include 'conexion.php';

$img= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

 
$sql = "UPDATE profesores SET FOTO = '$img' ";
$result = mysqli_query($conexion,$sql);

if ($result) {
	echo "insertado";
}
else{
	echo "no se inserto";
}
 
/* volvemos a la página principal para cargar la imagen que hemos subido */
require('perfil.php');

?>