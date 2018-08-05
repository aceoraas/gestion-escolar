<?php
include'../../conexion.php';
   
    
if(isset($_POST['addalumnos'])){

$seccion=$_POST['seccion'];
$grado=$_POST['grado'];

    
$nom1= $_POST['nombrealumno1'];
$nom2= $_POST['nombrealumno2'];
$nom3= $_POST['nombrealumno3'];
$nom4= $_POST['nombrealumno4'];
$nom5= $_POST['nombrealumno5']; 
$nom6= $_POST['nombrealumno6'];
$nom7= $_POST['nombrealumno7'];
$nom8= $_POST['nombrealumno8'];
$nom9= $_POST['nombrealumno9'];
$nom10= $_POST['nombrealumno10'];

$ape1= $_POST['apellidoalumno1'];
$ape2= $_POST['apellidoalumno2'];
$ape3= $_POST['apellidoalumno3'];
$ape4= $_POST['apellidoalumno4'];
$ape5= $_POST['apellidoalumno5'];
$ape6= $_POST['apellidoalumno6'];
$ape7= $_POST['apellidoalumno7'];
$ape8= $_POST['apellidoalumno8'];
$ape9= $_POST['apellidoalumno9'];
$ape10= $_POST['apellidoalumno10'];

$cod_e1= $_POST['cod_unico_e1'];
$cod_e2= $_POST['cod_unico_e2'];
$cod_e3= $_POST['cod_unico_e3'];
$cod_e4= $_POST['cod_unico_e4'];
$cod_e5= $_POST['cod_unico_e5'];
$cod_e6= $_POST['cod_unico_e6'];
$cod_e7= $_POST['cod_unico_e7'];
$cod_e8= $_POST['cod_unico_e8'];
$cod_e9= $_POST['cod_unico_e9'];
$cod_e10= $_POST['cod_unico_e10'];

$img1=NULL;$img2=NULL;$img3=NULL;$img4=NULL;$img5=NULL;$img6=NULL;$img7=NULL;$img8=NULL;$img9=NULL;$img10=NULL;

if($_FILES['imagen1']['error']!=4){$img1=addslashes(file_get_contents($_FILES['imagen1']['tmp_name']));}
if($_FILES['imagen2']['error']!=4){$img2=addslashes(file_get_contents($_FILES['imagen2']['tmp_name']));}
if($_FILES['imagen3']['error']!=4){$img3=addslashes(file_get_contents($_FILES['imagen3']['tmp_name']));}
if($_FILES['imagen4']['error']!=4){$img4=addslashes(file_get_contents($_FILES['imagen4']['tmp_name']));}
if($_FILES['imagen5']['error']!=4){$img5=addslashes(file_get_contents($_FILES['imagen5']['tmp_name']));}
if($_FILES['imagen6']['error']!=4){$img6=addslashes(file_get_contents($_FILES['imagen6']['tmp_name']));}
if($_FILES['imagen7']['error']!=4){$img7=addslashes(file_get_contents($_FILES['imagen7']['tmp_name']));}
if($_FILES['imagen8']['error']!=4){$img8=addslashes(file_get_contents($_FILES['imagen8']['tmp_name']));}
if($_FILES['imagen9']['error']!=4){$img9=addslashes(file_get_contents($_FILES['imagen9']['tmp_name']));}
if($_FILES['imagen10']['error']!=4){$img10=addslashes(file_get_contents($_FILES['imagen10']['tmp_name']));}

  $nombres=array($nom1,$nom2,$nom3,$nom4,$nom5,$nom6,$nom7,$nom8,$nom9,$nom10);
  $apellidos=array($ape1,$ape2,$ape3,$ape4,$ape5,$ape6,$ape7,$ape8,$ape9,$ape10);
  $codigos=array($cod_e1,$cod_e2,$cod_e3,$cod_e4,$cod_e5,$cod_e6,$cod_e7,$cod_e8,$cod_e9,$cod_e10);
  $imagenes=array($img1,$img2,$img3,$img4,$img5,$img6,$img7,$img8,$img9,$img10);
  $i=0;
  while($i<=9){
  $updatesql="UPDATE alumnos SET NOMBRE='$nombres[$i]',APELLIDO='$apellidos[$i]',COD_UNICO_ESTUDIANTE='$codigos[$i]',SECCION='$seccion',GRADO='$grado',FOTO='$imagenes[$i]' WHERE COD_UNICO_ESTUDIANTE='$codigos[$i]'";
      $updatequery=mysqli_query($conexion,$updatesql);
   
      $insertsql="INSERT INTO alumnos (NOMBRE,APELLIDO,COD_UNICO_ESTUDIANTE,SECCION,GRADO,FOTO) VALUES ('$nombres[$i]','$apellidos[$i]','$codigos[$i]','$seccion','$grado','$imagenes[$i]');";
      $insertquery=mysqli_query($conexion,$insertsql);

      $delect=mysqli_query($conexion,"DELETE FROM `alumnos` WHERE `alumnos`.`COD_UNICO_ESTUDIANTE` = 0");



      $i++;
  }
  
header('location: ../../../portal_administrador/indexadministrador.php');
}



if(isset($_POST['ENVIAR'])){
$seccion=$_POST['seccion'];
$grado=$_POST['grado'];
if($_FILES['imagen']['error']!=4){$img=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));}
$nom= $_POST['nombre'];
$ape= $_POST['apellido'];
$cod=$_POST['cedula'];

$insertsql="INSERT INTO profesores (NOMBRE,APELLIDO,CEDULA,SECCION,GRADO,FOTO) VALUES ('$nom','$ape','$cod','$seccion','$grado','$img');";
$insertuser="INSERT INTO usuarios (cod_unico,tipo_usuario) VALUES ('$cod','profesor');";
$insertquery=mysqli_query($conexion,$insertsql);
$queryuser=mysqli_query($conexion,$insertuser);

header('location: ../../../sistema/portal_administrador/add_profesores/profesores.php');

}

if(isset($_POST['borrar'])){
$cod=$_POST['eliminar-cod'];

$borrar="DELETE FROM usuarios WHERE cod_unico = $cod";
$borrarprof="DELETE FROM profesores WHERE CEDULA = $cod";
$borrarquery=mysqli_query($conexion,$borrarprof);
$queryuser=mysqli_query($conexion,$borrar);

header('location: ../../sistema/portal_administrador/add_profesores/profesores.php');

}

  ?>