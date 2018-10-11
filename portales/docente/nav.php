<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">Buscardor</a></li>
  <li class="divider"></li>
  <li><a href="./">Asistencia</a></li>
  <li><a href="Resumen.php">Resumen</a></li>
</ul>
<div class="navbar-fixed">
<nav>
  <div class="nav-wrapper teal lighten-2 z-depth-3">
  	<a id='nameuser' style="margin-left: 20px" href="../perfil.php"></a>
  	<a style="margin-left: 20px" href="#"><?php $fecha=date('d/m/Y'); echo $fecha;?></a>
    <a href="#!" class="brand-logo center">U.B.A.C.B</a>
    <ul class="right hide-on-med-and-down">
    <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
    
      <li><a href="#">Chat</a></li>
      <li><a href="../../procesos/salida.php">Salir</a></li>
    </ul>
  </div>
</nav>
</div>
<!--fin del navegador-->

<script type="text/javascript">
  

  $(document).ready(function(){   
    $('.dropdown-button').dropdown({
  inDuration: 300,
  outDuration: 225,
  constrain_width: false, // Does not change width of dropdown to that of the activator
  hover: true, // Activate on hover
  gutter: 0, // Spacing from edge
  belowOrigin: true// Displays dropdown below the button
   // Displays dropdown with edge aligned to the left of button
});
  });

$(document).ready(function(){
  var userdate= JSON.parse(sessionStorage.misdatosusuario);
  document.getElementById('nameuser').innerHTML=userdate.usuario;
});



</script>