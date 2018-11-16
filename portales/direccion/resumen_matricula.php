<!DOCTYPE html>
<html>
<head>
  <title>Directivo</title>
  <link rel="shortcut icon" href="../../assets/img/imgs/ESCUDO.ico">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>

    <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>

  <style >
    body{
      overflow:scroll;
      background-color: #017c77;
      color: #FFF;
    }
    video{
      border-radius: 5px;
    }
    a{
      padding-top: 1em;
      padding-bottom: 1em;
    }
  </style>
</head>
<body class="row">
<!--NAVegador-->
<!-- Estructura del menu Down -->
<?php
include 'nav.php';
?>
<!-- CONTENIDO DE LA PAGINA-->

<center>

		<div class="col s12 l12">
			<div class="card black-text">

			<div class="card-content">
				<br>
			<div class="input-field col s12 l4">
				<input type="text" id="capacidad" placeholder="Capacidad de la institucion">
			</div>
			<div class="input-field col s12 l4">
				<input type="text" id="porcentaje_inicial" placeholder="Porcentaje para inicial">
			</div>
			<div class="input-field col s12 l4">
				<input type="text" id="porcentaje_basica" placeholder="Porcentaje para Basica">
			</div>
			<div class="input-field col s12 l4">
				<input type="text" id="porcentaje_basica" placeholder="Secciones para Basica">
			</div>
			<div class="input-field col s12 l4">
				<input type="text" id="porcentaje_basica" placeholder="Secciones para Inicial">
			</div>
			<div class="input-field col s12 l4">
				<input type="text" id="porcentaje_basica" placeholder="Niveles para Inicial">
			</div>
			<div class="input-field col s12 l4">
				<input type="text" id="porcentaje_basica" placeholder="Grados para Inicial">
			</div>
			
			
				<div class="col s12 l4 inicialdisponible"></div>
				<div class="col s12 l4 basicadisponible"></div>
				<div class="col s12 l4 basicadisponible"></div>
				<div class="col s12 l4 gruposinicialdisponible"></div>
				<div class="col s12 l4 gruposbasicadisponible"></div>
			
					<div class="card-action">
				<a class="btn"> Guardar</a>	
				</div>

				
			</div>

			</div>
		
		</div>


	 <div class="divider"></div><br>
  <!--Contadores-->

      <div class="col s12 l12"><h2>Capacidad y Vacantes</h2></div>
    <div class="row">

      <div class="col s12 l6" style="margin-top: 1em;">
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
            <h4>Capacidad</h4>
            <div class="Vacantes"><h2>0</h2></div>
        </div>
      </div>



      <div class="col s12 l6" style="margin-top: 1em;" >
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
            <h4>Matricula Basica</h4>
            <div class="seccbasica"><h2>0</h2></div>
          </span>
        </div>
      </div>

      
      <div class="col s12 l6" style="margin-top: 1em;">
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
            <h4>Matricula Inicial</h4>
            <div class="seccinicial"><h2>0</h2></div>
          </span>
        </div>
      </div>




      <div class="col s12 l6" style="margin-top: 1em;">
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
            <h4>Disponibles</h4>
            <div class="disponible"><h2>0</h2></div>
          </span>
        </div>
      </div>

      

</center>

<script type="text/javascript">
	setInterval(vacantes,1000);
function vacantes(){
  $.ajax({

    url:'../../procesos/datos/vacante.php', 
    success:function(data){

     var o = JSON.parse(data);
     console.log(o);
    $('.Vacantes').html('<h2>'+o.Capacidad_ins+'</h2>');
    $('.seccbasica').html('<h2>'+o.Matricula_activa_basica+'</h2>');
    $('.seccinicial').html('<h2>'+o.Matricula_activa_inicial+'</h2>');
    var res = o.Capacidad_ins - (o.Matricula_activa_inicial + o.Matricula_activa_basica);
    $('.disponible').html('<h2>'+res+'</h2>')
  }

});

}
</script>