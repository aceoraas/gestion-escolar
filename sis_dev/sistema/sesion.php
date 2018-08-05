<?php 
//inicio de la funcion session predeterminada de php
session_start();

include 'conexion.php';
/*capturo por metodo post el usuario y contraseña*/

$user=$_POST['cod'];
$password=$_POST['contra'];			
	
// evaluo si la variable $user no esta vacia.
if ($user!= NULL && $password!=NULL) 
{
//si no esta vacia entonces cosulto un query
//el query pregunta a la base de datos, si el usuario existe.
	$consulta=mysqli_query($conexion,"SELECT * FROM usuario WHERE usuario_name='$user'ORDER BY tipo_usuario ASC");
	// evaulo si el query existe me dara un valor 1 o mayor a 1 de lo contrario me dara 0.
	if(mysqli_num_rows($consulta)>0)
	{
		//si existe entonces consulta que tipo de usuario es.
		$rs=mysqli_query($conexion,"SELECT * FROM usuario");
		// se ejecuta el query y se guarda en la variable $rs.
		/*se ejecuta un fetch array para guardar toda la informacion en un array dentro 
		de $mostrar en un while*/
		while($mostrar=mysqli_fetch_array($consulta))
		{ 
			if($mostrar['usuario_name']==$user)
			{
				if($mostrar['contrasenia']==$password)
				{
					// se evalua si el tipo de usuario es igual a admin(un administrador)	
					if($mostrar['tipo_usuario']=="admin")
					{
						// se le crea una session al usuario.
						$_SESSION['loggedin'] = true;
						$_SESSION['tipo'] = "admin";
    					$_SESSION['username'] = $user;
   						$_SESSION['start'] = time();
   						$_SESSION['expire'] = $_SESSION['start'] + (5*60*60); //5 horas dura la session 
   						//se redireciona al indexadministrador.php
   						header('location: ../../../sistema/portal_administrador/indexadministrador.php');	
						//se resetea la variable.
						$mostrar=0;
					}//if tipo de usuario
					//si no es un usuario admin se consultara si es un profesor
					else
					{	
						if($mostrar['tipo_usuario']=="profe")
						{
							//en caso de ser un profesor y no un error de buffer entonces se creara
							//la sesion al profesor							
							$_SESSION['loggedin'] = true;
    						$_SESSION['username'] = $user;
    						$_SESSION['tipo']= "profe";
							$_SESSION['id'] = $mostrar['ci_prof1'];
   							$_SESSION['start'] = time();
   							$_SESSION['expire'] = $_SESSION['start'] + (60*60); //1 hora para el profesor.
   							//y se redirecciona a su pagina de asistencia.php
   							header('Location: ../../../sistema/portal_profesor/asistencia.php');
							// se resetea la variable
							$mostrar=0;
						}// if tipo de usuario= profesor
					}//else usuario no es admin
				}//if scontraseña.
				else{
					echo "<script>alert('Disculpe se ha equivocado en su contraseña');</script>";
					require('index.php');
					}//ELSE scontraseña.
			}//if usuario. 	
		}//ciclo while del fecth array mysql
	}//if consulta de usuario existente
	//en caso de no encontrar el usuario
	else
	{
		echo "<script>alert('Disculpe usted no esta en el sistema');</script>";
		require('index.php'); 
		$mostrar=0;
	}//else usuario no existe

}// if variable $user nula.
//en caso de estar vacia la variable.
else
{
	echo "<script>alert('Debe ingresar el codigo y su contraseña');</script>";
	require('index.php'); 
}// else varible $user vacia.

// cierre de la conexion de la base de datos.
mysqli_close($conexion);

?>
