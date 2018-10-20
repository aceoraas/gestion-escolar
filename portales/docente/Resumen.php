<!DOCTYPE html>
<html>
<head>
	<title>Resumen</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>

<script  type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
 	
 	<style >
		body{
			overflow:scroll;
			background-color: #017c77;
			color: #FFF;
		}
	</style>
</head>

<body>

<!--NAVegador-->

<?php
 include 'nav.php';
?>

<!--fin del navegador-->

<!-- Cuerpo -->

<div class="row">
<div class="col s12 l12">
<div class="card black-text z-depth-5">
			
<div class="card-content grey lighten-4 col s12 l12" style="border-radius: 1em 1em 0 0;" >
	<div class="center center-align">
		<div id='area'>
			<h4>HOLA</h4>
		</div>
	</div>
</div>

<div class=" card-content col s12 l12 white" style="border-radius:  0 0 1em 1em;">		
<table class="responsive-table">
	<thead>
		<tr>
			<th class="hide-on-med-and-down">Foto</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>C_E</th>
			<th>Estado</th>
		</tr>
	</thead>
	
	<tbody>
		<tr>
		<td class="hide-on-med-and-down"><img class="circle responsive-img z-depth-4" src="../../assets/img/alumnos/pes.jpg" width="70"></td>
		<td>FULANITO</td>
		<td>De Tal</td>
		<td>2722640712345</td>
		<td><a href="#reporte" class=" z-depth-4 btn-floating btn-small teal lighten-2 pulse"><i class="material-icons">done</i></a></td>
		</tr>
		<tr>
		<td class="hide-on-med-and-down"><img class="circle responsive-img z-depth-4" src="../../assets/img/alumnos/pes.jpg" width="70"></td>
		<td>FULANITO</td>
		<td>De Tal</td>
		<td>2722640712345</td>
		<td><a href="#reporte" class=" z-depth-4 btn-floating btn-small red lighten-2 pulse"><i class="material-icons">warning</i></a></td>
		</tr>
	</tbody>
</table>
</div>


</div>
</div>
</div>

<!-- fin del cuerpo-->
</body>




<?php
include '../footer.php';
?>

</html>