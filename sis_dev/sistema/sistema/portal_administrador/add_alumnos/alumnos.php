<?php
include '../../../inicio.php';
error_reporting(0);
if($NOMBREp!=NULL){
	header('location: ../../../../portal_profesor/asistencia.php');
}

?>

<!DOCTYPE html>
<html>

<head>
	<title>SISTEMA</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../../../css/main.css">
</head>


<body style=" overflow:scroll;background-color: #cccccc;">

	<!--NAVEGADOR -->
	<nav class="full-box  navbar navbar-default navbar-static-top">
      <div class="container nav-justified">
        <div class="navbar-header " style="height:95px;">
	
	<a class="navbar-brand"><center><h4><?php echo "$NOMBREa  <br> COD-$CEDULAa"; ?></h4></center></a>
    </div>
        <div class="navbar-collapse collapse">
          <ul class="nav nav-justified " style="margin-top: 5px;">
            <li><a class="btn btn-raised btn-danger btn-lg active " style="margin-left:10px;" href="../indexadministrador.php">INICIO</a></li>
            <li><a class="btn btn-raised btn-danger btn-lg active" href="../../../salida.php">salir</a></li>
            <li> <a class="btn btn-lg active"> <h4> FECHA: <?php $fecha= getdate(); echo ""; print_r($fecha[mday]);echo "/";print_r($fecha[mon]);echo "/";print_r($fecha[year]);?></h4></a> </li>
           </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

 <!--FIN DEL NAVEGADOR -->

    <br><br>

<!-- CONTENIDO DE LA PAGINA-->

<section>
<center>
<div class="card response" style="width: 90%; height: 90%;">
<div class="card-body">
<h3 class="card-title">ALUMNOS</h3>
<p class="card-text">Por favor ingrese todos los datos solicitados del alumno, el sistema luego los distribuira automaticamente.
<H5>NOTA: ES IMPORTANTE QUE SEPA QUE SI LOS DATOS EXISTEN SERAN REMPLAADOS AUTOMATICAMENTE ES NECESARIO INGRESAR INCLUO LA FOTO NUEVAMENTE</H5></p>
<table class="table text-center">
    <form action="CONSULTAS.php" method="post" enctype="multipart/form-data" >
  	<thead>
    <tr >
    	<th><div class="form-group"><label >Grado</label>
  		<select class="form-control" name="grado">
    	<option value="1">1</option>
    	<option value="2">2</option>
    	<option value="3">3</option>
    	<option value="4">4</option>
    	<option value="5">5</option>
    	<option value="6">6</option>
  		</select></div></th>
    	<th><div class="form-group "><label >Sección</label>
  		<select class="form-control" name="seccion">
    	<option value="A">A</option>
    	<option value="B">B</option>
    	<option value="C">C</option>
    	<option value="D">D</option>
    	<option value="E">E</option>
    	<option value="F">F</option>
  		</select></div></th>
      <th><input class="btn btn-raised btn-danger" type="submit" name="addalumnos"></th>
    </tr>
    </thead>
    <tbody>
  	<tr>
  	<th><input class='form-control text-warning' type='text' name="nombrealumno1" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno1" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e1" placeholder='Cod_Estudiante'></th>
    <th><label class="btn  btn-raised btn-primary">FOTO<input size="30" name="imagen1" type='file' style="display: none;">
    </label></th>
    </tr>
    <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno2" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno2" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e2" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen2" type='file' style="display: none;">
    </label></th>
    </tr>
    <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno3" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno3" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e3" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen3" type='file' style="display: none;">
    </label></th>
    </tr>
    <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno4" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno4" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e4" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen4" type='file' style="display: none;">
    </label></th>
    </tr>
    <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno5" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno5" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e5" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen5" type='file' style="display: none;">
    </label></th>
    </tr>
     <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno6" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno6" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e6" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen6" type='file' style="display: none;">
    </label></th>
    </tr>
     <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno7" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno7" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e7" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen7" type='file' style="display: none;">
    </label></th>
    </tr>
     <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno8" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno8" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e8" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen8" type='file' style="display: none;">
    </label></th>
    </tr>
     <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno9" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno9" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e9" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen9" type='file' style="display: none;">
    </label></th>
    </tr>
     <tr>
    <th><input class='form-control text-warning' type='text' name="nombrealumno10" placeholder='Nombre'></th>
    <th><input class='form-control text-warning' type='text' name="apellidoalumno10" placeholder='Apellido'></th>
    <th><input class='form-control text-warning' type='text' name="cod_unico_e10" placeholder='Cod_Estudiante'></th>
    <th><label class="btn btn-raised  btn-primary">FOTO<input size="30" name="imagen10" type='file' style="display: none;">
    </label></th>
    </tr>
  </tbody>
  
  </form>
</table>
</div>
</div>
</center>
</section>



<br>
</body>


</html>