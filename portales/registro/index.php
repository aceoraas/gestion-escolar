<!DOCTYPE html>
<html>
<head>
  
<meta HTTP-EQUIV="Pragma" CONTENT="no-cache">

	 <title>REGISTRO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>            
<style>body{overflow:scroll;background-color:#017c77;color:#FFF;}</style>
</head>

<body>
<div id="crearcuenta">
	<center>
	<div class='card black-text row z-depth-3'style='width:90%;height:100%;text-align:center;align-items:center;justify-content:center;'>
  <br><div class='row'><div class='col s12 l12'>



    <h3><b>Bienvenido al registro de la U.E.B. Angel Celestino Bello</b></h3>
    <br><p><big>Lea con detenimiento y rellene todos los campos requerido para su inscripcion en el plantel, si necesita ayuda tecnica acuda a al soporte tecnico del plantel.<br></big></p></div></div>

    <div class='card-content'> 
    <nav><div class='nav-wrapper teal z-depth-3'><div class='col s12'>
    <a href='#!' class='breadcrumb'>Crear Cuenta</a></div></div>
    </nav><br><br>
  
  <!--formulario inicial registro-->        
  <form action='index.php' method='post' autocomplete='false'>
    
    <!--nacionalidad-->
     <div id='divnacionalidad' class='input-field col s12 l3'>
     <select id='nacionalidad'>
     <option value=''disabled selected>Selecione una Nacionalidad</option>
     <option value='V'>Venezolano</option>
     <option value='E'>Extranjero</option>
     </select>
     <label id='labelnacionalidad'>Nacionalidad</label>
     </div>

    <!--cedula-->
     <div id='divcedula' class='input-field  col s12 l9'>
     <i id='icedula' class='material-icons prefix'>account_box</i>
     <input id='cedula'  type='text' data-length='8'>
     <label id='labelcedula'>Cedula</label>                
     </div><br><br><br><br>
                
    <!--Usuario y contraseña-->
     <div id='divusuario' class='input-field col s12 l12'>
     <i id='iusuario' class='material-icons prefix'>account_circle</i>
     <input id='Usuario' type='text' name='Usuario'>
     <label id='labelusuario'>Usuario</label>
     </div><br><br><br><br>
     
     <div id='divcontra1'class='input-field col s12 l6'>
     <i id='icontra1'class='material-icons prefix'>dialpad</i>
     <input id='contra1' type='password' name='contra'>
     <label id='labelcontra1'>Contraseña</label>
     </div><dr>
     </dr>
     <div id='divcontra2'class='input-field col s12 l6'>
     <i id='icontra2'class='material-icons prefix'>dialpad</i>
     <input id='contra2' type='password' name='Confirmecontra'>
     <label id='labelcontra2'>Confirme la contraseña</label>
     </div><br>
           
    <!--Pregunta de seguridad-->
      <div id='divseguridad1' class='input-field col s12 l6'>
      <i id='iseguridad1'class='material-icons prefix'>security</i>
      <input id='Pregunta' type='text' name='Pregunta'>
      <label id='labelseguridad1'>Pregunta de seguridad</label>
      </div>
      <dr>
        
      </dr>
      <div id='divseguridad2' class='input-field col s12 l6'>
      <i id='iseguridad2' class='material-icons prefix'>security</i>
      <input id='pregunta2' type='text' name='Confirmepregunta'>
      <label id='labelseguridad2'>Respuesta de seguridad</label>
      </div><br><br><br>

    <!--Boton siguiente primera parte del registro-->
     <div id='divsiguiente' class='input-field'>
     <input value='2' type='text' style='display:none;' name='paso'>
     <a id='btnpaso1' class='waves-effect waves-light btn'>siguiente</a>        
     </div>
    
    </form></div>
</div>
</div>
</center>
</div>


<div id="backup">
  <center>
  <div class='card black-text row z-depth-3'style='width:90%;height:100%;text-align:center;align-items:center;justify-content:center;'>
  <br><div class='row'>
<div class='card-content'> 
  <nav><div class='nav-wrapper teal z-depth-3'><div class='col s12'>
  <a class='breadcrumb'>Crear Cuenta</a><a class='breadcrumb'>LLave de recuperacion</a>
  </div></div></nav><br><br><i class='large material-icons'>vpn_key</i><br><p><big>Guarda estos datos, son tu llave de recuperacion de cuenta</big></p>

    <div id='named' class='left-align input-field col s12 l9'>
    <i><b><big><h6>Nombre:</h6></big></b></i>
    <i><b><input  style='text-align: center;'type='text' readonly="true" id='name'></b></i>
    </div>

     <div id='divcedulap2'class='center-align input-field col s12 l3'>
    <i><b><big><h6>Cedula de Identidad:</h6></big></b></i>
    <i><b><input  style='text-align: center;'type='text' readonly="true" id='cu'></b></i>
    </div>


    <div id='dividunico'class='center-align input-field col s12 l4'>
    <i><b><big><h6>ID cuenta unica:</h6></big></b></i>
    <i><b><input style='text-align: center;' type='text' readonly="true" id='id'></b></i>
    </div>

    <div id='divhash' class='center-align input-field col s12 l8'>
    <i><b><big><h6>Llave Hash:</h6></big></b></i>
    <i><b><input style='text-align: center;'type='text' readonly="true" id='pwd'></b></i>
    </div>

    <div  class='center-align input-field col s12 l4'>
    <i><b><big><h6>Usuario:</h6></big></b></i>
    <i><b><input style='text-align: center;'type='text' readonly="true" id='usr'></b></i>
    </div>


  <div class='center-align input-field col s12 l4'>
  <i><b><big><h6>Pregunta Secreta:</h6></big></b></i>
  <i><b><input style='text-align: center;'type='text'readonly='true'id='ps'></b></i>
  </div>

  <div class='center-align input-field col s12 l4'>
  <i><b><big><h6>Respuesta Secreta:</h6></big></b></i>
  <i><b><input style='text-align: center;' type='text'readonly='true'  id='rs'></b></i>
  </div>

<div  class='input-field col s12 offset-l2 l3'>
<a id='bajarllave'class='waves-effect waves-light btn'>Bajar Copia<i class='material-icons left'>cloud_download</i></a>
</div>
<div class='input-field col s12  offset-l2 l3'>
<a id='btnpaso2'class='waves-effect waves-light btn'>siguiente</a>
</div>
</div>
</div>
</div>
</center>
</div>


<div id="datospersonales">
  <center>
  <div class='card black-text row z-depth-3'style='width:90%;height:100%;text-align:center;align-items:center;justify-content:center;'>
  <br>
  <div class='row'>
  <div class='col s12 l12'>
   
  
  <div class='card-content'> 
  <nav><div class='nav-wrapper teal z-depth-3'><div class='col s12'>
  <a class='breadcrumb'>Crear Cuenta</a><a class='breadcrumb'>LLave de recuperacion</a><a class='breadcrumb'>Identificacion</a></div></div></nav><br><br>
  Tercera vista vista <br><p><big>aqui se pide los datos personales y el area laboral</big></p></div>
  
  <!--fecha de nacimiento picker-->
    <div class='input-field col s12 m12 l12'>
    <i class='material-icons prefix'>today</i>
    <input type='text' name='fecha_nacimiento' class='datepicker'>
    <label for='first_name'>Fecha de Nacimiento</label>
    </div>
  <div class='input-field col s12  offset-l2 l3'>
<a id='btnpaso3' class='waves-effect waves-light btn'>siguiente</a>
</div>
<div class='input-field col s12  offset-l2 l3'>
<a id='btnatras3' class='waves-effect waves-light btn'>atras</a>
</div>
 </div>
</div>
</div>
</center>
</div>



<div id="datoslaborales">
  <center>
  <div class='card black-text row z-depth-3'style='width:90%;height:100%;text-align:center;align-items:center;justify-content:center;'>
  <br><div class='row'><div class='col s12 l12'>
  <h3><b>Bienvenido al registro de la U.E.B. Angel Celestino Bello</b></h3><br>
  <p><big>Lea con detenimiento y rellene todos los campos requerido para su inscripcion en el plantel, si necesita ayuda tecnica acuda  a al soporte tecnico del plantel.<br></big></p></div></div>
                
  <div class='card-content'> 
  <nav><div class='nav-wrapper teal z-depth-3'><div class='col s12'>
  <a class='breadcrumb'>Crear Cuenta</a><a class='breadcrumb'>LLave de recuperacion</a><a class='breadcrumb'>Identificacion</a><a class='breadcrumb'>Area Laboral</a></div>
  </div></nav><br><br>

  Cuarta vista vista <br><p><big>aqui se pide los datos segun el area laboral y el area laboral</big></p>

<div class='input-field col s12  offset-l2 l3'>
<a id='btnatras4' class='waves-effect waves-light btn'>atras</a>
</div>
</div></div>
<br>

</center>
</div>

<!--
<div id="error404" hidden="false">
<style>body{background-image: url('../../assets/img/imgs/rocket.gif'),url('../../assets/img/imgs/giphy2.gif');background-repeat: no-repeat, repeat;text-align:center;}div{display: none;}</style></div></div></div><br><br><br><br><br><br><br><br><br>
  
  <h1><i><b>ERROR<br>4 0 4</b><br>¿Parece que nos hemos perdido en el espacio?</i></h1><br><a class='btn' href='../'>¡Volver a Tierra!</a><br><br><br>
</div>
fin del formulario-->
			
			
        </body>
        <script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
              <script type="text/javascript" src="../js/materialize.min.js"></script>
              <script type="text/javascript" src="../js/picker.js"></script>
              <script type="text/javascript" src="../js/registro.js"></script>
        </html>
  