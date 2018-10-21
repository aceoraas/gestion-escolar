<?php

/*clase, atributo, metodo.

#  Class ValidacionPadre{}

#  variables:
#  $dato     -> obtiene el dato a verificar y formatear.
#  $proceso -> se activa un metodo segun lo deseado.
#  $nivel      -> solo si es requerido" determina una cantidad, un estilo  o una posibilidad de tipo.
# $opcion     -> determina un comportamiento especifico en la misma funcion.

#  *METOD StrCount($dato,$nivel)                    -> contador caracteres minimo.
#  *METOD StrCompare($dato[],$nivel,$option)        -> Comparacion de campos.
#  *METOD VerifyingPhoneNumber($dato[])             -> Verif-numero de telefono.
#  METOD YearOld($dato)                                 -> Verif-menores de edad.
#  *METOD Master($dato[],$proceso,$nivel)            -> Activa un metodo.
#  *METOD VerifyNumberoLettersemail()                 -> Verifica que sean datos numericos letras o si es correo.
 */

class Validacion
{
    public function Preparador($dato, $proceso, $nivel, $opcion)
    {
        $this->dato    = $dato;
        $this->proceso = $proceso;
        $this->nivel   = $nivel;
        $this->opcion  = $opcion;

        switch ($this->proceso) {
            case "1":
                $tipo = gettype($dato);

                if ($tipo == "string") {
                    return $this->StrCount($dato, $nivel, $opcion);
                } else {
                    return "el dato no es compatible, requiere de un string";
                }

                break;

            case '2':

                $tipo = gettype($dato);
                if ($tipo == "string") {
                    return $this->VerifyNumberLettersemail($dato, $nivel, $opcion);
                } else {
                    echo "el dato no es compatible, requiere de un string";
                }

                break;

            case '3':

                $tipo = gettype($dato);

                if ($tipo == "array") {
                    return $this->StrCompare($dato, $nivel, $opcion);
                } else {
                    echo "el dato no es compatible, requiere de un array";
                }

                break;
            case '4':
                return $this->VerifyingPhoneNumber($dato);
                break;

            case '5':

                if (gettype($dato) == "string") {
                    $this->YearOld($dato, $nivel);
                } else {
                    echo "el dato no es compatible, requiere de un string date  'yyyy-mm-dd'";
                }
                break;

            default:
                echo "Disculpe, ha ingresado un proceso que no existe verifique el parametro 2 -> Proceso. el Proceso que indica no existe.";
                break;
        }
    }

    // CONTADOR

    private function StrCount($d, $n, $o)
    {
        $tamaño = strlen($d);

        if ($o == null || $o == 0) {
            echo $tamaño;
            return $tamaño;
        }

        if ($o == 1) {
            if ($tamaño <= $n) {
                return true;
            } else {
                return false;
            }
        }
        if ($o == 2) {
            if ($tamaño >= $n) {
                return true;
            } else {
                return false;
            }
        }

    } // fin de StrCount.

    //Verificador de letras, numeros, correo.
    private function VerifyNumberLettersemail($d, $n, $o)
    {
        if ($n == 0) {
            #letras
            if ($o == 0) {
                # todas las letras
                if (preg_match("/[a-zA-Z ]/", $d)) {
                    return true;
                } else {
                    return false;
                }
            }
            if ($o == 1) {
                # solo mayusculas
                if (preg_match("/[A-Z ]/", $d)) {
                    return true;
                } else {
                    return false;
                }
            }
            if ($o == 2) {
                # solo minusculas
                if (preg_match("/[a-z ]/", $d)) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        if ($n == 1) {
            # numeros
            if (preg_match("/[1-9]/", $d)) {
                return true;
            } else {
                return false;
            }

        }
        if ($n == 2) {
            # emails
            if (filter_var($d, FILTER_VALIDATE_EMAIL)) {
                return true;
            } else {
                return false;
            }
        }
    } // fin de verifyingLettersNumberEMail.

    // StrCompare() verifica campos y contraseña.

    private function StrCompare($d, $n, $o)
    {
        switch ($o) {
            case '0':
                if ($n == 0) {
                    if ($d[0] == $d[1]) {
                        return true;
                    } else {
                        return false;
                    }
                }
                if ($n == 1) {
                    if ($d[0] === $d[1]) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return "Disculpe, Verifique el parametro 3 -> nivel. su nivel no es valido";
                }
                break;

            case '1':

                if (password_verify($d[0], $d[1])) {
                    echo "si";
                } else {
                    echo "no";
                }

                break;

            default:
                echo "Disculpe. verifique el parametro 4 -> opcion. su opcion no es valida";
                break;
        }
    } //fin del StrCompare()

    // inicio del VerifyingPhoneNumber()
    private function VerifyingPhoneNumber($de)
    {

        function formateado($da)
        {

            $strlen = strlen($da);
            if ($strlen > 10 && $strlen < 13) {
                //4 1 6 3 8 0 7 6 3 9
                //0 4 1 6 3 8 0 7 6 3  9
                //4 1 6 - 3 8 0 7 6 3  9
                //0 4 1 6 - 3 8 0 7 6  3  9
                //1 2 3 4 5 6 7 8 9 10 11 12
                if (preg_match("/[^-]*$/", $da)) {

                    $da = str_replace('-', '', $da);

                    $strlen = strlen($da);

                    if ($strlen > 10) {

                        $da = (($da / 10) * 10);

                        if (strlen($da) == 10) {
                            $valor = array('valor' => '1', 'mensaje' => $da);
                            $js    = json_encode($valor);
                            return $js;
                        } else {
                            $valor = array('valor' => '0', 'mensaje' => "este numero no es Valido");
                            $js    = json_encode($valor);
                            return $js;
                        }
                    } else {
                        $valor = array('valor' => '1', 'mensaje' => $da);
                        $js    = json_encode($valor);
                        return $js;
                    }
                } else {
                    $valor = array('valor' => '0', 'mensaje' => 'error');
                    $js    = json_encode($valor);
                    return $js;}
            } else {
                if ($strlen < 10 || $strlen > 10) {
                    $valor = array('valor' => '0', 'mensaje' => "el numero es incorrecto");
                    $js    = json_encode($valor);
                    return $js;
                } else {
                    $valor = array('valor' => '1', 'mensaje' => $da);
                    $js    = json_encode($valor);
                    return $js;
                }
            }
        } //fin de la funcion

        $tipo = gettype($de);

        if ($tipo == "string") {

            echo formateado($de);
        }

        if ($tipo == "array") {
            echo "{numeros: [";
            foreach ($de as $key => $value) {
                formateado($value);
                echo ",";
                $a = $key;
            }
            echo "{'total':'" . ($a + 1) . "'}]}";
        }

    } // fin del verificador de numeros de telefono

    //años de edad años de edad. retorna la edad

    private function YearOld($d, $n)
    {
        if (isset($n) && $n != 0) {
            if (!empty($n) && ($n != 0)) {
                $d = str_replace('-', '', $d);
                $d = date('Ymd') - $d;
                $n = $n * 10000;
                if ($d < $n) {
                    echo "es menor";
                    return false;
                } else {
                    echo "permitido";
                    return true;
                }
            }
        } else {

            $fecha    = date('Ymd');
            $d        = str_replace('-', '', $d);
            $d        = $fecha - $d;
            $mes      = substr($d, 2, -2);
            $dia      = substr($d, 4);
            $d        = substr($d, 0, -4);
            $restante = (365 - (($mes * 30) + $dia));
            $dato     = array('edad' => $d, 'restante' => $restante);
            print_r($dato);

        }
    }

} // fin de clase.

/*procesos:
#
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
 */

/*
echo "Entrada:\n";
foreach ($dato as $key => $value) {
echo $key." - ".$value." - ".strlen($value);

echo "\n";
}

echo "\nSalida:\n";*/
