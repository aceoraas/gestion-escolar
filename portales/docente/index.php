
<!DOCTYPE html>
<html>
<head>
  <title>Asistencia</title>
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

          <a class="btn" id='btn-cod' title="Ingresar Codigo Manualmente"><i class="material-icons small">border_color</i></a>
          <a id="btn-enviarcod" class="btn " title="enviar">Enviar</a>
          <a id="btn-cerrar" class="z-depth-3 btn" title="enviar">Cerrar</a>
          <input type="text" id="codalumno" placeholder="Ingrese el codigo">
          <a href="Resumen.php" title="Finalizar asistencia" class="z-depth-3 btn">Finalizar</a>
        </div>
      </div>

        <div class="col s12 l7 card-content grey lighten-4" style="padding-top: 2em; border-radius: 5px">
            <div class="col s12 l12 ">
              <div id="fotoalumno"></div>
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
            <h2>0</h2>
        </div>
      </div>

      <div class="col s12 l4" style="margin-top: 1em;">
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
            <h4>Total</h4>
            <h2>0</h2>
          </span>
        </div>
      </div>


      <div class="col s12 l4" style="margin-top: 1em;" >
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
            <h4>Restantes</h4>
            <h2>0</h2>
          </span>
        </div>
      </div>

    </div>
</body>
<script type="text/javascript" src="../js/qr/html5-qrcode.min.js"></script>

<script>


$(document).ready(function(){

$('#codalumno').hide();
$('#btn-enviarcod').hide();
$('#btn-cerrar').hide();
$('#btn-cod').on('click',function(){
  $('#codalumno').show();
  $('#btn-cod').hide();
  $('#btn-enviarcod').show();
  $('#btn-cerrar').show();
});
$('#btn-cerrar').on('click',function(){
  $('#codalumno').hide();
  $('#btn-cod').show();
  $('#btn-enviarcod').hide();
  $('#btn-cerrar').hide();
});

$('#fotoalumno').html('<i class="material-icons black-text large">account_circle</i><h6>No hay registro</h6>');
$('#reader').html5_qrcode(function(data){

$('#qrasistencia').html(data);
  //window.location=data;
 setTimeout(400);
 $('#fotoalumno').html('<img class="responsive-img circle z-depth-3 " width="120px" src="../../assets/img/alumnos/pes.jpg">');
},
function(error){
},function (videoError){
  alert('La camara no se encuentra disponible, por favor habilitela o cambie de navegador, en caso de no funcionar revise los drivers de su camara, o cambien de dispositivo');
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