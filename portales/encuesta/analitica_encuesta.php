<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <link type="text/css" rel="stylesheet" href="../../portales/css/materialize.css"  media="screen,projection"/>
    <title>Encuesta</title>
    <style >
                body{
                    overflow:scroll;
                    background-color: #017c77;
                    color: #FFF;
                }
            </style>
</head>
<body>
    <center>
    <div class='card black-text' style='width: 92%;'>
    <div class='card-content'>
        <h5> Cantidad de encuestados</h5>
        <h3 id="resultado">0</h3>
    </div>
    </div>
     <div class='card black-text' style='width: 46%; display: inline-block;'>
    <div class='card-content'>
        <h5>Respuestas positivas</h5>
        <h3 id="resultado2">0</h3>
    </div>
    </div>
     <div class='card black-text' style='width: 46%;display: inline-block;'>
    <div class='card-content'>
        <h5>Respuestas negativas</h5>
        <h3 id="resultado3">0</h3>
    </div>
    </div>
    <!-- preguntas
    <div class='card black-text' style='width: 40%;display: inline-block;'>
    <div class='card-content'>
        <h5 id="resultado4"> Pregunta 1:  <br>SI: <a class='btn'>1</a>  NO: <a class='btn'>1</a> </h5>
    </div>
    </div>

    <div class='card black-text' style='width: 40%;display: inline-block;'>
    <div class='card-content'>
        <h5 id="resultado5"> Pregunta 2:  <br>SI: <a class='btn'>1</a>  NO: <a class='btn'>1</a> </h5>
    </div>
    </div>

    <div class='card black-text' style='width: 40%;display: inline-block;'>
    <div class='card-content'>
        <h5 id="resultado6"> Pregunta 3: <br> SI: <a class='btn'>1</a>  NO: <a class='btn'>1</a> </h5>
    </div>
    </div>

    <div class='card black-text' style='width: 40%;display: inline-block;'>
    <div class='card-content'>
        <h5 id="resultado7"> Pregunta 4:  <br>SI: <a class='btn'>1</a>  NO: <a class='btn'>1</a> </h5>
    </div>
    </div>

    <div class='card black-text' style='width: 40%;display: inline-block;'>
    <div class='card-content'>
        <h5 id="resultado8"> Pregunta 5:  <br>SI: <a class='btn'>1</a>  NO: <a class='btn'>1</a> </h5>
    </div>
    </div>-->
    </center>

</body>
<script type="text/javascript" src="../js/jquery-3.1.1.min.js"></script>
 <script type="text/javascript" src="../js/materialize.min.js"></script>
 <script type="text/javascript">

    function ejecutar(){
    $.get("../../db/encuesta_db.php?COUNT=1",function(data){
        $("#resultado").text(data);
    });
    $.get("../../db/encuesta_db.php?SI=1",function(data){
        $("#resultado2").text(data);
    });
    $.get("../../db/encuesta_db.php?NO=1",function(data){
        $("#resultado3").text(data);
    });
    //$.get("../../db/encuesta_db.php?sis=1",function(data){
      //  $("#resultado4").text(data[0]);
    //});
    }

    setInterval( ejecutar, 500 );

 </script>
</html>
