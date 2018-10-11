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
<!-- Estructura del menu Down -->
<?php
 include 'nav.php';
?>
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
			<th><img class="circle responsive-img z-depth-4" src=".../.../assets/img/alumnos/pes.jpg" width="95" height="95"></th>
			<th>FULANITO</th>
			<th>De Tal</th>
			<th>2722640712345</th>
			<th><img class="responsive-img z-depth-3" src=".../.../assets/img/qrs/thtest.jpeg" width="95" height="95"></th>
			<th><a href="#reporte" class=" z-depth-4 btn-floating btn-large teal lighten-2 pulse"><i class="material-icons">done</i></a></th>
				</tr>
				<tr>
			<th><img class="circle responsive-img z-depth-4" src=".../.../assets/img/alumnos/pes.jpg" width="95" height="95"></th>
			<th>FULANITO 2</th>
			<th>De Tal 2</th>
			<th>2722640712346</th>
			<th><img class="responsive-img z-depth-3" src=".../.../assets/img/qrs/thtest.jpeg" width="95" height="95"></th>
			<th><a href="#reporte" class="z-depth-4 btn-floating btn-large  red pulse"><i class="material-icons">warning</i></a></th>
				</tr>
				<tr>
			<th><img class="circle responsive-img z-depth-4" src=".../.../assets/img/alumnos/pes.jpg" width="95" height="95"></th>
			<th>FULANITO 3</th>
			<th>De Tal 3</th>
			<th>2722640712347</th>
			<th><img class="responsive-img z-depth-3" src=".../.../assets/img/qrs/thtest.jpeg" width="95" height="95"></th>
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
	

</script>
</html>