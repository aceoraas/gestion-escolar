

<ul id="dropdown1" class="dropdown-content">

<li><a href="./" >Analiticas<i class="material-icons left">grain</i></a></li>

<li><a  href="./usuarios.php">Usuarios<i class="material-icons left">account_box</i></a></li>
<li class="resumen"><a href="./resumen_matricula.php"><i class="material-icons left">contacts</i>Matriculas</a></li>
<li class="jornadas"><a href="./"><i class="material-icons left">content_paste</i>Actividades</a></li>
<li class="resumen_estadistico"><a href="./"><i class="material-icons left">assessment</i>Resumen Estadistico</a></li>
<li class="buscador_alumnos"><a href="./"><i class="material-icons left">search</i>Buscador de alumnos</a>
</li>
<li class="configuracion"><a href="./"><i class="material-icons left">edit</i>Configuracion</a></li>
</ul>



<div class="navbar-fixed">

<nav>
  <div class="nav-wrapper teal lighten-2 z-depth-3">

  	<a href="#" style="padding: 0;" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    
    <a href="./index.php" class="brand-logo center center-align ">

      <img class="responsive-img hide-on-small-only" src="../../assets/img/imgs/ESCUDO.SVG" style="width: 9%; padding-top: 4px;"><h5 class="hide-on-med-and-up">Angel Celestino Bello</h5></a>
    
  <a id='nameuser' class="hide-on-small-only" style="margin-left: 2em;" href="../perfil.php"></a>

    <ul id='menu1' class="right hide-on-med-and-down">
    <!-- Dropdown Trigger -->
      
      
      <li><a  class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
      <li><a id="btnsalida" href="../../procesos/salida.php">Salir<i class="material-icons right">exit_to_app</i></a></li>
    </ul>

      

  </div>

</nav>

</div>



<ul class="side-nav" id="mobile">
      <li><a href="../perfil.php"><i class="material-icons center black-text">account_circle</i><p id='nameuser2' ></p></a></li>      
      <li class="divider"></li>
      <li><a href="./" >Analiticas<i class="material-icons left">grain</i></a></li>
      
<li><a  href="./usuarios.php">Usuarios<i class="material-icons left">account_box</i></a></li>
<li class="resumen"><a href="./resumen_matricula.php"><i class="material-icons left">contacts</i>Matriculas</a></li>
<li class="jornadas"><a href="./"><i class="material-icons left">content_paste</i>Actividades</a></li>
<li class="resumen_estadistico"><a href="./"><i class="material-icons left">assessment</i>Resumen Estadistico</a></li>
<li class="buscador_alumnos"><a href="./"><i class="material-icons left">search</i>Buscador de alumnos</a>
</li>
<li class="configuracion"><a href="./"><i class="material-icons left">edit</i>Configuracion</a></li>
      <li><a id="btnsalida" href="../../procesos/salida.php">Salir<i class="material-icons left">exit_to_app</i></a></li>
      </ul>


<!--fin del navegador-->

<script type="text/javascript">
  

  $(document).ready(function(){   

    $('.noti1').on('click',function () {
      // body...
      alert('no disponible');
    });

    function ins(){
      $.get("../../procesos/urlcontrol/sistemacontrol.php", function(a){
        var a= JSON.parse(a);
        
          if (a.inscripcion!=0||a.inscripcion!='0') {
        $('.inscripcion-active').show();
      }else{
        $('.inscripcion-active').hide();
      }

      }

      );
      
      
      

    }

setInterval(ins,1000);

     $('.dropdown-button').dropdown({
      alignment:'left',
      constrainWidth: false,
        hover: true, // Activate on hover
        belowOrigin: true// Displays dropdown below the button
         // Displays dropdown with edge aligned to the left of button
      });

      $(".button-collapse").sideNav({
      menuWidth: 300, // Default is 300
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true, // Choose whether you can drag to open on touch screens,

      });

  });

$('#btnsalida').on('click',function(){
  sessionStorage.removeItem('misdatosusuario');
  sessionStorage.removeItem('firs');
  localStorage.removeItem('misdatos');

});
$(document).ready(function(){
  var userdate= JSON.parse(sessionStorage.misdatosusuario);
  document.getElementById('nameuser').innerHTML=userdate.usuario;
    document.getElementById('nameuser2').innerHTML=userdate.usuario;

});


</script>