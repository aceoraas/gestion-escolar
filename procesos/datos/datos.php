<?php

require '../../db/buscar/alumnoDB.php';
require '../../db/buscar/representanteDB.php';

if (isset($_POST['P'])) {
    if (!empty($_POST['P'])) {

        switch ($_POST['P']['tipo']) {
            case 'alumnos':
                echo alumnos();
                break;
            case 'alumno':
                echo alumno();
                break;
            case 'representante':
                echo representantes();
                break;

            default:
                echo json_encode(['i' => false]);
                break;
        }
    }
}

function alumnos()
{

    $a  = new alumnoDB();
    $rs = $a->alumnos();

    if ($rs) {
        $rs['i'] = true;
    } else {
        $rs['i'] = false;
    }
    $datos = json_encode($rs);
    return $datos;
}

function representantes()
{
    $a  = new representanteDB();
    $rs = $a->representantes();

    if ($rs) {
        $rs['i'] = true;
    } else {
        $rs['i'] = false;
    }
    $datos = json_encode($rs);
    return $datos;

}
