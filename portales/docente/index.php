
<!DOCTYPE html>
<html>
<head>
	<title>Asistencia</title>
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
	</style>
</head> 								
<body onload="activateCamera()">
<!--NAVegador-->
<!-- Estructura del menu Down -->
<?php
 include 'nav.php';
?>

    <br><br>

<!-- CONTENIDO DE LA PAGINA-->

	<section>
	<center>
	<div class="col s12 m7">
    <h2 class="header">Asistencia</h2>
    <div class="card horizontal black-text z-depth-4" style="width: 90%; height: 400px;">
      <div class="card-image">
        <video class="z-depth-5" style="margin-top: 10%; margin-left: 10%; margin-right: 10%; margin-bottom: 5%;" autoplay="true" width="320" id="camaraOn" height="240"> </video>
        <canvas style="display: none;" width="320" id="canvas" height="240"></canvas>
        <div class="card-action">
          <a href="#" class="z-depth-3 btn">Iniciar / Finalizar</a>
        </div>
      </div>
      <div class="card-stacked grey lighten-4" >
        <div class="card-content">
          <center>
          	<div class="card-content" style="margin-top: -4%; margin-left: 10%; margin-right: 10%;">
          		<div class="card-image">
              <img class="z-depth-3 " width="150px" height="150px" src=".../.../assets/img/alumnos/pes.jpg">
            </div>
            <div class="card-content">
             <center>
             	<p style="margin-top: -10%;">
             		<div id="rs"></div>
             		<h4>5 A</h4>
             		<h5>9 Años</h5>
             	</p>
             </center>
             </div>
          	</div>
          </center>
        </div>      
      </div>
    </div>
  </div>

	<!--Contadores-->
	<center>
	<div>
		
    <div class="row "style="display: inline-block; width: 250px; height: 200px;">
      <div class="col s12 m5" style="display: inline-block; width: 250px; height: 200px;">
        <div class="card teal z-depth-5" style="width: 250px; height: 200px;">
          <span class="white-text">
          	<br><i class="material-icons">people</i>
          	<br><h5>Asistidos</h5>
          	<br><h4>1</h4>
          </span>
        </div>
      </div>
    </div>
    <div class="row"style="margin-left: 5%; display: inline-block; width: 250px; height: 200px;">
      <div class="col s12 m5" style="display: inline-block; width: 250px; height: 200px;">
        <div class="card teal z-depth-5" style="width: 250px; height: 200px;">
          <span class="white-text">
          	<br><i class="material-icons">people</i>
          	<br><h5>Total</h5>
          	<br><h4>2</h4>
          </span>
        </div>
      </div>
    </div>
    <div class="row"style="margin-left: 5%; display: inline-block; width: 250px; height: 200px;">
      <div class="col s12 m5" style="display: inline-block; width: 250px; height: 200px;">
        <div class="card teal z-depth-5" style="width: 250px; height: 200px;">
          <span class="white-text">
          	<br><i class="material-icons">people</i>
          	<br><h5>Restantes</h5>
          	<br><h4>1</h4>
          </span>
        </div>
      </div>
    </div>

    </div>
</center>
</body>
<script>


	function activateCamera() {
  var canvas = document.querySelector('canvas');
  var context = canvas.getContext('2d');
	var video = document.querySelector("#camaraOn");
	navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia || navigator.oGetUserMEdia;
    if (navigator.getUserMedia) {
        navigator.getUserMedia({video: true}, handleVideo, videoError);
    }
    function handleVideo(stream) {
        video.src = window.URL.createObjectURL(stream);
    }
    function videoError(e) {
        alert("La camara No esta funcionando, por favor Permita el acceso")
    }

    function captura(){
    context.drawImage(video, 0, 0, canvas.width, canvas.height);
    var c = document.getElementById('canvas');
    var img = canvas.toDataURL('image/jpg',0.5);
    $.post("../../procesos/qrtool/test.php",
      {qr:img},
      function(data){
        $("#rs").html(data);
    }
    );

  }
  //  setInterval(captura,500);
};
  
 

</script>


</html>