<!DOCTYPE html>
<html>
<head>
	<title>Resumen</title>
	<link rel="shortcut icon" href="../../assets/img/imgs/ESCUDO.ico">
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
			Imprimir:
			<a class="btn-floating waves-effect waves-circle waves-light "><i class="material-icons left prefix">print</i></a>
			Descargar:
			<a class="btn-floating waves-effect waves-circle waves-light"><i class="material-icons left prefix">save</i></a>
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
			<th>Cedula Estudiantil</th>
			<th>Estado</th>
		</tr>
	</thead>
	
	<tbody class="resumen-">
	</tbody>
	<tbody class="resumen--">
		
	</tbody>
</table>
</div>


</div>
</div>
</div>

<!-- fin del cuerpo-->
</body>
<script type="text/javascript" src="../../procesos/validacion/session.js"></script>
<script type="text/javascript" src="../../procesos/datos/datos.js">
	
</script>


<script type="text/javascript">

exite('log');
$( document ).ready(function() {
var hoy = new Date();
var dd = hoy.getDate();
var mm = hoy.getMonth()+1;
var yyyy = hoy.getFullYear();
	
var s = JSON.parse(sessionStorage.listpositivo);
var n = JSON.parse(sessionStorage.listnegativo);




for (var i = 0; i < s.length; i++) {
	
	if (alumnos[i].C_E===s[i]){

		$('.resumen-').html($('.resumen-').html()+'<td class="hide-on-med-and-down"><img class="circle responsive-img z-depth-4" src="../../assets/img/'+alumnos[i].UrlImagen+'" width="70"></td><td>'+alumnos[i].PNombre+' '+alumnos[i].SNombre+'</td><td>'+alumnos[i].PApellido+' '+alumnos[i].SApellido+'</td><td>'+alumnos[i].C_E+'</td><td><a href="#reporte" class=" z-depth-4 btn-floating waves-effect waves-circle waves-light teal lighten-2 pulse"><i class="material-icons">done</i></a></td>');
		
		
					var mensaje={
						d:{
							fecha: yyyy+'-'+mm+'-'+dd,
							grado: alumnos[i].Grado,
							seccion: alumnos[i].Seccion,
							tipo: 'positiva',
							dato: alumnos[i].C_E
						}};

						$.ajax({
							type: 'post',
							url: '../../db/agregar/asistenciadb.php',
							data: mensaje,
							success: function (data) {
								console.log(data);
							}
						});	
	
	}
}
for (var i = 0; i < alumnos.length; i++){
	
	if(alumnos[i].C_E!=s[i]){
	

		$('.resumen--').html($('.resumen--').html()+'<tr><td class="hide-on-med-and-down"><img class="circle responsive-img z-depth-4" src="../../assets/img/'+alumnos[i].UrlImagen+'" width="70"></td><td>'+alumnos[i].PNombre+' '+alumnos[i].SNombre+'</td><td>'+alumnos[i].PApellido+' '+alumnos[i].SApellido+'</td><td>'+alumnos[i].C_E+'</td><td><a href="#reporte" class=" z-depth-4 btn-floating waves-effect waves-circle waves-light red lighten-2 pulse"><i class="material-icons">cancel</i></a></td></tr>');
		
		var mensaje={
			d:{
				fecha: yyyy+'-'+mm+'-'+dd,
				grado: alumnos[i].Grado,
				seccion: alumnos[i].Seccion,
				tipo: 'negativa',
				dato: alumnos[i].C_E
			}
		};
		$.ajax({
			type: 'post',
			url: '../../db/agregar/asistenciadb.php',
			data: mensaje,
			success: function (data) {
				console.log(data);
			}
		});
	
	}

}
});


</script>
<?php
include '../footer.php';
?>

</html>