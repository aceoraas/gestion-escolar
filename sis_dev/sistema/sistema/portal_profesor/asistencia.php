<?php
//error_reporting(0);

session_start();
include '../../conexion.php';

if ($_SESSION['loggedin']!= true || $_SESSION['loggedin'] == null && $_SESSION['tipo'] !== 'admin') {
	echo "<script>alert('debe iniciar session para estar en esta pagina');</script>";
	session_destroy();
	header('location: ../../index.html');
	die();
}

$rs=mysqli_query($conexion,"SELECT * from profesor WHERE ci_prof=".$_SESSION['id'].";");
while ($info=mysqli_fetch_assoc($rs)) {
	$nombre=$info['nombre_p']; 
	$info['apellido_p'];
}
/*include '../../conexion.php';
$query=mysqli_query($conexion,
"SELECT * FROM profesor  
inner join alumno_profesor on alumno_profesor.ci_prof2=profesor.ci_prof
inner join cursos on cursos.id_cursos=alumno_profesor.id_curso1 
inner join alumno on alumno.id_curso2=cursos.id_cursos WHERE profesor.ci_prof=27226407;");
*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Asistencia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
	<style >
		body{
			overflow:scroll;
			background-color: #cccccc;
		}
	</style>
</head>
<body onload="activateCamera()" >
	<!--NAVEGADOR -->
	<nav class="full-box  navbar navbar-default navbar-static-top">
      <div class="container ">
        <div class="navbar-header " style="height:85px;">
			
        <a class="navbar-brand"><center><h4 class=" text-uppercase">HOLA<br><?php echo $nombre;?></h4></center></a>
        <a class="navbar-brand text-uppercase"> <h4><center>hoy es:<br><?php $fecha=date('d/m/Y'); echo $fecha;  ?></center></h4></a> 
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav nav-justified " style="margin-top: 5px;">
            <li><a class="btn btn-raised btn-danger btn-lg active" style="margin-left:4px;" href="./resume.php">RESUMEN</a></li>
            <li><a class="btn btn-raised btn-danger btn-lg active" href="../../salida.php">salir</a></li>
           </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

 <!--FIN DEL NAVEGADOR -->

    <br><br>

<!-- CONTENIDO DE LA PAGINA-->

	<section>
		<center>
			<div class="card" style="width: 90%; height: 400px;">
  			<div class="card-body">
    		<h3 class="card-title">Asistencia</h3>
    		<p class="card-text">Por favor mantenga su carnet con el codigo qr visible y presiones escanear para continuar</p>
    		<div >
      <div >
              <video autoplay="true" width="320" id="camaraOn" height="240"> </video>
      </div>
      <div>
      	<p><h4><?php echo "Salon: $gradopro-$seccionprof";?></h4></p>
      </div>
    		</div>
			</div>
		</center>
	</section>
	<br>
	<section class="full-box">
	<center>
	<!--ESTADISTICAS-->
	
	<article class="full-box tile" >
	<div  class="full-box tile-title text-center text-titles text-uppercase">ALUMNOS</div>
	<div class="full-box tile-icon text-center">
	<i  class="zmdi zmdi-account"></i>
	</div>
	<div  class="full-box tile-number text-titles">
	<p  class="full-box">
	
	<?php
	$a=0;
	?>
	<a><?php echo $a;?></a>
	</p>
	</div>
	</article>
	<article class="full-box tile">
	<div class="full-box tile-title text-center text-titles text-uppercase">FALTAN</div>
	<div class="full-box tile-icon text-center">
	<i class="zmdi zmdi-account"></i>
	</div>
	<div class="full-box tile-number text-titles">
	<p class="full-box">
	
	<?php
	/*$fechahoy=$fecha;
	$queryalumno=mysqli_query($conexion,"SELECT * FROM asistencia");
	$b=0;
	$asql="SELECT * FROM profesores";
	$ars=mysqli_query($conexion,$asql);
	while($mostrar=mysqli_fetch_array($ars))
 	{ 	
		if($mostrar['CEDULA']==$CEDULAp)
		{
			$seccion=$mostrar['SECCION'];
			$grado=$mostrar['GRADO'];
			while ($row=mysqli_fetch_array($queryalumno)) 
			{
				if ($row['GRADO']==$grado)
		 		{
					if ($row['SECCION']==$seccion) 
					{/*programar condicion de fecha para contar la asistencia al dia*
					{$b++;}
		 		}
			}	
		}
	}
	*/
	?>
	<a><?/*php $c=$a-$b;  echo $c;*/?></a>
	</p>
	</div>
	</article>
	
	</center>




</body>
<script>
	function activateCamera() {

	var video = document.querySelector("#camaraOn");
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMEdia;
    if (navigator.getUserMedia) {
        navigator.getUserMedia({video: true}, handleVideo, videoError);
    }
    function handleVideo(stream) {
        video.src = window.URL.createObjectURL(stream);
    }
    function videoError(e) {
        alert("La camara No esta funcionando Permita el acceso")
    }
}</script>


</html>