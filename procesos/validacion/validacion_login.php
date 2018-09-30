<?php 
 session_start();

 echo "hola, debes verificar la cuenta usuario y contraseña, recuerda que los usuarios tienen un estado de su cuenta que es renegado, en caso de estarlo debes avisarle de que no puede usar su cuenta, en caso de haber 4 intentos fallidos anunciarles si desean cambiar su usuario o contraseña y mostrar un contador de intentos restantes 3 para introducir el id y la llave, en caso de fallar 3 veces, notificarle que lo intente en 3 horas en casod e fallar una vez mas en 24 horas o dirigirse al departamento de informatica para desbloquearlos, todo esto en el mismo login";
 /*
  * esta clase valida que el usuario sea el usuario correcto y se redireccione 
  *//*
 class login{
	
 	// atributos
 	private $user;
 	private $pass;
 	public  $u_id;
 	private $tipo;
 	public  $url;
 	
 	// metodos
 	public function datos($user,$pass){
 		$this->user=$user;
 		$this->pass=$pass;
 	}

 	public function verificacion(){
 		
 		//incluyo la conexion
 		
 		include "../db/bd_conexion.php";
 		
 		//el query
    $collections = $db->usuarios;
 		$collections= $db->find();
    print_r($collections);
 		
 		//ejecuto
 		/*
 		$rs=$conexion->query($query);
 		$row = $rs->fetch_array(MYSQLI_ASSOC);
 		//agrego los datos y redireciono
 		if ($row){
 			// verifica el hash de contraseña
 			if(password_verify($this->pass,$row['u_contrasenia'])){
 				//verificado crea session y pasa id por url y cookie
 				$this->u_id=$row["u_id"];
 				$this->tipo=$row["u_tipo"];
 				$this->url=$row["urls_url"];
 				$_SESSION['inicia'] = true;
 				$_SESSION['u_id'] = $this->u_id;
 				$_SESSION['url']= $this->url;
   				$_SESSION['tiempo'] = time();
   				$_SESSION['expira'] = $_SESSION['tiempo'] + (16*60*60);
	   			header("location: ".$this->url."?id=".base64_encode($_SESSION['u_id']));
   			}
   			// contraseña incorrecta
   			else{
   				$this->u_id="none";
 				$this->tipo="none";
 				echo "<script>alert('usuario o contraseña incorrectos')
				location.href='../../';</script>";
   			}
 		}
 		// usuario incorrecto
 		else{
 			$this->u_id="none";
 			$this->tipo="none";
 			echo "<script>alert('Verifique el Usuario y la contraseña, si ya se registro entonces aun no se ha confirmado');
				location.href='../../';</script>";
 		}
 		$rs->free();
		$conexion->close();
 	}

}
$session = new login();
$session->datos($_POST['user'],$_POST['pass']);
$session->verificacion();
*/

?>