
<!DOCTYPE html>
<html>
<head>
	<title>Asistencia</title>
  <link rel="short icon" href="">
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
	</style>
</head> 

<body>
<!--NAVegador-->
<!-- Estructura del menu Down -->
<?php
 include 'nav.php';
?>
<!-- CONTENIDO DE LA PAGINA-->

	<center>
	<div class="row">
    <h2 class="col s12 l12 ">Asistencia</h2>
    
    <div class="black-text" style="width: 90%;">
     
      <div class="col s12 l5 card-image white lighten-4" style="padding-top:2em; padding-bottom: 2em; border-radius: 5px">
      
      <div id="reader" class="video z-depth-5" style="border-radius: 1em; width: 320px; height: 240px;"></div>
        <div class="card-action" style="padding-top: 1em">
          <a href="Resumen.php" class="z-depth-3 btn">Finalizar</a>
        </div>
      </div>
 
        <div class="col s12 l7 card-content grey lighten-4" style="padding-top: 2em; border-radius: 5px">
          	<div class="col s12 l12">
                <img id='fotoalumno' class=" circle z-depth-3 " width="150px" height="150px" src="../../assets/img/alumnos/pes.jpg">
                <div id="qrasistencia"></div>
            </div>

        
         </div>
    </div> 
</div> <!--row-->

 <div class="divider"></div><br>
	<!--Contadores-->            
  
    <div class="row">

      <div class="col s12 l4" style="margin-top: 1em;">
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          	<h4>Asistidos</h4>
          	<h2>1</h2>
        </div>
      </div>
    
      <div class="col s12 l4" style="margin-top: 1em;">
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
          	<h4>Total</h4>
          	<h2>2</h2>
          </span>
        </div>
      </div>
    
    
      <div class="col s12 l4" style="margin-top: 1em;" >
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
          	<h4>Restantes</h4>
          	<h2>1</h2>
          </span>
        </div>
      </div>

    </div>
</body>
<script type="text/javascript" src="../js/qr/html5-qrcode.min.js"></script>

<script>


$(document).ready(function(){

  $('#reader').html5_qrcode(function(data){ 
  
  $('#qrasistencia').html(data);
    //window.location=data;
   setTimeout(400);

  },
  function(error){
  },function (videoError){
    alert('Disculpe habilite la camara');
  });
  });

function cargarmisalumnos(){

}
function compararalumno(codigo){

}
//var ai;
function alumnosnoasistido(codigo){
//localStorage.noasistidos='"'+localStorage.noasistidos+'","'+ai'":"'+codigo+'"';
 // ai++;
}
function alumnosasistido(codigo){
  //localStorage.asistidos=codigo;
}



</script>
<?php
include "../footer.php";
?>
</html>