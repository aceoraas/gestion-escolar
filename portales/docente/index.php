
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

      <div class="col s12 l5 card-image white camara lighten-4" style="padding-top:2em; padding-bottom: 2em; border-radius: 5px">
        
        <a class=" led " style="width: 10px; height: 10px;"></a>
        
      <div id="reader" class="video z-depth-5" style="border-radius: 1em; width: 320px; height: 240px;"></div>
        <div class="card-action" style="padding-top: 1em">

          <a class="btn" id='btn-cod' title="Ingresar Codigo Manualmente"><i class="material-icons small">border_color</i></a>
          <a id="btn-enviarcod" class="btn " title="enviar">Enviar</a>
          <a id="btn-cerrar" class="z-depth-3 btn" title="enviar">Cerrar</a>
          <input type="text" id="codalumno" placeholder="Ingrese el codigo">
          <a href="Resumen.php" title="Finalizar asistencia" class="z-depth-3 btn cerrarcamara">Finalizar y enviar</a>
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

    </div>
</body>
<script type="text/javascript" src="../js/qr/html5-qrcode.min.js"></script>
<script type="text/javascript" src="../../procesos/datos/datos.js"></script>
<script>

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$(document).ready(function(){

   
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

$('#fotoalumno').html('<i class="material-icons black-text large">account_circle</i><h6>No hay registro</h6>');

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$('#reader').html5_qrcode(function(data){
var html = '<div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';
  
  compararalumno(data);



  
 setTimeout(400);
},


function(error){

    if (error=='No se pudieron encontrar suficientes patrones de buscador') {
      $('.led').removeClass('btn-floating pulse left red teal yellow  green orange');
        $('.led').addClass('btn-floating pulse left red ');
        
    }
    if (error=='No se pudieron encontrar suficientes patrones de alineación.') {
      $('.led').removeClass('btn-floating pulse left red teal green yellow orange');
      $('.led').addClass('btn-floating pulse left teal');
    }
    if (error=='El grado del localizador de errores no coincide con el número de raíces') {
      $('.led').removeClass('btn-floating pulse left red teal yellow green orange');
      $('.led').addClass('btn-floating pulse left yellow');
    }

    if (error=='error') {
       $('.led').removeClass('btn-floating pulse left red teal yellow green orange');
      $('.led').addClass('btn-floating pulse left orange');

    }

  console.log(error);
},function (videoError){
  alert('La camara no se encuentra disponible, por favor habilitela o cambie de navegador, en caso de no funcionar revise los drivers de su camara, o cambien de dispositivo');
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

var s=[];
var n=[];
 
    
  var total=getmyalumnosp(my.CARGO.AREA , my.CARGO.GRADO , my.CARGO.SECCION);
  if (total.cantidad>0){
$('.cantidad').html('<h2>'+(total.cantidad)+'</h2>');
  }else{
    $('.cantidad').html(html);
  }
  

  for (var i = 0; i < alumnos.length; i++){
    if (sessionStorage.listnegativo==null) {
      n[i]=alumnos[i].C_E;
      
    }else{
      n = JSON.parse(sessionStorage.listnegativo);

      asistidos();
    }
    
  }
  
    $('.restantes').html('<h2>'+n.length+'</h2>');
    
  

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


function compararalumno(codigo){

  for (var i = 0; i < alumnos.length; i++){

    if (sessionStorage.listnegativo==null) {
      n[i]=alumnos[i].C_E;

      
    }else{
      n = JSON.parse(sessionStorage.listnegativo);
    }
    

   if(alumnos[i].C_E===codigo){
    s[i]=alumnos[i].C_E;
     
      
     $('.led').removeClass('btn-floating pulse left red teal yellow orange green');
      $('.led').addClass('btn-floating pulse left green');
    $('.asistidos').html('<h2>'+s.length+'</h2>');
    $('#fotoalumno').html('<img class="circle z-depth-3 resposive-img" width="100" src="../../assets/img/'+alumnos[0].UrlImagen+'">');
    $('#qrasistencia').html('<h4>'+alumnos[i].PNombre+' '+alumnos[i].PApellido+'</h4><h6><b>Cedula Estudiantil:</b> '+alumnos[i].C_E+'</h6><h5><b>Genero:</b> '+sexo(alumnos[i].Sexo)+'<br><blockquote><b>Edad:</b>'+calcularEdad(alumnos[i].Fecha_Nacimiento)+'</blockquote></h5>');
    alumnosnoasistido(codigo);
      sessionStorage.removeItem('listpositivo');
      savedsessionStorage('listpositivo', s);
    
  } 
      sessionStorage.removeItem('listnegativo');
      savedsessionStorage('listnegativo', n);
    
  }


      


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

  function sexo(a){
    if(a=='F'){
      return 'Femenina';
    }
    else{
      return 'Masculino';
    }
  }

}

function asistidos(){
  
   var listpositivo = sessionStorage.getItem('listpositivo');

    if (listpositivo == null) {
        s = [];
    } else {
        s = [];
       s = JSON.parse(listpositivo);
    }
    
  $('.asistidos').html('<h2>'+s.length+'</h2>');
 
}


function alumnosnoasistido(codigo){
  for(var i=0; i < n.length;i++){

    if(n[i]===codigo){
      
      n.splice(i, 1);
      sessionStorage.removeItem('listnegativo');
      savedsessionStorage('listnegativo', n);
    }
  }
   var listnegativo = sessionStorage.listnegativo;
    if (listnegativo == null) {
        n = [];
    } else {
        n = [];
       n = JSON.parse(listnegativo);
    }
  $('.restantes').html('<h2>'+n.length+'</h2>');
  
}



   

});


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


</script>
<?php
include "../footer.php";
?>
</html>