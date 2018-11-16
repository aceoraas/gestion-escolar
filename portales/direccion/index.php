
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

<body>
<!--NAVegador-->
<!-- Estructura del menu Down -->
<?php
include 'nav.php';
?>
<!-- CONTENIDO DE LA PAGINA-->

  <center>
  
 <div class="divider"></div><br>
  <!--Contadores-->
      <div><h2>Asistencias del dia</h2></div>
    <div class="row">

      <div class="col s12 l4" style="margin-top: 1em;">
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
            <h4>Asistidos</h4>
            <div class="asistidos"><h2>0</h2></div>
        </div>
      </div>

      <div class="col s12 l4" style="margin-top: 1em;">
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
            <h4>Total</h4>
            <div class="cantidad"><h2>0</h2></div>
          </span>
        </div>
      </div>


      <div class="col s12 l4" style="margin-top: 1em;" >
        <div class="card-content teal z-depth-5" style="padding-top: 1em; padding-bottom: 1em; border-radius: 5px">
          <span class="white-text">
            <h4>Restantes</h4>
            <div class="restantes"><h2>0</h2></div>
          </span>
        </div>
      </div>



<div class="divider"></div><br>
  <!--Contadores-->
  


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

      



<!--ROM END-->
    </div>
</body>

<script type="text/javascript" src="../../procesos/datos/datos.js"></script>
<script>

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){

   
var hoy = new Date();
var dd = hoy.getDate();
var mm = hoy.getMonth()+1;
var yyyy = hoy.getFullYear();

 var my = JSON.parse(localStorage.misdatos);
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


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

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    
  var total=getalumnos("1000");
  if (total.cantidad>0){
$('.cantidad').html('<h2>'+(total.cantidad)+'</h2>');
  }else{
    $('.cantidad').html(html);
  }
  

    setInterval(asistidos,1000);

    setInterval(alumnosnoasistido,1000);
    
  

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
   
     


      


  function calcularEdad(fecha) {
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }

    return edad;
}



function asistidos(){

  var mensaje={
    fecha: yyyy+'-'+mm+'-'+dd,
    tipo: "1"
  };
  $.ajax({
    type: 'post',
      url: '../../db/buscar/asistenciatoday.php',
      data: mensaje,
      success: function (data) {
        
          $('.asistidos').html('<h2>'+data+'</h2>');

      }
    });
    
 
}


function alumnosnoasistido(){
  var mensaje={
    fecha: yyyy+'-'+mm+'-'+dd,
    tipo: "2"
  };

  $.ajax({
    type: 'post',
      url: '../../db/buscar/asistenciatoday.php',
      data: mensaje,
      success: function (data) {
        
          $('.restantes').html('<h2>'+data+'</h2>');

      }
    });
  
  
}
});
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


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


</script>
<?php
include "../footer.php";
?>
</html>