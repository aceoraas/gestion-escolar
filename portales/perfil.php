<!DOCTYPE html>
<html>
<head>
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
	<title>Fulano</title>
</head>
<body >
	<div class="navbar-fixed">
<nav>
  <div class="nav-wrapper teal lighten-2 z-depth-3">
  	<a style="margin-left:20px" href="#!">USER-DATE</a>
  	<a href="#!" style="margin-left:20px"><?php $fecha=date('d/m/Y'); echo $fecha;?> </a>
    <a href="#!" class="brand-logo center">U.B.A.C.B</a>
    <ul class="right hide-on-med-and-down">
    <!-- Dropdown Trigger -->
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Menu<i class="material-icons right">arrow_drop_down</i></a></li>
    
      <li><a href="#">Chat<span class="new badge red" data-badge-caption="mensajes">56</span></a></li>
      <li><a href="../procesos/salida.php">Salir</a></li>
    </ul>
  </div>
</nav>
</div>

<!--fin de nav-->
<!--inicio del body-->
<center>
<div class="col s12 m7">
    <div class="card horizontal black-text" style="width: 98%; height: 90%;">
      <div class="card-content">
      <img class="circle responsive-img z-depth-4" width="300" height="600" src="../../assets/img/alumnos/pes.jpg">
      <div class="card-content">
                	<p style="margin-top: 3%;">
             		<h6><b>_id:</b> 5b3e96aab832b1454e6c9bdc</h6><br>
					<h6><b>Cedula:</b> V-27226407</h6><br>
					<h6><b>Nombre:</b> Fulano Alberto</h6><br>
					<h6><b>Apellido:</b> De Tal</h6><br>
					<h6><b>Fecha_Nacimiento:</b> 1999/02/06</h6><br>
					<h6><b>Sexo:</b> Masculino</h6><br>
					<h6><b>Edad:</b> 19 años</h6><br>
					<h6><b>Area Laboral:</b> Departamento de Informatica</h6><br>
                   	</p>
      </div>
      </div>
      <div class="card-stacked grey lighten-3" >
        <div class="card-content">
        	<form autocomplete="on"  action="" method="post" accept-charset="utf-8" >
                <!--Cuenta-->
                <!--Usuario-->
                <div class="input-field col s12 m12 l12">
                <i class="material-icons prefix">account_circle</i>
                <input disabled name="usuario" type="text" value="raas">
                </div>
                <!--Contraseña-->
                <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">vpn_key</i>
                <input name="contraconfir" type="password" class="validate"data-length="8">
                <label for="password">Contraseña Actual</label>
                </div>
                <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">dialpad</i>
                <input name="contrasenia" type="password" class="validate" data-length="8">
                <label for="contrasenia">Contraseña nueva</label>
                </div>
                <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">dialpad</i>
                <input name="contraconfir" type="password" class="validate"data-length="8">
                <label for="password">Confirme la contraseña</label>
                </div>
                <!--BOTON CAMBIAR CONTRASEÑA-->
                <div class="input-field col s12 m6 l6">
                <input class="btn "type="submit" name="Contraseña" value="Cambiar contraseña">
                </div>
                <!--datos personales-->
                <!--Correo-->
                <div class="input-field col s12 m6 l6">
                <i class="material-icons prefix">email</i>
                <input name="correo" type="email" class="validate">
                <label for="email">Correo</label>
                </div>
               <!--Numero de contacto-->
               <div class="input-field col s12 m6 l6">
               <i class="material-icons prefix">phone</i>
               <input name="tel_fijo" type="tel" class="validate" data-length="11">
               <label for="Number of Phone">Telefono Fijo</label>
               </div>
               <div class="input-field col s12 m6 l6">
               <i class="material-icons prefix">phone_iphone</i>
               <input name="tel_movil" type="tel" class="validate" data-length="11">
               <label for="Number of Phone">Telefono Movil</label>
               </div>        		              
        	</form>
           <a href="profesorresumen.php" class="btn btn">Volver</a>
        </div>      
      </div>
    </div>
  </div>
  </center>
</body>
</html>