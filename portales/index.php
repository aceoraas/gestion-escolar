<!DOCTYPE html>
<html>
    <!--login de sistema de gestion escolar-->
    <head>
        <title>
            SISTEMA
        </title>
        <link href="../assets/img/imgs/ESCUDO.ico" rel="shortcut icon">
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
            <link href="css/materialize.css" media="screen,projection" rel="stylesheet" type="text/css"/>
            <script src="js/jquery-3.1.1.min.js" type="text/javascript">
            </script>
            <script src="js/materialize.min.js" type="text/javascript">
            </script>
            <style>
                body{
            overflow:scroll;
            background-color: #017c77;
            color: #FFF;
        }
            </style>
        </link>
    </head>
    <body>
        <!--titulo de inicio-->
        <center>
            <div class="white">
                <img class="responsive-img" src="../assets/img/imgs/cintillo_cenditel_2017.png" style="width: 80%;">
                </img>
            </div>
        </center>
        <div class="container" style="margin-top: 5%">
            <div>
                <div>
                    <center>
                        <!--IDENTIFICACION DEL SITIO-->
                        <div class="row">
                            <div class="col s12 l3">
                                <img class="responsive-img" src="../assets/img/imgs/ESCUDO.SVG" style=" width: 60%">
                                </img>
                            </div>
                            <div class="col s12 l9 ">
                                <h3>
                                    Unidad Educativa Bolivariana Ángel Celestino Bello
                                </h3>
                            </div>
                        </div>
                        <!--FORMULARIO-->
                        <form accept-charset="utf-8" action="#hola" autocomplete="off" method="post">
                            <!--inputs para INGRESAR-->
                            <div class="row" style="width: 70%;">
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">
                                        account_circle
                                    </i>
                                    <input id="user" placeholder="Usuario" type="text">
                                    </input>
                                </div>
                                <div class="input-field col s12">
                                    <i class="material-icons prefix">
                                        dialpad
                                    </i>
                                    <input id="pass" placeholder="Contraseña" type="password">
                                    </input>
                                </div>
                                <!--botones de login-->
                            </div>
                            <br>
                                <div class="row">
                                    <div class="col s12 l5" style="padding-top: 1em; padding-bottom: 1em;">
                                        <a class="waves-effect waves-light btn red" id="btnentrar" type="submit">
                                            Entrar
                                        </a>
                                    </div>
                                    <div class="col s12 l7" style="padding-top: 1em; padding-bottom: 1em;">
                                        <a class="waves-effect waves-light btn grey" href="recuperar">
                                            Olvide mi usuario o contraseña
                                        </a>
                                    </div>
                                </div>
                            </br>
                        </form>
                    </center>
                    <br>
                        <!--Cartelera informativa-->
                        <div class="row">
                            <div>
                                <center>
                                    <div class="card-content">
                                        <div>
                                            <h6>
                                                <b>
                                                    <i>
                                                        <div id="Cartelera-titulo">
                                                        </div>
                                                    </i>
                                                </b>
                                            </h6>
                                        </div>
                                    </div>
                                </center>
                                <div id="Cartelera-contenido">
                                </div>
                            </div>
                        </div>
                        <!--botones para otras opciones del sistema-->
                        <center>
                            <div class="row">
                                <div class="col s12 l12">
                                    <div class="col s12 l6" style="padding-top: 1em; padding-bottom: 1em;">
                                        <a class="waves-effect waves-light btn" href="registro/index.php">
                                            Nueva Cuenta
                                        </a>
                                    </div>
                                    <div class="col s12 l6" style="padding-top: 1em; padding-bottom: 1em;">
                                        <a class="waves-effect waves-light btn" href="##">
                                            Asistencia Trabajadores
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </center>
                        <br>
                            <br>
                                <br>
                                    <br>
                                        <br>
                                            <br>
                                                <!--scripts-->
                                            </br>
                                        </br>
                                    </br>
                                </br>
                            </br>
                        </br>
                    </br>
                </div>
            </div>
        </div>
    </body>
</html>
<script src="js/login.js" type="text/javascript">
</script>
<script async="" charset="utf-8" defer="" src="/javascripts/application.js" type="text/javascript">
    $(document).ready(function(){
        $('#Cartelera-titulo').html('Desarrolladores del sistema');
        $('#Cartelera-contenido').html('<b>Ricardo Acero:</b> Desarrollador de codigo, Diseño y Base de Datos.<br><b>Ramon Salazar:</b> Documentacion y medidador de cliente.<br><b>Ricardo Marin:</b> Documentacion, Analista de UX y UI, Backup de codigo.<br> Desarrollado para la obtencion del titulo de TSU, en la Universidad Politecnica Jose Antonio Anzoategui');

    });
</script>
