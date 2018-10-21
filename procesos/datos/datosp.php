<?php
require_once '../../db/buscar/personalDB.php';

if (isset($_POST['tipo'])) {
    if (!empty($_POST['tipo'])) {

        switch ($_POST['tipo']) {

            case 1:
                if (isset($_POST['valor'])) {
                    if (!empty($_POST['valor'])) {
                        echo getmidatos($_POST['valor']);
                    }
                }

                break;

            default:

                break;
        }

    }

}

function getmidatos($d)
{
    # busca los datos por la cedula, y retorna un json
    # estos datos guardarlos en localstorage (como datospuser).
    $b      = new personalDB();
    $buscar = $b->buscarm($d);
    return $buscar;
}
//

/*
function allpersonaladmin()
{
# guarda todos los datos en local storage, solo de administracion.
# code...
}

class allalumnos
{
public function getalumno()
{
#guarda los datos en local storage (como misalumnos)
}
public function todosalumnos()
{
# guarda todos los datos en local storage, solo de administracion.
}

}

class allrepresentantes
{
public function todosrepresentantes(){
#todos los datos de los representantes en local storage (como todosrepresentantes)

}
public function getrepresentantes()
{

#todos los datos de los representantes en local storage (comorepresentante)
# code...
}

}

 */
