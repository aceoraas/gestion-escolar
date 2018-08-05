<?php include '../../../inicio.php';
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
<h3 class="card-title">GENERAR NUEVO ADMINISTRADOR</h3>
<p class="card-text">Al preionar el boton generar se creara un uevo administrador y sera mostrado en la pantalla el codigo unico.
<H5>NOTA: ES IMPORTANTE QUE SEPA QUE ESTE CODIGO DEBE SER GUARDADO</H5></p>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"
method='post' accept-charset='utf-8'> 
    <table>
    <tr>
    <th>
    <input type="text" name="code_uni"  placeholder="#codigo">
    <input class="btn btn-raised btn-danger" type="submit" name="eliminar" value="Eliminar"></th>
    </tr>
    <tr>
    <th>
        <input class="btn btn-raised btn-danger" type='submit'  name="generaradministrador" value='generar'></th>
    </tr>
    </table>
</form>
<?php
$final=NULL;
if(isset($_POST['generaradministrador'])){
$vari=password_hash('',PASSWORD_DEFAULT);
$final=hash('crc32',$vari);

$sqls="SELECT * FROM usuarios";
$query=mysqli_query($conexion,$sqls);
while($mostrar=mysqli_fetch_array($query)){
    
    if($mostrar['tipo_usuario']=='admin'){
        if ($mostrar['cod_unico']!=$final) {
            $sqlw="INSERT INTO `usuarios` (`cod_unico`, `tipo_usuario`) VALUES ('$final', 'admin');";
            $querys=mysqli_query($conexion,$sqlw);

        }
    }
}
}


if(isset($_POST['eliminar'])){
    $code_uni=$_POST['code_uni'];
    $query=mysqli_query($conexion,"DELETE FROM `usuarios` WHERE `usuarios`.`cod_unico` = '$code_uni'");}
?>
<center>
        <H2>EL NUEVO CODIGO ADMINISTRADOR ES:</H2>
        <H1> <?php echo "$final";?></H1>
</center>
<table class="table ">
<caption>Administradores</caption>
  <thead>
   <tr>
     <th style="width: 20px;">#</th>
     <th >CODIGO UNICO</th>
   </tr>
  </thead>
  <tbody>
<?php
$sqls="SELECT * FROM usuarios";
$query=mysqli_query($conexion,$sqls);
$i=1;
while($ms=mysqli_fetch_array($query)){
if($ms['tipo_usuario']=='admin'){
?>
    <tr>
       <td><h4><?php echo $i++; ?></h4></td>
       <th><h4><?php echo $ms['cod_unico']; ?></h4></th>
    </tr>
<?php 
   }
}
?>
  </tbody>
   </table>

</div>
</div>
</center>
</section>



<br>
</body>


</html>