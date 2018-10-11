<?php 
 session_start();
error_reporting(E_ALL ^ E_NOTICE);
 require_once('../../db/buscar/usuarioDB.php');
 require_once('../datos/datosp.php');
/*
 echo "hola, debes verificar la cuenta usuario y contraseña, recuerda que los usuarios tienen un estado de su cuenta que es renegado, en caso de estarlo debes avisarle de que no puede usar su cuenta, en caso de haber 4 intentos fallidos anunciarles si desean cambiar su usuario o contraseña y mostrar un contador de intentos restantes 3 para introducir el id y la llave, en caso de fallar 3 veces, notificarle que lo intente en 3 horas en casod e fallar una vez mas en 24 horas o dirigirse al departamento de informatica para desbloquearlos, todo esto en el mismo login<br><br>";
*/

if (isset($_POST['u'])&&isset($_POST['p'])) {
  if (!empty($_POST['u'])&&!empty($_POST['p'])) {
    
    $bar=comprobarpass($_POST['u'],$_POST['p']);
    
    if ($bar['respuesta']==1) {
    sesionlogin($bar[0]['C_U']);
     $json=array('id_u'=>$bar[0]['C_U'],'estado'=>$bar[0]['estado'],'rs'=>$bar['respuesta'],'usuario'=>$_POST['u']);
     sesionlogin($bar[0]['C_U']);
      echo json_encode($json);
    }else{
      echo json_encode(['rs'=>false]);
    }

  }
}


function comprobarpass($u,$p)
{
    $buscar= new UsuariosDB();
    $resultado=$buscar->buscarHash($u);
    $bar= array($resultado);
    $pass="$2y$12$".$bar[0]['pwd'];
    $valor=password_verify($p,$pass);
    if (isset($valor)) {
      if (!empty($valor)) {

        $bar['respuesta']=$valor;

      }else{
        $bar['respuesta']=0;
      }
    }else{
      $bar['respuesta']=0;
    }
    return $bar;
}

function sesionlogin($C_U){
  $_SESSION['EXPIRACION']=time()+(60*60*1);
  $_SESSION['id_u']=$C_U;
  $_SESSION['sesiones']=$_SESSION['sesiones']+1;
}


/*function url($id_u)
{
  $buscar= new UsuariosDB();
  $resultado=$buscar->
}
*/



?>