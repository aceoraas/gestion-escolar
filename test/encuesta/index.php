<?php
	 require_once('./modelo/dbencuesta.php');

	
/*	 $db = new MongoDD;

	 print_r($db->insertnewdata([

	 	'nombre'=>'raas',
		'apellido'=>'acero',
		'cedula'=>'27226407'
	 ]));
	 exit();

	 */
?>

<!DOCTYPE html>
<html>
<head>
	<title>mongo test</title>
</head>
<body>
	<?php
	if (isset($_POST['inCedula'])) {
	 	if(!empty($_POST['inCedula'])){

	 		$db = new BDENCUESTA;
	 		$a=$db->validador($_POST['inCedula']);

	 		foreach ($a as $item) {
	 					if($item->cedula==$_POST['inCedula']){
	 						echo "iguales";
	 					}			
	 		}
	 	}
	 }
	?>
<form action="index.php" method="post">
	<label>Nombre</label>
	<input type="text" name="inNombre"><br><br>
	<label>Apellido</label>
	<input type="text" name="inApellido"><br><br>
	<label>Cedula</label>
	<input type="text" name="inCedula"><br><br>
	<label>Numero movil</label>
	<input type="text" name="innumero_movil"><br><br>
	<label>Pregunta 1</label>
	<input type="text" name="inpregunta1"><br><br>
	<label>Pregunta 2</label>
	<input type="text" name="inpregunta2"><br><br>
	<label>Pregunta 3</label>
	<input type="text" name="inpregunta3"><br><br>
	<input type="submit" value="enviar">
</form>
</body>
</html>