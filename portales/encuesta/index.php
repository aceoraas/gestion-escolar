<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>

	<title>Encuesta</title>
	<style >
                body{
                    overflow:scroll;
                    background-color: #017c77;
                    color: #FFF;
                }
            </style>
</head>
<body>


	<div class="row">
		<div class="col s12 m12 l12">
			<center>
			<b><h1>Encuesta</h1></b>
			</center>
		</div>
	</div>

<?php
	$a=$_GET['part'];
	if ($a!=2){
		echo "
			<form action='index.php' method='get'>
			<div class='card black-text row' style='width: 90%; margin-left: 4%;'>
				<div class='card-content'>
					<div class='input-field col s12 m12 l6'>
					<input type='text' name='inNombre'>
					<label>Nombre</label>
					</div>
					<div class='input-field col s12 m12 l6'>
					<input type='text' name='inApellido'>
					<label>Apellido</label>
					</div>
					<div class='input-field col s12 m12 l12'>
					<input type='text' name='inCedula'>
					<label>Cedula</label>
					</div>
					<div class='input-field col s12 m12 l12'>
					<input type='email' name='inCorreo'>
					<label>Correo</label>
					</div>
					<input style='visibility:hidden;display:none;' name='part' value='2'>
					<div class='input-field col s12 m12 l6'>
					<input type='submit' class='btn'Value='Siguiente'>
					<br>
					<br>
					</div>
				</div>
			</div>
			</form>
		";
	}

if ($a==2) {
	if(isset($_GET['inNombre'])&&isset($_GET['inApellido'])&&isset($_GET['inCedula'])){
			echo "
				<form action='../../db/encuesta_db.php' method='POST'>
				<center>
				<div class='card black-text' style='width: 92%;''>
					<div class='card-content'>
					<h3>¡Hola <b>".$_GET['inNombre']." ".$_GET['inApellido']."</b>!<br><br></h3><h5><b><i>Por favor selecione una opción de la lista desplegable y pulse el boton enviar al finalizar</b></i></h5>
					<br><br>
						<div class='input-field col s12 m12 l6'>
						<h5>¿sabes que es un sistema de informacion?</h5>
						<select name='inPregunta1'>
      						<option value='' disabled selected>Selecione una opción</option>
      						<option value='no'>NO</option>
      						<option value='si'>SI</option>
    						</select>
						</div>
						<br><br>
						<div class='input-field col s12 m12 l6'>
						<h5>¿has manejado algun sistema de informacion?</h5>
						<select name='inPregunta2'>
      						<option value='' disabled selected>Selecione una opción</option>
      						<option value='no'>NO</option>
      						<option value='si'>SI</option>
    					</select>
						</div>
						<br><br>
						<div class='input-field col s12 m12 l6'>
						<h5>¿sabes que es automatización?</h5>
						<select name='inPregunta3'>
      						<option value='' disabled selected>Selecione una opción</option>
      						<option value='no'>NO</option>
      						<option value='si'>SI</option>
    					</select>
						</div>
						<br><br>
						<div class='input-field col s12 m12 l6'>
						<h5>¿Sabes que es una base de datos?</h5>
						<select name='inPregunta4'>
      						<option value='' disabled selected>Selecione una opción</option>
      						<option value='no'>NO</option>
      						<option value='si'>SI</option>
    					</select>
						</div>
						<br><br>
						<div class='input-field col s12 m12 l6'>
						<h5>¿Estas a favor de la automatizacion del sistema de gestion Escolar de la Unidad Educativa Bolivariana Angel Celestino Bello?</h5>
						<select name='inPregunta5'>
     						 <option value='' disabled selected>Selecione una opción</option>
      						 <option value='no'>NO</option>
      						 <option value='si'>SI</option>
    					</select>
						</div>
						<br><br>
						<div class='input-field col s12 m12 l6'>
						<h5>¿Estas de acuerdo con el cambio de material analogico a digital?</h5>
						<select name='inPregunta6'>
      						<option value='' disabled selected>Selecione una opción</option>
      						<option value='no'>NO</option>
      						<option value='si'>SI</option>
    					</select>
						<br><br>
						</div>
						<input style='visibility:hidden; display:none;' name='Nombre' value='".$_GET['inNombre']."'>
						<input style='visibility:hidden; display:none;' name='Apellido' value='".$_GET['inApellido']."'>
						<input style='visibility:hidden; display:none;' name='Cedula' value='".$_GET['inCedula']."'>
						<input style='visibility:hidden; display:none;' name='Correo' value='".$_GET['inCorreo']."'>
						<div class='input-field col s12 m12 l6'>
						<input type='submit' class='btn' value='enviar'>
						</div>
					</div>
				</div>
				</center>
				</form>
			";
			
		}
		else{
			echo"
			<script>
				var again= alert('No puede dejar los campos Vacios');
				if(again==null){
					window.location = './index.php';
				}
			</script>";
		}
}
$a=1;
?>

</body>
 <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="../js/materialize.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function() {
    $('select').material_select();
  });
 </script>
</html>
