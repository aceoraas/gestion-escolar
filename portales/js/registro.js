/* PARA LA FECHA Y LA HORA*/

vistas('0');
vlaboral('not');
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
       max: -6570,
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

  var positivo=[20];
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

function vlaboral(d){

  if (d=='Docente') {
    s(1);
    $('#tdocente').on('change',function(){
      var o= document.getElementById('tdocente').value;
        if (o=='1'){
          $('#docentep').show();
          $('#docentee').hide();
        $('#docenteparticular').on('change',function(){
          var i= document.getElementById('docenteparticular').value;
          if (i=='Inicial'){
            $('#divsec').hide();
          }
        });
          
          }
      if (o=='2'){
        $('#docentep').hide();
        $('#docentee').show();
      }  
    
    });
  
  }

  if (d=='Administrativo'){
    s(2);
    $('#tadministrativo').on('change',function(){
      var o= document.getElementById('tadministrativo').value;
        if (o=='otro'){
          $('#dotro').show();
          }
     if (o=='Secretaria/o'){
           $('#dotro').hide();
         }
    
    });
  }
  if (d=='Obrero'){
    s(3);
    $('#tobrero').on('change',function(){
      var o= document.getElementById('tobrero').value;
        if (o=='otro'){
          s(3);
          $('#dotro').show();
          }
     if (o=='cocinero'){
        s(3);
           $('#dotro').hide();
         }

      if (o=='obrero'){
        s(3);
           $('#dotro').hide();
         }
    
    });
  }
  if (d=='Salud'){
    s(7);
  }

  if (d=='Directivo'){
    s(4);
  }
  if (d=='Lopna'){
    s(5);
  }

  if (d=='not'){
    s(7);
    $('#docentep').hide();
    $('#docentee').hide(); 
  }

  function s(op){
      if (op==1){
        $('#dtd').show('slow');
        $('#dta').hide();
        $('#dto').hide();
        $('#dtdir').hide();
        $('#dotro').hide();
      }
        if (op==2){
          $('#dta').show('slow');
          $('#dtd').hide();
          $('#dto').hide();
          $('#dotro').hide();
          $('#dtdir').hide();
          $('#docentep').hide();
          $('#docentee').hide(); 

        }
          if (op==3) {
            $('#dto').show('slow');
            $('#dtd').hide();
            $('#dotro').hide();
            $('#dtdir').hide();
            $('#docentep').hide();
          $('#docentee').hide(); 
          }
            if (op==4) {
              $('#dtdir').show('slow');
              $('#dto').hide();
              $('#dtd').hide();
              $('#dotro').hide();
              $('#docentep').hide();
          $('#docentee').hide(); 
            }
              if (op==5) {
                $('#dto').hide();
                $('#dtd').hide();
                $('#dotro').hide();
                $('#dtdir').hide();
                $('#docentep').hide();
                $('#docentee').hide(); 
              }
                if (op==6) {
                  $('#dtd').hide();
                  $('#dotro').hide();
                  $('#dtdir').hide();
                  $('#docentep').hide();
                  $('#docentee').hide(); 
                }
                  if (op==7){
                    $('#dto').hide();
                    $('#dtd').hide();
                    $('#dta').hide();
                    $('#dotro').hide();
                    $('#dtdir').hide();
                    $('#docentep').hide();
                    $('#docentee').hide(); 
                  }
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
                console.log(cedula);
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
                  estado=obj.edo;
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
if (contra1.length<6){
     ERROR('4');
     ERROR('3');
     positivo[3]=false;
     positivo[4]=false;
     $('#labelcontra1').text('la contraseña debe tener minimo 6 caracteres');
}else{
    if (contra1==contra2&&contra1!=''&&contra2!=''){
      CHECKET('4');
      CHECKET('3');
      $('#labelcontra1').text('Contraseña');
      $('#labelcontra2').text('Confirmado');
     positivo[3]=true;
     positivo[4]=true;
    }else{
     ERROR('4');
     ERROR('3');
     $('#labelcontra1').text('las contraseñas deben ser identicas');
     positivo[3]=false;
     positivo[4]=false;
    }
  }
 };

 function PREGUNTASECRETA(){
   
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
              $('#labelusuario').text('USUARIO VALIDO');
              positivo[0]=true;  
              }else{
                ERROR('7');
                positivo[0]=false;
                
              $('#labelusuario').text('EL USUARIO NO PUEDE QUEDAR VACIO');
              }
              
            }
            
            
        });
 };

 function estadoususario(){

  $.post("../../procesos/validacion/validacion_registro.php",
    {
      esta:cedula
    },
    function(data){
      if (data=='espera'){
        alert('su cuenta aun esta en espera de confirmacion por favor espere.');
        window.location="../../";
      }
      if (data=='confirmado'){
        alert('disculpe usted ya tiene una cuenta activa, por favr inicie sesion para iniciar su actividad.');
        window.location="../../";
      }
      if (data=='negado'){
        alert('su cuenta a sido negada por lo tanto usted no podra registrarse ni usar el sistema hasta ser retirado la negacion, por favor dirijase a la direccion para solventar el problema');
        window.location="../../";
      }
      if (data=='reposo'){
        alert('su cuenta esta dado de baja por l tanto anuncie su reincorporacion a la direccion para reactivar su cuenta');
        window.location="../../";
      }
      if (data=='despedido'){
        alert('lamento comunicarle que su cuenta esta marcada como "personal no laborando o personal despedido" por lo tanto dirijase a la direccion para mayor informacion');
        window.location="../../";
      }
    });
 }


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


function datosp2(){
  if (nombre!=null&&apellido!=null){
  nombre=nombre.trim();
  apellido=apellido.trim();
  var divinombres= nombre.split(' ');
  var tamanio= divinombres.length;
  var separador=" ";
  
    var  nombreuno=divinombres[0];
    for (var i =1; i<tamanio; i++) {
     var nombredos=nombredos+" "+divinombres[i];
     nombredos=nombredos.replace('undefined',"");
     
    }
    var diviapellidos = apellido.split(' ');
    tamanio = diviapellidos.length;
    var apellidouno =  diviapellidos[0];
    for (var i =1; i<tamanio; i++) {
     var apellidodos=apellidodos+" "+diviapellidos[i];
     apellidodos=apellidodos.replace('undefined',"");
     
    }

  
  document.getElementById('1nombre').value=nombreuno;
  document.getElementById('2nombre').value=nombredos;
  document.getElementById('1apellido').value=apellidouno;
  document.getElementById('2apellido').value=apellidodos;
  
}
 document.getElementById('cedulatext').value=cedula;
}

function validarEmail(email) {

    expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    
    if (!expr.test(email)){
      ERROR(15);
      $('#labelcorreo').text("El correo '"+email+"' es incorrecta.");
      document.getElementById('email').value='';
      positivo[12]=false;
    }else
      {
      CHECKET(15);
      $('#labelcorreo').text("Correo Confirmado");
      positivo[12]=true;
      }
}

function validarNumero(numero,tipo){
  if (numero){
  var datos= {telefono: numero};
  $.ajax({

          data: datos,
          url:'../../procesos/validacion/validacion_registro.php',
          type: 'post',
          beforeSend: function () {
            if (tipo==1){$("#labelmovil").html("Procesando, espere por favor...");}
            if (tipo==2){$("#labelfijo").html("Procesando, espere por favor...");}
         },success: function(data){
          
          var obj=JSON.parse(data);
          
            if (obj.valor=='0'){
              if (tipo==1) {ERROR(16);$("#labelmovil").text(obj.mensaje)}
              if (tipo==2) {ERROR(17);$("#labelfijo").text(obj.mensaje)}    

            }else{
              if (tipo==1) {CHECKET(16); $("#labelmovil").text('Movil Confirmado'); document.getElementById('movil').value=obj.mensaje;}  
              if (tipo==2) {CHECKET(17); $("#labelfijo").text('Fijo Confirmado'); document.getElementById('fijo').value=obj.mensaje;}
            }
            
          
        }
      });
  }
}

function validarcampos2(){

  var test=[10];

  test[0]=document.getElementById('1nombre').value;
  test[1]=document.getElementById('2nombre').value;
  test[2]=document.getElementById('1apellido').value;
  test[3]=document.getElementById('2apellido').value;
  test[4]=document.getElementById('fecha_naci').value;
  test[5]=document.getElementById('genero').value;
  test[6]=document.getElementById('email').value;
  test[7]=document.getElementById('movil').value;
  test[8]=document.getElementById('fijo').value;
  test[9]=document.getElementById('dirdetalle').value;
  for (var i =0; i <10; i++) {
    if (test[i]==''){
      ERROR((8+i));
      positivo[(8+i)]=false;
      console.log(positivo[(8+i)]);
    }
    else{
      CHECKET((8+i));
      positivo[(8+i)]=true;
      console.log(positivo[(8+i)]);
    }
  }
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
  if (tipo=='8'){
    //nombre1
    $('#divnombre1').removeClass('teal-text').addClass('red-text');
    $('#labelnombre1').removeClass('teal-text').addClass('red-text');

  }
  if (tipo=='9'){
    //nombre2
    $('#divnombre2').removeClass('teal-text').addClass('red-text');
    $('#labelnombre2').removeClass('teal-text').addClass('red-text');
    

  }
  if (tipo=='10'){
    //apellido1
    $('#divnombre3').removeClass('teal-text').addClass('red-text');
    $('#labelnombre3').removeClass('teal-text').addClass('red-text');
    

  }
  if (tipo=='11'){
    //apellido2
    $('#divnombre4').removeClass('teal-text').addClass('red-text');
    $('#labelnombre4').removeClass('teal-text').addClass('red-text');
    

  }
  if (tipo=='12'){
    //calendar
    $('#divcalendar').removeClass('teal-text').addClass('red-text');
    $('#labelcalendar').removeClass('teal-text').addClass('red-text');
    $('#icalendar').text('error');

  }
  if (tipo=='13'){
    //genero
    $('#divgenero').removeClass('teal-text').addClass('red-text');
    $('#labelgenero').removeClass('teal-text').addClass('red-text');
    

  }
  if (tipo=='14'){
     //direccion
    $('#divdir').removeClass('teal-text').addClass('red-text');
    $('#labeldir').removeClass('teal-text').addClass('red-text');
    $('#idir').text('error');

  }
  if (tipo=='15'){
    //CORREO
    $('#divcorreo').removeClass('teal-text').addClass('red-text');
    $('#labelcorreo').removeClass('teal-text').addClass('red-text');
    $('#icorreo').text('error');

  }
  if (tipo=='16'){
    //NUMERO MOVIL
    $('#divmovil').removeClass('teal-text').addClass('red-text');
    $('#labelmovil').removeClass('teal-text').addClass('red-text');
    $('#imovil').text('error');

  }
  if (tipo=='17'){
    //numero fijo
    $('#divfijo').removeClass('teal-text').addClass('red-text');
    $('#labelfijo').removeClass('teal-text').addClass('red-text');
    $('#ifijo').text('error');

  }
  if (tipo=='18'){
   

  }
  if (tipo=='19'){
    //USUARIO
    //$('#divusuario').removeClass('teal-text').addClass('red-text');
    //$('#labelusuario').removeClass('teal-text').addClass('red-text');
    //$('#iusuario').text('error');

  }
  if (tipo=='20'){
    //USUARIO
    //$('#divusuario').removeClass('teal-text').addClass('red-text');
    //$('#labelusuario').removeClass('teal-text').addClass('red-text');
    //$('#iusuario').text('error');

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

  if (tipo=='8'){
    //nombre1
    $('#divnombre1').removeClass('red-text').addClass('teal-text');

    $('#labelnombre1').removeClass('red-text').addClass('teal-text');


  }
  if (tipo=='9'){
    //nombre2
    $('#divnombre2').removeClass('red-text').addClass('teal-text');

    $('#labelnombre2').removeClass('red-text').addClass('teal-text');

    

  }
  if (tipo=='10'){
    //apellido1
    $('#divnombre3').removeClass('red-text').addClass('teal-text');

    $('#labelnombre3').removeClass('red-text').addClass('teal-text');

    

  }
  if (tipo=='11'){
    //apellido2
    $('#divnombre4').removeClass('red-text').addClass('teal-text');

    $('#labelnombre4').removeClass('red-text').addClass('teal-text');

    

  }

  if (tipo=='12'){
    //calendar
    $('#divcalendar').removeClass('red-text').addClass('teal-text');
    $('#labelcalendar').removeClass('red-text').addClass('teal-text');
    $('#icalendar').text('checket');

  }
  if (tipo=='13'){
    //genero
    $('#divgenero').removeClass('red-text').addClass('teal-text');
    $('#labelgenero').removeClass('red-text').addClass('teal-text');
    

  }
  if (tipo=='14'){
     //direccion
    $('#divdir').removeClass('red-text').addClass('teal-text');
    $('#labeldir').removeClass('red-text').addClass('teal-text');
    $('#idir').text('checket');

  }
  if (tipo=='15'){
    // correo
    $('#divcorreo').removeClass('red-text').addClass('teal-text');
    $('#labelcorreo').removeClass('red-text').addClass('teal-text');
    $('#icorreo').text('checket');
  }
  if (tipo=='16'){
    // numero movil
    $('#divmovil').removeClass('red-text').addClass('teal-text');
    $('#labelmovil').removeClass('red-text').addClass('teal-text');
    $('#imovil').text('checket');
  }
  if (tipo=='17'){
    // numero fijo
    $('#divfijo').removeClass('red-text').addClass('teal-text');
    $('#labelfijo').removeClass('red-text').addClass('teal-text');
    $('#ifijo').text('checket');
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
  var Pregunta=document.getElementById('Pregunta').value;
      if (Pregunta.length>1){document.getElementById('Pregunta').value="¿"+Pregunta+"?";}
  RESPUESTASECRETA();
});

$('#Usuario').on('change',function(){
  CONSULTARUSUARIO();
  estadoususario();
});

// confirmacion de campos
$('#nacionalidad').on('change',function () {
  CHECKET('2');
  $('#icedula').text('account_box');
});

$('#email').on('change',function(){
    var email= document.getElementById('email').value;
    validarEmail(email);
});

$('#movil').on('change',function(){
  var numero= document.getElementById('movil').value;
  validarNumero(numero,1);
});

$('#fijo').on('change',function(){
  var numero= document.getElementById('fijo').value;
  validarNumero(numero,2);
});
$('#movil').on('keyup',function(){
  var key=document.getElementById('movil').value;
  var tamanio=key.length;
  key=(key*10)/10;
    if (tamanio==4){document.getElementById('movil').value=key+"-";}
});

$('#fijo').on('keyup',function(){
  var key=document.getElementById('fijo').value;
  var tamanio=key.length;
  key=(key*10)/10;
  if (tamanio>=3&&tamanio<4){document.getElementById('fijo').value=key+"-";}
});

$('#glaboral').on('change',function(){
  var o=document.getElementById('glaboral').value;
 $('#dtd').hide();
  vlaboral(o);
});




$('#btnpaso1').on('click',function(){
      COMPROBARCAMPOS();
});

$('#btnpaso2').on('click',function(){
  datosp2();
  vistas('2');

});

$('#dirdetalle').on('keyup',function(){
  $('#labeldir').text('Estado, Municipio, Ciudad, Parroquia, Sector, Calle, Casa');
});
$('#dirdetalle').on('change',function(){
  var a=document.getElementById('dirdetalle').value;
  if (a==''||a==null){
  $('#labeldir').text('VACIO VALIDAR');  
  }else{
    $('#labeldir').text('VALIDAR');
  }
  
});

$('#btnatras3').on('click',function(){
  vistas('1');
});

$('#btnpaso3').on('click',function(){
  validarcampos2();
  var contador=0;
  for (var i = 0; i <10; i++) {
    if (positivo[(8+i)]==true){
        contador=contador+1;
    }
  }
  if (contador<10){
    alert('NO PUEDE DEJAR NINGUN CAMPO VACIO');
  }
  if (contador==10){
    vistas('3');
  }
});

$('#btnatras4').on('click',function(){
  vistas('2');
});

$('#bajarllave').on('click',function(){
  enviarllave();

});



  $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
});

$('#datosm').on('click',function(){
alert('Revise con detenimiento los datos que pueda modificar, los datos de la creacion de cuenta son unicos y no son modificables, en caso de error debera eliminar la cuenta, en cambio los datos personales podra modificarlos de manera inmediata antes de registrar sus datos personales en su cuenta, para esto podra usar los botones "Atras" y/o "Siguiente". Si existe alguna queja o duda informelo a al departamento de Dirección.');

}); 

$('#deacuerdo').on('click',function(){
/*
var TRABAJO='{"TIPO":"'++'","AREA":"'++'","SECCION":"'++'","GRADO":"'++'"}';
var informacionpersonal='{"Cedula" : "'+cedula+'","PNombre" :"'+ +'","SNombre" :"'+ +'","PApellido" : "'+ +'","SApellido" : "'++'","Fecha_Nacimiento" : "'++'","Sexo" : "'++'","Correo" : "'++'","Numero_contacto" : {"Fijo" : "'++'","Movil" : "'++'"},"Direccion" : "'++'","CARGO" : '+TRABAJO+'}';


  var envio={
        post: dato,
        post: dato,
        post: dato
      };


    $.ajax({
    data: envio,
    url: 'url',
    type: 'post',
      beforeSend: function(){

      },
    
      success: function(){
        alert('Excelente Gracias por completar el registro, su datos seran analizados, mientras podrá ingresar al sistema con su usuario y contraseña, se le informara atravez de su cuenta del sistema su estado de actividad, en cuanto sea habilitado podra usar libremente de las herramientas que les brinda el sistema según su cargo en la institución posterior a la confirmación. Si existe alguna queja o duda informelo a al departamento de Dirección.'); window.location="../../";
      }

  });

*/


}); 
                  