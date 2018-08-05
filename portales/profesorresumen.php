<?php
$mensajes= null;
if ($mensajes!=null&&$mensajes<2) {
$code= $mensajes." mensaje";
$color= "new badge red ";

}
elseif ($mensajes!=null) {
$code= $mensajes." mensajes";
$color= "new badge red ";
}
else{
	$code= null;
	$color = "";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Resumen</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
    <script  type="text/javascript" src="./js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
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
<!-- Estructura del menu Down -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Buscardor</a></li>
  <li class="divider"></li>
  <li><a href="profesorinit.php">Asistencia</a></li>
</ul>
<div class="navbar-fixed">
<nav>
  <div class="nav-wrapper teal lighten-2 z-depth-3">
  	<a style="margin-left:20px" href="#!">USER-DATE</a>
  	<a href="#!" style="margin-left:20px"><?php $fecha=date('d/m/Y'); echo $fecha;?> </a>
    <a href="#!" class="brand-logo center">U.B.A.C.B</a>
    <ul class="right hide-on-med-and-down">
    <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
    
      <li><a href="#">Chat<span class="<?php echo $color;?>" data-badge-caption=""><?php echo $code;?></span></a></li>
      <li><a href="../procesos/salida.php">Salir</a></li>
    </ul>
  </div>
</nav>
</div>
<!--fin del navegador-->
<!-- Cuerpo -->
<div class="row">
	<div class="col s12 m6 l12">
		<div class="card grey lighten-4 black-text z-depth-5">
			<div class="card-content grey lighten-4 black-text">
			<center>
					<h4>Grado: 5to Seccion: A
					</h4>
			</center>
			</div>
			<div class="card-content grey lighten-2 black-text z-depth-2">
			<table>
				<thead>
				<tr>
			<th>Foto</th><th>Nombre</th><th>Apellido</th><th>C_E</th><th>Qr</th><th>Estado</th>
				</tr>
				</thead>
				<tbody>
						<tr>
			<th><img class="circle responsive-img z-depth-4" src="../../assets/img/alumnos/pes.jpg" width="95" height="95"></th>
			<th>FULANITO</th>
			<th>De Tal</th>
			<th>2722640712345</th>
			<th><img class="responsive-img z-depth-3" src="../../assets/img/qrs/thtest.jpeg" width="95" height="95"></th>
			<th><a href="#reporte" class=" z-depth-4 btn-floating btn-large teal lighten-2 pulse"><i class="material-icons">done</i></a></th>
				</tr>
				<tr>
			<th><img class="circle responsive-img z-depth-4" src="../../assets/img/alumnos/pes.jpg" width="95" height="95"></th>
			<th>FULANITO 2</th>
			<th>De Tal 2</th>
			<th>2722640712346</th>
			<th><img class="responsive-img z-depth-3" src="../../assets/img/qrs/thtest.jpeg" width="95" height="95"></th>
			<th><a href="#reporte" class="z-depth-4 btn-floating btn-large  red pulse"><i class="material-icons">warning</i></a></th>
				</tr>
				<tr>
			<th><img class="circle responsive-img z-depth-4" src="../../assets/img/alumnos/pes.jpg" width="95" height="95"></th>
			<th>FULANITO 3</th>
			<th>De Tal 3</th>
			<th>2722640712347</th>
			<th><img class="responsive-img z-depth-3" src="../../assets/img/qrs/thtest.jpeg" width="95" height="95"></th>
			<th><a href="#reporte" class="z-depth-4 btn-floating btn-large  red pulse"><i class="material-icons">warning</i></a></th>
				</tr>
				</tbody>
			</table>
			</div>
		</div>		
	</div>
</div>
<!-- fin del cuerpo-->
</body>
<script type="text/javascript">
	$(document).ready(function(){		
		$('.dropdown-button').dropdown({
  inDuration: 300,
  outDuration: 225,
  constrain_width: false, // Does not change width of dropdown to that of the activator
  hover: true, // Activate on hover
  gutter: 0, // Spacing from edge
  belowOrigin: true// Displays dropdown below the button
   // Displays dropdown with edge aligned to the left of button
});
	});
	

</script>
</html>