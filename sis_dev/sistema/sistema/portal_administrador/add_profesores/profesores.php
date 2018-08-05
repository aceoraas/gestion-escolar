<?php
//error_reporting(0);
session_start();
include '../../../conexion.php';

if ($_SESSION['loggedin']!= true || $_SESSION['loggedin'] == null && $_SESSION['tipo'] !== 'admin') {
  echo "<script>alert('debe iniciar session para estar en esta pagina');</script>";
  session_destroy();
  header('location: ../../index.html');
  die();
}
$check=$_GET['resquest'];
$id=$_GET['id'];
if ($check!=null && $check=='7369') {
  $verificacion='si';
  $queryUP=mysqli_query($conexion,"update profesor set verificado='".$verificacion."'where ci_prof=".$id.";");

}elseif ($check!=null && $check=='6e7e') {
  $queryUP=mysqli_query($conexion,"delete from profesor where ci_prof=".$id.";");
}
?>

<!DOCTYPE html>
<html>

<head>
	<title>Profesores</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
	<link rel="stylesheet" href="../../../css/main.css">
</head>


<body style=" overflow:scroll;background-color: #cccccc;">

	<!--NAVEGADOR -->
	<nav class="full-box  navbar navbar-default navbar-static-top">
      <div class="container nav-justified">
        <div class="navbar-header " style="height:85px;">
	<a class="navbar-brand"><center><h4 class=" text-uppercase">HOLA<br><?php echo $_SESSION['username'];?></h4></center></a>
        <a class="navbar-brand text-uppercase"> <h4><center>hoy es:<br><?php $fecha=date('d/m/Y'); echo $fecha;  ?></center></h4></a> 
         </div>
         <center>
        <div class="navbar-collapse collapse" style="width: 40%;">
          <ul class="nav nav-justified " style="margin-top: 5px;">
            <li><a class="btn btn-raised btn-danger btn-lg active " style="margin-left:10px;" href="../indexadministrador.php">INICIO</a></li>
            <li><a class="btn btn-raised btn-danger btn-lg active" href="../../../salida.php">salir</a></li>
            </ul>
            </center>
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
    
<center>
  <br><br>
        <H2>LISTA DE PROFESORES POR CONFIRMAR:</H2>
</center>
<table class="table ">
<caption></caption>
  <thead>
   <tr>
    <style>
      th{
        text-align: center;
      }
    </style>
     <th >#</th>
     <th >FOTO</th>
     <th st>NOMBRE</th>
     <th>APELLIDO</th>
     <th >CEDULA</th>
     <th >GRADO</th>
     <th >SECCION</th>
     <th ><i class="glyphicon glyphicon-ok"></i></th>
     <th ><i class="glyphicon glyphicon-trash"></i></th>
   </tr>
  </thead>
  <tbody>
<?php
$query=mysqli_query($conexion,"select * from profesor inner join cursos on profesor.id_curso1=cursos.id_cursos where verificado='no'");
$i=1;
while($ms=mysqli_fetch_assoc($query)){

?>

    <tr>
     <th ><?php echo $i++; ?></th>
     <th ><img style="margin-left: 10px; margin-top: 5px; margin-right: 5px" width="80px" height="80px" class="img-circle" src="data:image/jpg;base64,<?php echo base64_encode($ms['foto_prof']);?>" ></th>
     <th><?php echo $ms['nombre_p'];?></th>
     <th><?php echo $ms['apellido_p'];?></th>
     <th><?php echo $ms['ci_prof'];?></th>
     <th><?php echo $ms['grado'];?></th>
     <th><?php echo $ms['seccion'];?></th>
     <?php echo '<th><a class=" btn btn-raised btn-success glyphicon glyphicon-ok" href="profesores.php?resquest=7369&id='.$ms['ci_prof'].'"></a></th>';?>
    <?php echo '<th><a class=" btn btn-raised btn-danger glyphicon glyphicon-trash" href="profesores.php?resquest=6e7e&id='.$ms['ci_prof'].'"></a></th>';}?>
   </tr>
    </tbody>
    </table>
</div>
</div>
</center>
</section>
<br>
</body>
<?php

?>

<!--
<form action="../../consultas_db/CONSULTAS.php"
method='post' enctype="multipart/form-data" accept-charset='utf-8'> 

<table class="table">
    <tr>

    <th >
    
    <input class="form-control" type="text" name="nombre"  placeholder="#Nombre">
    
    <input class="form-control" type="text" name="apellido"  placeholder="#Apellido">
  
    <input class="form-control" type="text" name="cedula"  placeholder="#Cedula">
    <center>
    <div style="margin-left: 90px; width: 60px; display: inline-block;" class="form-group "><label >Grado</label>
      <select class="form-control" name="grado">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      </select></div>
    <div style="margin-left: 90px; width: 60px; display: inline-block;" class="form-group "><label >Sección</label>
      <select class="form-control" name="seccion">
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      <option value="F">F</option>
      </select></div>
      <label style="margin-left: 90px" class=" btn btn-raised  btn-primary">FOTO<input size="30" name="imagen" type='file' style=" display: none;"></label></th>
    </center>
    </tr>
    <tr>
    <th>
      <center>
      <input class="btn btn-raised btn-danger" type="submit" name="ENVIAR" value="Enviar">
</center>
    </th>
    </tr>
    <th></th>

    </table>
</form>-->
</html>