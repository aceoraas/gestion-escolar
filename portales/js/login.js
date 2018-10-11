
$('#btnentrar').on('click',function() {
  var user=document.getElementById('user').value;
  var pass=document.getElementById('pass').value;
  var mensaje={
    u:user,
    p:pass
  }
    $.ajax({

          data: mensaje,
          url:'../procesos/validacion/validacion_login.php',
          type: 'post',
          beforeSend: function() {
           document.body.innerHTML='<center><br><br><br><h1>Procesando, por favor espere...</h1><div class="progress"><div class="indeterminate"></div></div><a class="waves-effect waves-light btn red" href="./">Cancelar</a><center>';
         },success: function(data){
          

          document.body.innerHTML='<center><br><br><br><h1>Recibiendo datos, por favor espere...</h1><div class="progress"><div class="indeterminate"></div></div><center>';
         
          var obj=JSON.parse(data);
          // mensajes al usuario
        if (obj.rs==true){
        if (obj.estado=='negado'){
          document.body.innerHTML='<center><br><br><br><h4>su cuenta a sido negada por lo tanto usted no podra registrarse ni usar el sistema hasta ser retirado la negacion, por favor dirijase a la direccion para solventar el problema</h4><a class="waves-effect waves-light btn red" href="./">Salir</a><center>';
        }

        if (obj.estado=='reposo'){
          document.body.innerHTML='<center><br><br><br><h4>su cuenta esta dado de baja por lo tanto anuncie su reincorporacion a la direccion para reactivar su cuenta</h4><a class="waves-effect waves-light btn red" href="./">Salir</a><center>';
        }
       if (obj.estado=='despedido'){
        document.body.innerHTML='<center><br><br><br><h4>lamento comunicarle que su cuenta esta marcada como "personal no laborando o personal despedido" por lo tanto dirijase a la direccion para mayor informacion</h4><a class="waves-effect waves-light btn red" href="./">Salir</a><center>';
      }
      else{
        document.body.innerHTML='<center><br><br><br><h1>Cuenta confirmada.</h1><center>';
        getdatauser(obj.id_u);
        sessionStorage.misdatosusuario=data;
        console.log(sessionStorage.misdatosusuario);
      }
    }else{
        document.body.innerHTML='<center><br><br><br><h1>Parece que tiene un error en el usuario o contraseña.</h1><a class="waves-effect waves-light btn red" href="./">intentarlo de nuevo</a><center>';      
    }
    }

        });
});

function getdatauser(id_u) {
  var mensaje={
    tipo: 1,
    valor: id_u
  }

 $.ajax({
      url: '../procesos/datos/datosp.php',
      type: 'post',
      data: mensaje,
      beforeSend: function() {
          document.body.innerHTML='<center><br><br><br><h1>Cargando Mesa de trabajo,<br> por favor espere...</h1><div class="progress"><div class="indeterminate"></div></div><center>';
      },success: function(data){
          localStorage.misdatos=data;
          console.log(localStorage.misdatos);
          var obj=JSON.parse(data);
          geturl(obj.CARGO);
      }


 });
}

function geturl(CARGO) {
  var mensaje={
    tipo: CARGO.TIPO,
    otro: CARGO.AREA
  };

  $.ajax({
    url: '../procesos/urlcontrol/urls.php',
    type: 'post',
    data: mensaje,
    beforeSend: function() {
      document.body.innerHTML='<center><br><br><br><h1>Obteniendo Direccion<br> por favor espere...</h1><div class="progress"><div class="indeterminate"></div></div><center>';
    },
    success: function(data){
      console.log(data);
      document.body.innerHTML='<center><br><br><br><h1>listo</h1><div class="progress"><div class="indeterminate"></div></div><center>';
      window.location=data;
    }
  });
}














//funcion para escribir en cartelera
function getcartelera(t,c) {
            var titulo=document.getElementById('Cartelera-titulo').innerHTML=t;
            var contenido=document.getElementById('Cartelera-contenido').innerHTML=c;
        }

//llamada a funcion
setInterval(getcartelera("Desarrolladores del sistema","<b>Ricardo Acero:</b> Desarrollador de codigo, Diseño y Base de Datos.<br><b>Ramon Salazar:</b> Documentacion y medidador de cliente.<br><b>Ricardo Marin:</b> Documentacion, Analista de UX y UI, Backup de codigo.<br> Desarrollado para la obtencion del titulo de TSU, en la Universidad Politecnica Jose Antonio Anzoategui"),500);
