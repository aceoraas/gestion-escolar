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



    <h3><b>Bienvenido al registro del sitema de gestion escolar para la U.E.B. Angel Celestino Bello</b></h3>
    <br><p><big><b>Querido Usuario Por favor Lea con detenimiento y rellene todos los campos requerido para su correcta creacion de la cuenta en el sistema del plantel, si necesita ayuda o dirección tecnica acuda a al departamento de informatica del plantel.</b><br></big></p></div></div>
<div class="divider"></div>
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
     <input id='Usuario' type='text' >
     <label id='labelusuario'>Usuario</label>
     </div><br><br><br><br>
     
     <div id='divcontra1'class='input-field col s12 l6'>
     <i id='icontra1'class='material-icons prefix'>dialpad</i>
     <input id='contra1' type='password'>
     <label id='labelcontra1'>Contraseña</label>
     </div><dr>
     </dr>
     <div id='divcontra2'class='input-field col s12 l6'>
     <i id='icontra2'class='material-icons prefix'>dialpad</i>
     <input id='contra2' type='password' >
     <label id='labelcontra2'>Confirme la contraseña</label>
     </div><br>
           
    <!--Pregunta de seguridad-->
      <div id='divseguridad1' class='input-field col s12 l6'>
      <i id='iseguridad1'class='material-icons prefix'>security</i>
      <input id='Pregunta' type='text' >
      <label id='labelseguridad1'>Pregunta de seguridad</label>
      </div>
      <dr>
        
      </dr>
      <div id='divseguridad2' class='input-field col s12 l6'>
      <i id='iseguridad2' class='material-icons prefix'>security</i>
      <input id='pregunta2' type='text'>
      <label id='labelseguridad2'>Respuesta de seguridad</label>
      </div><br><br><br>
<div class="divider"></div>
    <!--Boton siguiente primera parte del registro-->
     <div id='divsiguiente' class='input-field'>
     <input value='2' type='text' style='display:none;'>
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
  </div></div></nav><br><br><i class='large material-icons'>vpn_key</i><br><p><big><b>Guarda estos datos, son tu llave de recuperacion de cuenta</b></big></p>
<div class="divider"></div>
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
  
<div class="divider"></div>
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
  <nav><div class='nav-wrapper teal z-depth-3'><div class='col s12 '>
  <a class='breadcrumb'>...</a><a class='breadcrumb'>LLave de recuperacion</a><a class='breadcrumb'>Identificacion</a></div></div></nav>
  <br><br>
  <i class=' center medium material-icons'>people</i>
  <h4>Datos personales</h4>
  <br><p><big><b>Por favor rellene los campos requeridos para su identificacion y contacto</b></big></p></div>
  <div class="divider"></div>
  <!--nombres y apellidos-->
    

    <div class='input-field col s12 l3'>
    <input type='text' >
    <label>Primer Nombre</label>
    </div>

    <div class='input-field col s12 l3'>
    <input type='text' >
    <label>Segundo Nombre</label>
    </div>

    <div class='input-field col s12 l3'>
    <input type='text' >
    <label>Primer Apellido</label>
    </div>

    <div class='input-field col s12 l3'>
    <input type='text' >
    <label>Segundo Apellido</label>
    </div>

    <div class='input-field col s12 l4'>
    <input disabled="true" type='text' value="V-27226407" >
    <label>Cedula</label>
    </div>


    <!--fecha de nacimiento picker-->
    <div class='input-field col s12 l4'>
    <i class='material-icons prefix'>today</i>
    <input type='text'  class='datepicker'>
    <label>Fecha de Nacimiento</label>
    </div>

    <div class='input-field col s12  l4'>
    <select id=''>
      <option disabled value="">Selecione su Sexo</option>
      <option value="M">Masculino</option>
      <option value="F">Femenino</option>
      option
      option
    </select>
    <label>Genero</label>
    </div>

    <div class='input-field col s12 l4'>
    <i class='material-icons prefix'>mail</i>
    <input type='email' >
    <label>Correo</label>
    </div>

    <div class='input-field col s12 l4'>
    <i class='material-icons prefix'>phone_iphone</i>
    <input type='text' >
    <label>Numero de su Telefono Movil</label>
    </div>
    <div class='input-field col s12 l4'>
    <i class='material-icons prefix'>call</i>
    <input type='text' >
    <label>Numero de su Telefono Fijo</label>
    </div>

    <div class='input-field col s12  l3'>
    <select id=''>
      <option disabled value="">Selecione un Estado</option>
    </select>
    <label>Estado</label>
    </div>
    <div class='input-field col s12  l3'>
    <select id=''>
      <option disabled value="">Selecione una Ciudad</option>
    </select>
    <label>Ciudad</label>
    </div>
    <div class='input-field col s12  l3'>
    <select id=''>
      <option disabled value="">Selecione un Municipio</option>
    </select>
    <label>Municipio</label>
    </div>
    <div class='input-field col s12  l3'>
    <select id=''>
      <option disabled value="">Selecione una Parroquia</option>
    </select>
    <label>Parroquia</label>
    </div>

<div class="divider"></div>

    <!--botones-->
 
<div class='input-field col s12  offset-l2 l3'>
<a id='btnatras3' class='waves-effect waves-light btn'>atras</a>
</div>
 <div class='input-field col s12  offset-l2 l3'>
<a id='btnpaso3' class='waves-effect waves-light btn'>siguiente</a>
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
  <div class='card-content'> 
  <nav><div class='nav-wrapper teal z-depth-3'><div class='col s12'>
  <a class='breadcrumb'>...</a><a class='breadcrumb'>Identificacion</a><a class='breadcrumb'>Area Laboral</a></div>
  </div></nav><br><br>

  <i class=' center medium material-icons'>work</i>
  <h4>Datos de Area Laboral</h4>
  <br>
  <p><big><b>Lea con detenimiento y rellene todos los campos requerido para su correcta inscripcion en el sistema de gestion escolar de la unidad educativa angel celestino bello, estos datos son de gran importancia y seran revisados para su posible aprobación, tenga en cuenta que al finalizar debera ingresar con su cuenta al sistema de gestion escolar para obtenga informacion del estado de su solicitud y habilitacion del sistema en su area.</b><br></big></p></div></div>
<br>
<div class="divider"></div>
<div class="divider"></div>
<div class='input-field col s12  offset-l2 l3'>
<a id='btnatras4' class='waves-effect waves-light btn'>atras</a>
</div>
<div class='input-field col s12  offset-l2 l3'>
<a id='btnRegistrar' class='waves-effect waves-light btn red'>Registrar</a>
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
  