<?php 


require './HTML2PDF/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$_GET['c_e']="a";
$_GET['nombre']="a";


$html= "
<head>
<link rel='shortcut icon' href='../../assets/img/imgs/ESCUDO.ico'>
  <meta http-equiv='Content-Type' content='text/html; charset=utf-8'/>
  <meta name='viewport' content='width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
  <link type='text/css' rel='stylesheet' href='../css/materialize.css'  media='screen,projection'/>

    <script type='text/javascript' src='../js/jquery-3.1.1.min.js'></script>
    <script type='text/javascript' src='../js/materialize.min.js'></script>
</head>
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
	<div class='row'>
	<div class='container'>
	<div class='col s12 l12'>
		<div class='col s12 l12'> <img class='circle responsive-img' style='width: 100px; height: 100px;' src='../../assets/img/imgs/alumnos/"echo $c_e;".jpg'></div>
		<center>
		<h3>ESTUDIANTE</h3>
		</center>
		<h3>Nombre: "echo $nombre;"</h3>
		<center>
		<h3>QR</h3>
		</center>
		<div class='col s12 l12'> <img  class='circle responsive-img' style='width: 100px; height: 100px;' src='../../assets/img/qrs/"echo $c_e;".jpg'></div>

	</div>
	</div>	
	</div>
</body>
";


$pdf = new Html2Pdf('P','A4','es','true','UTF-8');
$pdf -> writeHTML(html);
$pdf -> output('Matricula-'.$_GET['c_e']'.pdf');




?>