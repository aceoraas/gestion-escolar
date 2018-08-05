<?php
/*
include 'conexion.php';
echo "<form action='#' method='post' accept-charset='utf-8'>
	<input class type='submit'  name'gen' value='generar'>
</form>";
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
		else{
			echo "<script>alert('disculpe el usuario ya existe y no puede ser remplazado genere otro o elimine el usuario')</script>";
		}
	}
}
echo " su clave es: <br><br> $vari <br><br> ";
echo "Su usuario es:<br><br>";

echo "$final";
*/
$opciones = ['cost' => 12];
$contra=$_GET["PASS"]; 

$a=password_hash("123456", PASSWORD_BCRYPT,$opciones);
echo $a;
echo "<br>".strlen($a)."<br>";
echo "verificacion<br>";
print($contra);

if ($contra=="EXIT001") {
	echo "<br>TODO EN ORDEN SALIO";
	}
else if($contra!=null){
	$b=password_verify($contra,$a);
	if ($b>0) {
		echo "<br>SI<br><a href='http://localhost/subir/contra.php?PAAS=null'>AGAIN</a>";
	}
	else{
			echo "<script>alert('INTENTELO DE NUEVO')
	var variableJS = prompt('ingresa una contraseña'); 
		if (variableJS != null || variableJS != '') {
			location.href='http://localhost/subir/contra.php?PASS='.concat(variableJS);
		}else{
			location.href='http://localhost/subir/contra.php?PASS=EXIT001';
		}</script>";
		}
	}
else{
		echo "<script>
	var variableJS = prompt('ingresa una contraseña'); 
		if (variableJS != null || variableJS != '') {
			location.href='http://localhost/subir/contra.php?PASS='.concat(variableJS);
		}
		else{
			location.href='http://localhost/subir/contra.php?PASS=EXIT001;
		}

</script>";
	}


?>