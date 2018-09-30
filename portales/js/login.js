







/*
var mensaje={};

$.ajax({

          data: mensaje,
          url:'../../procesos/validacion/validacion_login.php',
          type: 'post',
          beforeSend: function () {
            $("#").html("Procesando, espere por favor...");
         },success: function(data){

         }
});*/













//funcion para escribir en cartelera
function getcartelera(t,c) {
            var titulo=document.getElementById('Cartelera-titulo').innerHTML=t;
            var contenido=document.getElementById('Cartelera-contenido').innerHTML=c;
        }

//llamada a funcion
setInterval(getcartelera("Desarrolladores del sistema","<b>Ricardo Acero:</b> Desarrollador de codigo, Diseño y Base de Datos.<br><b>Ramon Salazar:</b> Documentacion y medidador de cliente.<br><b>Ricardo Marin:</b> Documentacion, Analista de UX y UI, Backup de codigo.<br> Desarrollado para la obtencion del titulo de TSU, en la Universidad Politecnica Jose Antonio Anzoategui"),500);
