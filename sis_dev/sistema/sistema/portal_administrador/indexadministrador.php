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
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="../../css/main.css">
	<title>Panel de Control</title>
	<style >
		body{
			overflow:scroll

		}
	</style>
</head>

<body >
<!--NAVEGADOR -->
	<nav class="full-box  navbar navbar-default navbar-static-top">
      <div class="container ">
        <div class="navbar-header " style="height:85px;">
			
        <a class="navbar-brand"><center><h4 class=" text-uppercase">HOLA<br><?php echo $_SESSION['username'];?></h4></center></a>
        <a class="navbar-brand text-uppercase"> <h4><center>hoy es:<br><?php $fecha=date('d/m/Y'); echo $fecha;  ?></center></h4></a> 
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav nav-justified " style="margin-top: 5px;">
            <li><a class="btn btn-raised btn-danger btn-lg active " style="margin-left:10px; " href="#inicio">BOTON</a></li>
            <li><a class="btn btn-raised btn-danger btn-lg active" style="margin-left:4px;" href="#detener">BOTON</a></li>
            <li><a class="btn btn-raised btn-danger btn-lg active" href="../../salida.php">salir</a></li>
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

 <!--FIN DEL NAVEGADOR -->
<br><br><br>
<!--ESTADISTICAS-->
<center>
<article class="full-box tile">
<div class="full-box tile-title text-center text-titles text-uppercase">total profesores</div>
<div class="full-box tile-icon text-center">
<a href="add_profesores/profesores.php" class="full-box tile-icon btn btn-secundary btn-raised">
	<i class="zmdi zmdi-accounts-add" <?php $queryr=mysqli_query($conexion,"select * from profesor where verificado='no'");$r=mysqli_num_rows($queryr);if ($r>=1) {echo "style='color: red;'";}?>></i>
	
</a>
</div>
<div class="full-box tile-number text-titles">
<p class="full-box">
<?php						
	$total_profesor=0;
	$rs_prof=mysqli_query($conexion,"select * from profesor where verificado='si'");
	$total_profesor=mysqli_num_rows($rs_prof);
	?>
<a><?php echo $total_profesor;?></a>
</p>
<small>Registrados</small style="display: none;">
</div>
</article>

<article class="full-box tile">
<div class="full-box tile-title text-center text-titles text-uppercase">total alumnos</div>
<div class="full-box tile-icon text-center">
<a href="add_alumnos/alumnos.php" class="full-box tile-icon btn btn-secundary btn-raised">
<i class="zmdi zmdi-accounts-add"></i>
</a>
</div>
<div class="full-box tile-number text-titles">
<p class="full-box">
<?php	
	$total_alumno=0;
	$rs_a=mysqli_query($conexion,"select * from alumno");
	$total_alumno=mysqli_num_rows($rs_a);
	?>
<a><?php echo $total_alumno;?></a>
</p>
<small>Registrados</small>
</div>
</article>
<br>
<article class="full-box tile">
<div class="full-box tile-title text-center text-titles text-uppercase">profesores en clase</div>
<div class="full-box tile-icon text-center">
<a href="#" class="full-box tile-icon btn btn-secundary btn-raised">
<i class="zmdi zmdi-border-color"></i>
</a>
</div>
<div class="full-box tile-number text-titles">
<p class="full-box">
<?php					
	$prof_activo_clase=0;
	$h=date('Y-m-d');
	$consulta=mysqli_query($conexion,"SELECT fecha, edo_asist_alumno, asistencia_profesor from asistencia inner join alumno_asistencia on asistencia.id_asistencia=alumno_asistencia.id_asistencia2 join alumno on alumno.ci_estu=alumno_asistencia.ci_estu4 inner join cursos on alumno.id_curso2=cursos.id_cursos inner join profesor on profesor.id_curso1=cursos.id_cursos where fecha ='".$h."' AND edo_asist_alumno='vino' AND asistencia_profesor='vino' ");
	
	if ((date('h.i')>5.00 && date('a')=='pm')|| (date('h.i')<5.00 && date('a')!=='pm'))
	 {
	 	$prof_activo_clase=0;
	 }
	 else
	 {
		$prof_activo_clase=mysqli_num_rows($consulta);
	 }
	
	
	?>
<a><?php echo $prof_activo_clase;?></a>
</p>  <!-- AQUI INGRESAR DATO DE BASE DE DATOS-->
<small>Registrados</small>
</div>
</article>
<article class="full-box tile">
<div class="full-box tile-title text-center text-titles text-uppercase">alumnos en clases</div>
<div class="full-box tile-icon text-center">
<a href="#" class="full-box tile-icon btn btn-secundary btn-raised">
<i class="zmdi zmdi-book"></i>
</a>
</div>
<div class="full-box tile-number text-titles">
<p class="full-box">
<?php					
	$alumno_activo_clase=0;
	$consulta=mysqli_query($conexion,"SELECT * FROM asistencia inner join alumno_asistencia on asistencia.id_asistencia=alumno_asistencia.id_asistencia2 where fecha ='".$h."' AND edo_asist_alumno='no vino'");
	
	if ((date('h.i')>5.00 && date('a')=='pm')|| (date('h.i')<5.00 && date('a')!=='pm'))
	 {
	 	$alumno_activo_clase=0;
	 }
	 else
	 {
		$alumno_activo_clase=mysqli_num_rows($consulta);
	 }
		
	?>
<a><?php echo $alumno_activo_clase;?></a>
</p>  <!-- AQUI INGRESAR DATO DE BASE DE DATOS-->
<small>Registrados</small>
</div>
</article>
<br>
<article class="full-box tile">
<div class="full-box tile-title text-center text-titles text-uppercase">profesores fuera de clase</div>
<div class="full-box tile-icon text-center">
<a href="#" class="full-box tile-icon btn btn-secundary btn-raised">
<i class="zmdi zmdi-walk"></i>
</a>
</div>
<div class="full-box tile-number text-titles">
<p class="full-box">
<?php
	if ((date('h.i')>5.00 && date('a')=='pm')|| (date('h.i')<5.00 && date('a')!=='pm'))
	 {
	 	$profesor_inactivo=0;
	 }
	 else
	 {
		$profesor_inactivo=$total_profesor-$prof_activo_clase;
	 }
?>
<a><?php echo $profesor_inactivo;?></a>
</p>  <!-- AQUI INGRESAR DATO DE BASE DE DATOS-->
<small>Registrados</small>
</div>
</article>
<article class="full-box tile">
<div class="full-box tile-title text-center text-titles text-uppercase">alumnos fuera de clase</div>
<div class="full-box tile-icon text-center">
<a href="#" class="full-box tile-icon btn btn-secundary btn-raised">
<i class="zmdi zmdi-face"></i>
</a>
</div>
<div class="full-box tile-number text-titles">
<p class="full-box">
<?php
	if ((date('h.i')>5.00 && date('a')=='pm')|| (date('h.i')<6.00 && date('a')!=='pm'))
	 {
		$alumno_inactivo=0;
	 }
	 else
	 {
	 	$alumno_inactivo=$total_alumno-$alumno_activo_clase;
	 }					
	
?>
<a><?php echo $alumno_inactivo;?></a>
</p>  <!-- AQUI INGRESAR DATO DE BASE DE DATOS-->
<small>Registrados</small>
</div>
</article>
</center>
<!--FIN DE LAS ESTADISTICAS-->
<br>
</body>
</html>
<?php if($r>=1){echo "<embed src='../../../js/beep.mp3' autostart='true' bucle='true' style='width: 1%; height:1%;'/>";}?>