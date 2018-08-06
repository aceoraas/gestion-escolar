/* PARA LA FECHA Y LA HORA*/

vistas('2');
var uci;

$('.datepicker').pickadate({
       // Strings and translations
       monthsFull: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
       labelMonthSelect: 'Selecionar Mes',
       labelYearSelect: 'Selecionar Año',
       labelMonthNext: 'Mes Siguiente',
       labelMonthPrev: 'Mes Anterior',
       clear: 'Limpiar',
       close: 'Continuar',
       formatSubmit: 'yyyy-mm-dd',
       selectYears: 90,
       selectMonths: true,
       min: -32850,
       max: true,
       closeOnSelect: true, // Close upon selecting a date,
       container: undefined, // ex. 'body' will append picker to body
      });
/*
Fin de accesorios
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
Funciones
*/

  var positivo=[7];
  var nombre;
  var apellido;
  var estado;
  var cedula;
  var subir=0;

//FUNCIONES 
function vistas(d){
if (d=='0'){
$('#crearcuenta').show();
$('#backup').hide();
$('#datospersonales').hide();
$('#datoslaborales').hide();
}
if (d=='1'){
$('#crearcuenta').hide('slow');
$('#backup').show('slow');
$('#datospersonales').hide();
$('#datoslaborales').hide();
}
if (d=='2'){
$('#crearcuenta').hide();
$('#backup').hide('slow');
$('#datospersonales').show('slow');
$('#datoslaborales').hide();
}
if (d=='3'){
$('#crearcuenta').hide();
$('#backup').hide();
$('#datospersonales').hide('slow');
$('#datoslaborales').show('slow');
}
}





 function CAMPOCEDULA(){
  
  var ncedula=document.getElementById('cedula').value;
  var cnacionalidad=document.getElementById('nacionalidad').value;
  ncedula+0;

  //verifica si la cedula esta vacio o null
  if(cnacionalidad!=''){
  if (ncedula!=''){
    if (ncedula!='0') {
      //mensaje post
      var mensaje={
          laci:ncedula,
          naci:cnacionalidad
      };
      $.ajax({

          data: mensaje,
          url:'../../procesos/validacion/validacion_registro.php',
          type: 'post',
          beforeSend: function () {
            $("#labelcedula").html("Procesando, espere por favor...");
         },success: function(data){
          obj = JSON.parse(data); 
           
            //verifica el booleano de servidor.
           if(obj.valor=='1'||obj.valor=='0'||obj.valor=='3') {
                // mensaje  cedula valida.
              if(obj.valor=='1'){
                CHECKET('2');
                cedula=cnacionalidad+"-"+ncedula;
                positivo[2]=true;
              }
              //mensaje cedula invalidado
              if(obj.valor=='0'){
                ERROR('2');
                $('#labelcedula').text('INGRESE UN NUMERO DE CEDULA VALIDO');           
              }
              if (obj.valor=='3'){
                  CHECKET('2');
                  console.log(data);
                  nombre=obj.nombre;
                  apellido=obj.apellido;
                  cedula=cnacionalidad+"-"+ncedula;
                  positivo[2]=true;
              }
            }
           
      }});
    }//error cedula vacia o 0
    else{
          
          ERROR('2');
          $('#labelcedula').text('LA NUMERO DE CEDULA NO PUEDE SER 0');
      }
    }
    else{

        ERROR('2');
        $('#labelcedula').text('NO PUEDES DEJAR ESTE CAMPO VACIO');
      }
    }else{
      ERROR('2');
        $('#labelcedula').text('DEBE SELECIONAR UNA NACIONALIDAD');
    }
 };

 function COMPARARCONTRASENIAS(){
   var contra1=document.getElementById('contra1').value;
    var contra2=document.getElementById('contra2').value;

    if (contra1==contra2&&contra1!=''&&contra2!=''){
      CHECKET('4');
      CHECKET('3');

     positivo[3]=true;
     positivo[4]=true;
    }else{
     ERROR('4');
     ERROR('3');
     positivo[3]=false;
     positivo[4]=false;
    }
 };

 function PREGUNTASECRETA(){
   var Pregunta=document.getElementById('Pregunta').value;
      
      if(Pregunta==''||Pregunta==0){
        ERROR('5');      
      }else{
        CHECKET('5');
        CHECKET('6');
        positivo[5]=true;      
      }

 };

 function RESPUESTASECRETA(){
  var Pregunta=document.getElementById('pregunta2').value;
      if(Pregunta==''||Pregunta==0){
        ERROR('6');        
      }else{
      CHECKET('5');
      CHECKET('6');
      positivo[6]=true;
      }
 };

 function CONSULTARUSUARIO(){

  var datou=document.getElementById('Usuario').value;
  

        $.post("../../procesos/validacion/validacion_registro.php",
          {
            verificar:datou,
            c_u:cedula
          }
          ,function(data){
            if (data=='0'){
            uci=cedula;
            ERROR('7');
            $('#labelusuario').text('USUARIO NO VALIDO');
            
            positivo[0]=false;
            }
            if(data=='2'){
              uci=cedula;
              ERROR('7');
              $('#labelusuario').text('ESA CEDULA YA TIENE UN USUARIO ASINGNADO');
              positivo[0]=false;
            
            }
            else{
              if(datou!=''){
              CHECKET('7');
              positivo[0]=true;  
              }else{
                ERROR('7');
                positivo[0]=false;
                
              $('#labelusuario').text('EL USUARIO NO PUEDE QUEDAR VACIO');
              }
              
            }
            
            
        });
 };

 function COMPROBARCAMPOS(){

  var usuario=document.getElementById('Usuario').value;
  var nacionalidad=document.getElementById('nacionalidad').value;
  var campocedula=document.getElementById('cedula').value;
  var contrasenia1=document.getElementById('contra1').value;
  var contrasenia2=document.getElementById('contra2').value;
  var preguntaS=document.getElementById('Pregunta').value;
  var respuestaS=document.getElementById('pregunta2').value;
  CAMPOCEDULA();
  CONSULTARUSUARIO();
  COMPARARCONTRASENIAS();
  RESPUESTASECRETA();
  PREGUNTASECRETA();
  
  if (usuario==''){
      positivo[0]=false;
      ERROR('7');
      $('#Usuario').on('keyup',function() {
      CHECKET('7');
      $('#iusuario').text('account_circle');
      });
      }else{
        positivo[0]=true;
        CONSULTARUSUARIO();
      }
      if (nacionalidad==''){
      positivo[1]=false;
      ERROR('1');
      $('#nacionalidad').on('change',function() {
      CHECKET('1');
      });
      }else{
        positivo[1]=true;
      }
      if (campocedula==''){
      positivo[2]=false;       
      ERROR('2');
      $('#cedula').on('keyup',function() {
      CHECKET('2');
      $('#icedula').text('account_box');
      });
      }else{
        positivo[2]=true;
        CAMPOCEDULA();
        
      }
      if (positivo[3]==false){
        contrasenia1=null;
      if (contrasenia1==''||contrasenia1==null){
      ERROR('3'); 
      $('#contra1').on('keyup',function() {
      CHECKET('4');
      $('#icontra1').text('dialpad');
      });
      }else{
        positivo[3]=true;
        COMPARARCONTRASENIAS();
      }
      }
      if (positivo[4]==false) {
        contrasenia2=null;
        if (contrasenia2==''||contrasenia2==null){
        positivo[4]=false;
      
      ERROR('4');

      }else{
        if (contrasenia2=='') {
          positivo[4]=true;
          COMPARARCONTRASENIAS();
        }
      }
      }
      
      if (preguntaS==''){
        positivo[5]=false;
      
      ERROR('5');
      
      
      }else{
        positivo[5]=true;
        
        PREGUNTASECRETA();
      }

      if (respuestaS==''){
      positivo[6]=false;      
     ERROR('6');
      
      $('#pregunta2').on('keyup',function() {
      CHECKET('6');
      });
      }else{
        positivo[6]=true;
        RESPUESTASECRETA();
      }

     if (positivo[0]==true){
      $('#Usuario').text('USUARIO');
      if (positivo[1]==true){
        $('#onacionalidad').value;
        if (positivo[2]==true){
          $('#labelcedula').text('CEDULA');
          if (positivo[3]==true){
            $('#labelcontra1').text('CONTRASEÑA');
            if (positivo[4]==true){
              $('#labelcontra2').text('CONFIRMACION DE LA CONTRASEÑA');
              if (positivo[5]==true){
                 $('#labelseguridad1').text('PREGUNTA SECRETA');
                if (positivo[6]==true){
                  $('#labelseguridad2').text('RESPUESTA SECRETA');
                   subir=subir+1;
                    if (subir>1){
                      alert('NO SE PUEDE CREAR LA CUENTA');
                      window.location='../../';
                    }else{
                       subir=5;
                      CAMPOCEDULA();
                      CONSULTARUSUARIO();
                      COMPARARCONTRASENIAS();
                      if(cedula!=uci){
                        if(confirm('Su cedula es: '+cedula+' ¿Esta seguro de crear una cuenta?')){
                      var usuario=document.getElementById('Usuario').value;
                      var nacionalidad=document.getElementById('nacionalidad').value;
                      var campocedula=document.getElementById('cedula').value;
                      var contrasenia2=document.getElementById('contra2').value;
                      var preguntaS=document.getElementById('Pregunta').value;
                      var respuestaS=document.getElementById('pregunta2').value;
                      $.post("../../procesos/validacion/validacion_registro.php",
                        {
                          us:usuario,
                          na:nacionalidad,
                          ce:campocedula,
                          co:contrasenia2,
                          pr:preguntaS,
                          re:respuestaS
                        },function(data) {
                          obj= JSON.parse(data);
                          document.getElementById('usr').value=obj.user;
                          document.getElementById('pwd').value=obj.pwd;
                          document.getElementById('ps').value=obj.ps;
                          document.getElementById('rs').value=obj.rs;
                          document.getElementById('cu').value=obj.cu;
                          document.getElementById('id').value=obj._id;
                          if (nombre) {
                            $('#name').show();
                            $('#named').show();
                            $('#divhash').removeClass('l12').addClass('l8');
                            $('#divcedulap2').removeClass('l6').addClass('l3');
                            $('#dividunico').removeClass('l6').addClass('l4');
                            document.getElementById('name').value=nombre+' '+apellido;
                          
                          }else{
                            $('#name').hide();
                            $('#named').hide();
                            $('#divhash').removeClass('l8').addClass('l12');
                            $('#divcedulap2').removeClass('l3').addClass('l6');
                            $('#dividunico').removeClass('l4').addClass('l6');
                          }
                          
                          
                          vistas('1');
                            }); 
                      }else{
                        
                        alert('ESTA CEDULA YA TIENE UN USUARIO ASINGNADO');
                      window.location='../../';

                      }
                    }
                  }
                
                }
                else{
                  positivo[6]=false;
              $('#labelseguridad2').text('NO PUEDE QUEDAR VACIO');
                }

              }
              else{
                positivo[5]=false;
                $('#labelseguridad1').text('NO PUEDE QUEDAR VACIO');
              }
            }
            else{
              positivo[4]=false;
              $('#labelcontra2').text('CONTRASEÑA INVALIDA');
            }
          }
          else{
            positivo[3]=false;
            $('#labelcontra1').text('CONTRASEÑA INVALIDA');
          }
        }
        else{
          positivo[2]=false;
          $('#labelcedula').text('CEDULA INVALIDA');
        }
      }
      else{
        positivo[1]=false;
        $('#onacionalidad').text('SELECIONE UNA OPCION');
      }
    }
    else{
      positivo[0]=false;
      $('#Usuario').text('USUARIO NO VALIDO');
    }

 };

 function enviarllave() {
  a=document.getElementById('usr').value;
  b=document.getElementById('pwd').value;
  c=document.getElementById('ps').value;
  d=document.getElementById('rs').value;
  e=document.getElementById('id').value;
   window.open('../../procesos/pdf-/llave_recuperacion.php?'+'user='+a+'&ID='+e+'&key='+b+'&ps='+c+'&rs='+d,"llave","width=0,height=0");  
}
/*
FIN DE FUNCIONES

########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################

DISEÑO
*/

 function ERROR(tipo){
  if (tipo=='1'){
    // nacionalidad
    $('#divnacionalidad').removeClass('teal-text').addClass('red-text');
    $('#labelnacionalidad').removeClass('teal-text').addClass('red-text');

  }
  if (tipo=='2'){
    // cedula
    $('#divcedula').removeClass('teal-text').addClass('red-text');
    $('#labelcedula').removeClass('teal-text').addClass('red-text');
    $('#icedula').text('error');
  }
  if (tipo=='3'){
    //contra1
    $('#divcontra1').removeClass('teal-text').addClass('red-text');
      $('#labelcontra1').removeClass('teal-text').addClass('red-text');
      $('#icontra1').text('error');
  }
  if (tipo=='4'){
    //contra 2
     $('#divcontra2').removeClass('teal-text').addClass('red-text');
      $('#labelcontra2').removeClass('teal-text').addClass('red-text');
      $('#icontra2').text('error');

  }
  if (tipo=='5'){
    //pregunta secreta
    $('#divseguridad1').removeClass('teal-text').addClass('red-text');
    $('#labelseguridad1').removeClass('teal-text').addClass('red-text');
    $('#iseguridad1').text('error');

  }
  if (tipo=='6'){
    //RESPUESTASECRETA
    $('#divseguridad2').removeClass('teal-text').addClass('red-text');
      $('#labelseguridad2').removeClass('teal-text').addClass('red-text');
      $('#iseguridad2').text('error');

  }
  if (tipo=='7'){
    //USUARIO
    $('#divusuario').removeClass('teal-text').addClass('red-text');
    $('#labelusuario').removeClass('teal-text').addClass('red-text');
    $('#iusuario').text('error');

  }
 };

 function CHECKET(tipo){
  if (tipo=='1'){
    //nacionalidad
    $('#divnacionalidad').removeClass('red-text').addClass('teal-text');
    $('#labelnacionalidad').removeClass('red-text').addClass('teal-text');
  }
  if (tipo=='2'){
    //cedula
    $('#divcedula').removeClass('red-text').addClass('teal-text');
    $('#icedula').text('checket');
    $('#labelcedula').removeClass('red-text').addClass('teal-text').text('Cedula');
  }
  if (tipo=='3'){
    //contra1
     $('#divcontra1').removeClass('red-text').addClass('teal-text');
     $('#labelcontra1').removeClass('red-text').addClass('teal-text');
     $('#icontra1').text('checket');
  }
  if (tipo=='4'){
    //contra2
     $('#divcontra2').removeClass('red-text').addClass('teal-text');
      $('#labelcontra2').removeClass('red-text').addClass('teal-text');
      $('#icontra2').text('checket');
  }if (tipo=='5'){
    //pregunta secreta
    $('#divseguridad1').removeClass('red-text').addClass('teal-text');
    $('#labelseguridad1').removeClass('red-text').addClass('teal-text');
    $('#iseguridad1').text('checket');
  }
  if (tipo=='6'){

    //respuesta secreta
    $('#divseguridad2').removeClass('red-text').addClass('teal-text');
    $('#labelseguridad2').removeClass('red-text').addClass('teal-text');
    $('#iseguridad2').text('checket');
  }

  if (tipo=='7'){
    // usuario
    $('#divusuario').removeClass('red-text').addClass('teal-text');
    $('#labelusuario').removeClass('red-text').addClass('teal-text');
    $('#iusuario').text('checket');
  }

 };
/*
FIN DE DISEÑOS ERRRO Y CHECKET
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################
########################################################################

EVENTOS
*/

//SELECT
$(document).ready(function(){
            $('select').material_select();
      });

//CEDULA AL ESCRIBIR O AL MOVER

$('#cedula').on('change',function(){
  CAMPOCEDULA();
});
// conparar la contraseña
$('#contra2').on('keyup',function(){
    COMPARARCONTRASENIAS();
});
$('#contra1').on('keyup',function() {
    COMPARARCONTRASENIAS();
});
//pregunta secreta 
$('#pregunta2').on('keyup',function(){
  PREGUNTASECRETA();
});
    // respuesta secreta 
$('#Pregunta').on('change',function(){
  RESPUESTASECRETA();
});

$('#Usuario').on('change',function(){
  CONSULTARUSUARIO();
});

// confirmacion de campos
$('#nacionalidad').on('change',function () {
  CHECKET('2');
  $('#icedula').text('account_box');
});


$('#btnpaso1').on('click',function(){
      COMPROBARCAMPOS();
});

$('#btnpaso2').on('click',function(){
  vistas('2');
});
$('#btnatras3').on('click',function(){
  vistas('1');
});
$('#btnpaso3').on('click',function(){
  vistas('3');
});

$('#btnatras4').on('click',function(){
  vistas('2');
});

$('#bajarllave').on('click',function(){
  enviarllave();
});