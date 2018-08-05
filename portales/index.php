<?php
session_start();
if($_SESSION['inicia']== true){
    header("location: ".$_SESSION['url']."?id=".base64_encode($_SESSION['u_id']));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>INICIO</title>
	<!--login de sistema de gestion escolar-->
	<meta charset="utf-8"><!--conpatible con letras ñ o acentos-->
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <script type="text/javascript" src="js/materialize.min.js"></script>
	<style >
		body{
			overflow:scroll;
			background-color: #017c77;
			color: #FFF;
		}
	</style>
</head>
<!--EN EL BODY SE VA A INCLUIR UN FORMULARIO QUE SERA EL INICIO DE SESION DEL SISTEMA-->
<body>
 <!--titulo de inicio-->
    <div style="margin-top: 5%" class="container">
        <div >
            <div >
                <center> <!--contenido centrado-->
                    <!-- AQUI PUEDE IR TANTO UNA PALABRA O UNA IMAGEN COMO LOGOTIPO-->
                    <h2>ÁNGEL CELESTINO BELLO</h2>
                    <!--AQUI INICIA EL FORMULARIO-->	
                    <form autocomplete="off"  action="../procesos/validacion_login.php" method="post" accept-charset="utf-8" >
                        <!--inputs para inicio-->
                        <div style="width: 76%;" class="row">
                            <div class="input-field">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" name="user" placeholder="Usuario">
                            </div>
                            <div class="input-field">
                                <i class="material-icons prefix">dialpad</i>
                                <input type="password" name="pass" placeholder="Contraseña">
                            </div>
                        </div> 
                <br>
                    <input type="submit" value="Entrar"  class="btn red">
                    </form>
                    <!--se finaliza el formulario de inicio de sesion-->	
                <br>
                <div>
                    <p>
                        <h6>
                            Desarrollado por: Ricardo Acero, Ramon Salazar, Ricardo Marin, para la aprobación del Proyecto Socio Tecnologico del T2, en la UPTJAA.
                        </h6>
                    </p>
                </center>
                </div>
            </div>
        </div>
    </div>
    <center>
    <div class="row" >
        <div class="col s12 m4" >
        <a class="btn" href="registro/index.php">Registrarse</a>
        </div>
        </center>
         <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>