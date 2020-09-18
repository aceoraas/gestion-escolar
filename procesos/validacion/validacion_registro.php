<?php
 error_reporting(0);

/*esta validacion es exclusiva del registro.

/*  #Procedimientos:
#   -VALIDAR CEDULA.
#   -verificar conexion a internet.
#     --verificar si esta en el cne y obtener datos automaticos.-> heredado
#   -verificar que la cedula no exista en la base de datos como
#    denegado, retirado o en espera. -> heredado
#       --llamar a vista con mensaje segun estado.
#   -Validar Disponibilidad de nombre de usuario.
#   -Validar minimo de caracteres de contraseña. -> heredado
#   -validar comparacion de campos de contraseñas. -> heredado
#   -validar letras en campo.-> heredado
#   -validar datos numericos en campo. -> heredado
#   -validar numero de telefono Fijo || Movil -> heredado
#
 */

/*clases Y METODOS heredados

#  HEREDADO -> Class ValidacionPadre{
#1 -> StrCount() -> contador caracteres minimo.
--¡solo pasar un dato string!.
--nivel: es el limite a contar maximo o minino.
--opcion: 0 -> solo contar.
1 -> retorna falso al ser mayor que el valor de nivel.
2 -> retorna falso al ser menor que el valor de nivel.

#2-> VerifyNumberoLettersemail() Verifica que sean datos numericos letraso si es correo.
--¡Solo pasar un dato en string!.
-- nivel: 0 -> letras
1 -> numeros
2 -> email
-- opcion:
nivel 0 -> 0 mayusculas y minusculas. | da falso si no son letras
nivel 0 -> 1 solo mayuscular. | da falso si no son letras y mayusculas
nivel 0 -> 2 solo minusculas. | da falso si no son letras y minusculas
nivel 1 -> 0 numeros.          | da falso si no son numeros.
nivel 2 -> 0 correos.          | da falso si no es un correo valido.

#3-> StrCompare() Comparacion de campos.
--¡solo pasar arreglos!
--nivel: 0  -> normal para opcion -> 0 (==).
--         1  -> de modo estricto para opcion -> 0 (===).
--opcion:0  -> comparar campos normales.
1  -> comparar string con pasword hash verify.
--¡este debe ser creado con
password_hash("contraseña", PASSWORD_BCRYPT, ["cost" => 9])!

#4->VerifyingPhoneNumber($dato[])  -> Verifica el numero de telefono.
¡Acepta datos en string y en array!
string : numero de telefono con 0 o sin 0 al inicar con formato o sin formato "-".
array  : (numero1,numero2).
esta retorna true y numero formateado.
--nivel: 0 -> no tiene nivel
--opcion:0 -> no tiene opciones

#4 -> YearOld($dato,$nivel) -> retorna la edad
-- requiere de un string en formato 'año-mes-dia' 'yyyy-mm-dd'
--nivel 0-> devuelve la edad calculada.
1-> retorna falso si la edad es menor a la del nivel.
--no tiene opcion.
#
#  }

#  HEREDADO -> Class Cne{
#
#  heredado -> METOD obtenerElector()         ->Retorna los datos del CNE
#
#  }

 */

/**
 * validacion simple hereda de validaciones
 */
require_once './validaciones.php';
require_once '../../db/buscar/usuarioDB.php';
require_once '../../db/agregar/subir_registro.php';
require_once './verificacion_cne.php';

$CNE_respuesta;

// validad cedula TAMAÑO Y SOLO NUMEROS.

// * Validacion de usuarios en base de datos
if (isset($_POST['esta'])) {
    if (!empty($_POST['esta'])) {
        $b_esta = new UsuariosDB();
        $dato = $_POST['esta'];
        $r = $b_esta->estadoUser($dato);
        echo $r;
    }
}

if (isset($_POST['sp'])) {
    if (!empty($_POST['sp'])) {
        $a = json_decode($_POST['sp'], true);
        savedp($a);
    }
}

if (isset($_POST['verificar'])) {
    if (!empty($_POST['verificar'])) {
        $user = $_POST['verificar'];
        $b_u = new UsuariosDB();
        $dato = array('usuario' => $user);
        $result = $b_u->buscarUsuario($dato);
        if ($result > 0) {
            echo '0';
        } else {
            $dato = array('C_U' => $_POST['c_u']);
            $result = $b_u->buscarUsuario($dato);
            if ($result > 0) {
                echo '2';
            } else {
                if (preg_match('/[ *-@^+!~¿"!#$&%=?°¬|<()-.,;:ñ~`]/', $user)) {
                    echo '0';
                } else {
                    echo '1';
                }
            }
        }
    }
}

// comprobacion cedula

# code...

if (isset($_POST['laci'])) {
    if (!empty($_POST['laci'])) {
        if (isset($_POST['naci'])) {
            if (!empty($_POST['naci'])) {
                $ajaxCedula = $_POST['laci'];
                $nacionalidad = $_POST['naci'];
                vcedula($ajaxCedula, $nacionalidad);
            }
        }
    }
}

if (isset($_POST['us']) && isset($_POST['co']) && isset($_POST['pr']) && isset($_POST['re']) && isset($_POST['ce']) && isset($_POST['na'])) {
    if ((!empty($_POST['us'])) && (!empty($_POST['co'])) && (!empty($_POST['pr'])) && !(empty($_POST['re'])) && (!empty($_POST['ce'])) && (!empty($_POST['na']))) {
        $userdb = $_POST['us'];
        $pwddb = $_POST['co'];
        $psdb = $_POST['pr'];
        $rsdb = $_POST['re'];
        $C_U = $_POST['na'] . "-" . $_POST['ce'];

        $valores = array('user' => $userdb, 'pwd' => $pwddb, 'ps' => $psdb, 'rs' => $rsdb, 'cu' => $C_U, '_id' => '');

        Crear_cuenta($valores);
    }
}

// funciones

function vcedula($a, $b)
{
    $ci = $a;
    $na = $b;
    $A = new Validacion();
    $result = $A->Preparador($ci, 1, 8, 1);

    $r = gettype($result);
    if ($r != 'boolean') {
        echo $result;
    } else {
        if ($result == true) {
            $result = $A->Preparador($ci, 2, 1, 0);
            if ($result == true) {
                $result = $A->Preparador($ci, 2, 0, 0);
                if ($result == true) {
                    $data = array('valor' => '0');
                    $js = json_encode($data);
                    echo $js;
                } else {

                    $s = strlen($ci);
                    if ($s > 5) {

                        $cne = new Cne;
                        $CNE_respuesta = $cne->obtenerElector($na, $ci);

                        $datocne = json_decode($CNE_respuesta, true);

                        if ($datocne['modo'] == 1 || $datocne['error'] == 1) {
                            $nombres = explode(" ", $datocne['nombre']);
                            foreach ($nombres as $key => $value) {
                                $a = $key;
                            }
                            $b = 0;
                            $ape = array();
                            $apellido = '';
                            $nombre = '';
                            for ($i = $a - 1; $i <= $a; $i++) {
                                $ape[$b] = $nombres[$i];
                                $b++;
                            }
                            $a = $a - 2;
                            for ($i = 0; $i <= $a; $i++) {
                                $nombre = $nombre . " " . $nombres[$i];
                            }
                            for ($i = 0; $i <= 2; $i++) {
                                $apellido = $apellido . " " . $ape[$i];
                            }

                            $edo = explode("EDO. ", $datocne['estado']);
                            $datoscne = array('valor' => '3', 'nombre' => $nombre, 'apellido' => $apellido, 'edo' => $edo[1]);
                            $js = json_encode($datoscne);
                            echo $js;

                        } else {
                            $data = array('valor' => '1');
                            $js = json_encode($data);
                            echo $js;

                        }

                    } else {
                        $data = array('valor' => '0');
                        $js = json_encode($data);
                        echo $js;}
                }
            } else {
                $data = array('valor' => '0');
                $js = json_encode($data);
                echo $js;}
        } else {
            $data = array('valor' => '0');
            $js = json_encode($data);
            echo $js;}
    }
}

function Crear_cuenta($datos)
{
    $pwd = password_hash($datos['pwd'], PASSWORD_BCRYPT, ['cost' => 12]);
    $pwd = str_replace("$2y$12$", '', $pwd);
    $datos['pwd'] = $pwd;
    $subir = new Upload_Usuarios_DB();
    $nuevacuenta = $subir->insertauser($datos);
    $resultado = json_encode($nuevacuenta);
    echo $resultado;

}

if (isset($_POST['telefono'])) {

    if (!empty($_POST['telefono'])) {
        $num = $_POST['telefono'];
        numeromovil($num);
    }
}

function numeromovil($d)
{
    $A = new Validacion();
    $rs = $A->Preparador($d, 4, 0, 0);
    echo $rs;
}

function savedp($d)
{

    $call = new Upload_dp_db();
    $call->datospersonal($d);
    return $call;

}
