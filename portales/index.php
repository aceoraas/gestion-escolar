<!DOCTYPE html>
<html>
<!--login de sistema de gestion escolar-->
<head>
    <title>SISTEMA</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
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
 <center>
    <div class="white">
        <img  src="../assets/img/imgs/cintillo_cenditel_2017.png" style="width: 80%;" class="responsive-img">
    </div>
    
    </center>
 
    <div style="margin-top: 5%" class="container">

    <div>
    <div>

    <center>

    <!--IDENTIFICACION DEL SITIO-->
    <div class="row">
        
        <div class="col s12 l3" >
         <img class="responsive-img" src="../assets/img/imgs/ESCUDO.SVG" style=" width: 60%">
        </div>
        <div class="col s12 l9 ">
            <h3>Unidad Educativa Bolivariana Ángel Celestino Bello</h3>
        </div>
       
        
    </div>
    
    
        
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
    <div class="col s12 l5" style="padding-top: 1em; padding-bottom: 1em;">
    <a type="submit" id="btnentrar"class="waves-effect waves-light btn red">Entrar</a>
    </div>
    <div class="col s12 l7" style="padding-top: 1em; padding-bottom: 1em;" >
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
    <div class="col s12 l12">
        <div class="col s12 l6" style="padding-top: 1em; padding-bottom: 1em;" >  
    <a class="waves-effect waves-light btn" href="registro/index.php">Nueva Cuenta</a>
    </div>
    <div class="col s12 l6" style="padding-top: 1em; padding-bottom: 1em;">
    <a class="waves-effect waves-light btn" href="##">Asistencia Trabajadores</a>
    </div>
    </div>
    

    </center>

    <br><br><br><br><br><br>            


    <!--scripts-->
        

</div>
</center>
</center>
</div>
</div></div></div></div>
</body>
<script type="text/javascript" src="js/login.js"></script>
<script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
    $(document).ready(function(){
        $('#Cartelera-titulo').html('Desarrolladores del sistema');
        $('#Cartelera-contenido').html('<b>Ricardo Acero:</b> Desarrollador de codigo, Diseño y Base de Datos.<br><b>Ramon Salazar:</b> Documentacion y medidador de cliente.<br><b>Ricardo Marin:</b> Documentacion, Analista de UX y UI, Backup de codigo.<br> Desarrollado para la obtencion del titulo de TSU, en la Universidad Politecnica Jose Antonio Anzoategui');

    });
</script>

</html>