<!DOCTYPE html>
<html>
<!--login de sistema de gestion escolar-->
<head>
    <title>SISTEMA</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
	<style >
		body{
			overflow:scroll;
			background-color: #017c77;
			color: #FFF;
		}
	</style>
</head>

<body>
 <!--titulo de inicio-->
    <div style="margin-top: 5%" class="container">
    <div>
    <div>
    <center>
    <!--IDENTIFICACION DEL SITIO-->
    <h4>U.E.B ÁNGEL CELESTINO BELLO</h4>
        
    <!--FORMULARIO-->	
    <form autocomplete="off"  action="#hola" method="post" accept-charset="utf-8" >
    
     <!--inputs para INGRESAR-->

    <div style="width: 70%;" class="row">
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" id="user" placeholder="Usuario">
    </div>
    
    <div class="input-field col s12">
    <i class="material-icons prefix">dialpad</i>
    <input type="password" id="pass" placeholder="Contraseña">
    </div>

    <!--botones de login-->
    </div> 
    <br>
    <div class="row">
    <div class="col s12 l5" >
    <a type="submit" id="btnentrar"class="waves-effect waves-light btn red">Entrar</a>
    </div>
    <div class="col s12 l7" >
    <a class="waves-effect waves-light btn grey" href="recuperar">Olvide mi usuario o contraseña</a>
    </div>
    </div>
    </form>
    </center>
    <br>

    <!--Cartelera informativa-->	

     <div class="row">
      <div >
      <center>
        <div class="card-content">
         <div>
         <h6><b><i><div id="Cartelera-titulo"></div></i></b></h6>
         </div>
      </center>

        <div id="Cartelera-contenido"></div>
     
     </div>
     </div>
    


    <!--botones para otras opciones del sistema-->
    <center>
    <div class="row">
    
    <div class="col s12 l6" >  
    <a class="waves-effect waves-light btn" href="registro/index.php">Nueva Cuenta</a>
    </div>
    
    <div class="col s12 l6" >
    <a class="waves-effect waves-light btn" href="##">Asistencia Trabajadores</a>
    </div>

    </center>

    <br><br><br><br><br><br>            


    <!--scripts-->
        
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/login.js"></script>
</body>
</html>