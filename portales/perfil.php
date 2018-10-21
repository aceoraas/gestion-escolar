<?php
    $_GET['n'];
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="shortcut icon" href="../assets/img/imgs/ESCUDO.ico">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
    <script type="text/javascript" src="./js/materialize.min.js"></script>
    <script language="javascript" src="./js/jquery-3.1.1.min.js"></script>
 	<style >
		body{
			overflow:scroll;
			background-color: #017c77;
			color: #FFF;
		}
	</style>
	<title id="title"></title>
</head>
<body >
<?php
$f=base64_decode($_GET['n']);

?>
<!--fin de nav-->
<!--inicio del body-->
<center>
<div class="row">
<br>
    <div class="horizontal black-text" style="width: 98%;">
      
      <div class="col s12 l4 card-content"  style="height: 90%;background-color: white; padding-bottom: 1.5em; padding-top: 1em; border-radius: 5px;">

      <img class="circle responsive-img z-depth-4" width="128" height="128" src="../assets/img/alumnos/pes.jpg">
      <div class="card-content">
          <div id='dataus' style="margin-top: 3%;"></div>
      </div>
      </div>

      <div class="col s12 l8 card-stacked grey lighten-3" style="padding-bottom: 3.75em; padding-top: 1em; border-radius: 5px ;">  
      <div class="card-content">
        	
                <!--Cuenta-->
                <!--Usuario-->
                <div class="input-field col s12">
                <i class="material-icons prefix">account_circle</i>
                <input id='usernameform' disabled  type="text">
                </div>

                <!--Contraseña-->
                <div class="input-field col s12 ">
                <i class="material-icons prefix">vpn_key</i>
                <input id="passactual" type="password" data-length="8" placeholder="Contraseña Actual">
                </div>
                <div class="input-field col s12 l6">
                <i class="material-icons prefix">dialpad</i>
                <input name="contrasenia" type="password" data-length="8" placeholder="Contraseña nueva">
                </div>
                <div class="input-field col s12 l6">
                <i class="material-icons prefix">dialpad</i>
                <input name="contraconfir" type="password" data-length="8" placeholder="Confirme la contraseña">
                </div>

                <!--BOTON CAMBIAR CONTRASEÑA-->
                <div class="input-field col s12">
                <input class="btn" type="submit" id="btnContrasena" value="Cambiar contraseña">
                </div>

                <!--datos personales-->
                <!--Correo-->
                <div class="input-field col s12">
                <i class="material-icons prefix">email</i>
                <input name="correo" type="email" class="validate" placeholder="Correo">
                </div>
               <!--Numero de contacto-->
               <div class="input-field col s12 l6">
               <i class="material-icons prefix">phone</i>
               <input name="tel_fijo" type="tel" class="validate" data-length="11" placeholder="Telefono Fijo">
               </div>
               <div class="input-field col s12 l6">
               <i class="material-icons prefix">phone_iphone</i>
               <input name="tel_movil" type="tel" class="validate" data-length="11" placeholder="Telefono Movil">
               
               </div>        		 

           <a id='salida2' href="./<?php echo $f; ?>/" class="btn red">Volver</a>             
            <a id='salida2' href="#" class="btn">Guardar Cambios</a>
           
        </div>      
      </div>
    </div>
  </div>
  </center>
</body>

<script type="text/javascript">
  //.... variables.......................
  var obj= JSON.parse(localStorage.misdatos);
  var objse= JSON.parse(sessionStorage.misdatosusuario);
  $('#title').html(objse.usuario+' - '+ obj.CARGO.TIPO);
  

//................datos de usuario lateral izquierdo........
  $('#dataus').html('<p></h6><br><h6><b>Cedula: '+objse.id_u+'</b></h6><br><h6><b>Nombre: '+obj.PNombre+' '+obj.SNombre+'</b></h6><br><h6><b>Apellido: '+obj.PApellido+' '+obj.SApellido+'</b></h6><br><h6><b>Fecha_Nacimiento: '+obj.Fecha_Nacimiento+'</b></h6><br><h6><b>Sexo: '+obj.Sexo+'</b></h6><br><h6><b>Edad: '+calcularEdad(obj.Fecha_Nacimiento)+' años </b></h6><br><h6><b>Area Laboral: '+obj.CARGO.TIPO+' '+obj.CARGO.AREA+'</b></h6></p>');

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


//..............Datos de ususarios formulario............
$('#usernameform').val(objse.usuario);
$('#btnContrasena').on('click',function(){
  alert('este boton aun no esta habilitado');
});



 //......................................
   $('#menu1').hide();
   $('#nameuser').hide();

  //......................................
  var dir= obj.CARGO.TIPO;
  dir = dir.toLowerCase();
  var geti=btoa(unescape(encodeURIComponent(dir)));
  
  var a=window.location.href+'?n='+geti; 
  
  if (sessionStorage.laodperfil!='2'){
    window.location=a;
    sessionStorage.laodperfil='2';
   }
  
  $('#salida2').on('click',function() {
    sessionStorage.laodperfil='1';
  });
</script>
</html>