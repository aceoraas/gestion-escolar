<!DOCTYPE html>
<html>
<head>
  


	 <title>REGISTRO</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>            
<style>body{overflow:scroll;background-color:#017c77;color:#FFF; }</style>
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
    <dr>
        <br>
      <div id='divseguridad1' class='input-field col s12 l6'>
      <i id='iseguridad1'class='material-icons prefix'>security</i>
      <input id='Pregunta' type='text' >
      <label id='labelseguridad1'>Pregunta de seguridad</label>
      </div>
      <dr>
        <br>
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
    

    <div id='divnombre1' class='input-field col s12 l3'>
    <input id='1nombre' type='text' >
    <label id="labelnombre1">Primer Nombre</label>
    </div>

    <div id='divnombre2'class='input-field col s12 l3'>
    <input id='2nombre' type='text' >
    <label id="labelnombre2">Segundo Nombre</label>
    </div>

    <div id='divnombre3'class='input-field col s12 l3'>
    <input id='1apellido'type='text' >
    <label id="labelnombre3">Primer Apellido</label>
    </div>

    <div id='divnombre4'class='input-field col s12 l3'>
    <input id='2apellido' type='text' >
    <label id="labelnombre4">Segundo Apellido</label>
    </div>

    <div class='input-field col s12 l4'>
    <input id='cedulatext' disabled="true" type='text'>
    </div>


    <!--fecha de nacimiento picker-->
    <div id='divcalendar' class='input-field col s12 l4'>
    <i id='icalendar' class='material-icons prefix'>today</i>
    <input id="fecha_naci" type='text'  class='datepicker'>
    <label id="labelcalendar">Fecha de Nacimiento</label>
    </div>

    <div id='divgenero' class='input-field col s12  l4'>
    <select id='genero'>
      <option value='' disabled selected >Selecione su Sexo</option>
      <option value="M">Masculino</option>
      <option value="F">Femenino</option>
      
    </select>
    <label id="labelgenero">Genero</label>
    </div>

    <div id='divcorreo' class='input-field col s12 l4'>
    <i id='icorreo' class='material-icons prefix'>mail</i>
    <input id='email' type='email' >
    <label id="labelcorreo" >Correo</label>
    </div>

    <div id='divmovil' class='input-field col s12 l4'>
    <i id='imovil' class='material-icons prefix'>phone_iphone</i>
    <input id='movil' type='text' >
    <label id="labelmovil" >Numero de Telefono Movil</label>
    </div>

    <div id='divfijo' class='input-field col s12 l4'>
    <i id='ifijo' class='material-icons prefix'>phone</i>
    <input id='fijo' type='text' >
    <label id="labelfijo" >Numero de Telefono Fijo</label>
    </div>


     <div id='divdir' class='input-field col s12 l12'>
    <i id='idir' class='material-icons prefix'>mapa</i>
    <input  id='dirdetalle' type='text' placeholder="Estado, Municipio, Ciudad, Parroquia, Sector, Calle, Casa">
    <label id="labeldir" >Dirección</label>
    </div>



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
<div class='row'>
<div class='col s12 l12'>
  
  <div class='col s12 l12'>

    <div class='input-field col s12  l6'>
    <select id='glaboral'>
      <option value=''disabled selected>Selecione su area laboral</option>

      <option value="Docente">Docente</option>

      <option value="Administrativo">Administrativo</option>

      <option value="Salud">Salud</option>
      <option value="Obrero">Obrero</option>

      <option value="Directivo">Directivo</option>

      <option value="Lopna">Lopna</option>
      
    </select>
    <label>Tipo de personal</label>
    </div>


    <div id='dtd'class='input-field col s12  l6'>
    <select id='tdocente'>
      <option value='' disabled selected>Selecione su area</option>
      <option value="1">Docente Particular</option>
      <option value="2">Especialidad</option>
    </select>
    <label>Area</label>
    </div>

    <div id='dta'class='input-field col s12  l6'>
    <select id='tadministrativo'>
      <option value='' disabled selected>Selecione su Area</option>
      <option value="Secretaria">Secretaria</option>
      <option value="otro">Otro</option>
    </select>
    <label>Area</label>
    </div>

  <div id='dtdir'class='input-field col s12  l6'>
    <select id='tdirectivo'>
      <option value='' disabled selected>Selecione su Area</option>
      <option value="Direccion">Dirección</option>
      <option value="Subdireccion">Subdirección</option>
    </select>
    <label>Area</label>
    </div>


    <div id='dto'class='input-field col s12  l6'>
    <select id='tobrero'>
      <option value='' disabled selected>Selecione su Area</option>
      <option value="obrero">Obrero/a</option>
      <option value="cocinero">Cocinera de la Patria</option>
      <option value="otro">Otro</option>
    </select>
    <label>Area</label>
    </div>

<div id="docentep">

  <div class='input-field col s12  l6'>
    <select id='docenteparticular'>
      <option value=''disabled selected >Selecione el grado</option>
      <option value="Inicial">Inicial</option>
      <option value="1">1 er</option>
      <option value="2">2 do</option>
      <option value="3">3 ero</option>
      <option value="4">4 to</option>
      <option value="5">5 to</option>
      <option value="6">6 to</option>
    </select>
    <label>Grado</label>
    </div>

    <div id='divsec' class='input-field col s12  l6'>
    <select id='docenteparticular2'>
      <option value=''disabled selected >Selecione la sección</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>

    </select>
    <label>Sección</label>
    </div>  

</div>



<div id="docentee">

    <div class='input-field col s12  l6'>
    <select id='docenteespecialidad'>
      <option value=''disabled selected>Selecione su especialidad</option>
      <option value="Salud">Salud</option>
      <option value="Educacion fisica">Educacion fisica / Deporte</option>
      <option value="Ajedrez">Ajedrez</option>
    </select>
    <label>Especialidad</label>
    </div>       
</div>



<div id='dotro' class='input-field col s12 l6'>
    <input id='otro' type='text' >
    <label>Otro</label>
    </div>
        
    <!--botones-->

    </div>



<div class='input-field col s12  offset-l2 l3'>
<a id='btnatras4' class='waves-effect waves-light btn'>atras</a>
</div>

<div class='input-field col s12  offset-l2 l3'>
<a data-target="modal1" id='btnRegistrar' class='waves-effect waves-light btn red btn modal-trigger'>Registrar</a>
</div>
</div></div>
<br>

</center>
</div>





  <!-- Modal Structure -->
  <div id="modal1" class=" black-text modal modal-fixed-footer">
    <div class="modal-content">
      <h4>¿Sus datos estan Correctos?</h4>
      <p>Nombre:<div style="color: red;" id="mn"></div></p>
      <p>Apellido: <div style="color: red;" id="ma"></div></p>
      <p>Cedula: <div style="color: red;" id="mc"></div></p>
      <p>Genero: <div style="color: red;" id="mg"></div></p>
      <p>Fecha de Nacimiento: <div style="color: red;" id="mfn"></div></p>
      <p>Numero de Movil: <div style="color: red;" id="mtm"></div></p>
      <p>Numero de Casa: <div style="color: red;" id="mtf"></div></p>
      <p>Correo: <div style="color: red;" id="mm"></div></p>
      <p>Dirección: <div style="color: red;" id="md"></div></p>
      <p>Tipo de Cargo: <div style="color: red;" id="mt"></div></p>
      <p>Area: <div style="color: red;" id="mta"></div></p>    
    </div>
    <div class="modal-footer">
      
      <a id="datosm" class="white-text modal-action modal-close waves-effect waves-green btn-flat red">INCORRECTO</a>
      <a id="deacuerdo" class="white-text modal-action modal-close waves-effect waves-green btn-flat teal">Correcto</a>
    </div>
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
  