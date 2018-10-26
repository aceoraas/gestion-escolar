<?php

require '../../db/buscar/alumnoDB.php';
require '../../db/buscar/representanteDB.php';

if (isset($_POST['P'])) {
    if (!empty($_POST['P'])) {

        switch ($_POST['P']['tipo']) {
            case 'alumnos':
                $cantidad = (int) $_POST['P']['cantidad'];
                echo alumnos($cantidad);
                break;
            case 'alumno':
                echo alumno($dato['C_E'], $dato['cantidad']);
                break;
            case 'representante':
                $cantidad = (int) $_POST['P']['cantidad'];
                echo representantes($cantidad);
                break;
            case 'docente':
                echo misalumnos($_POST['P']['seccion'],$_POST['P']['grado'],$_POST['P']['area']);
                break;

            default:
                echo json_encode(['i' => false]);
                break;
        }
    }
}

function alumnos($cantidad)
{

    $a  = new alumnoDB();
    $rs = $a->alumnos($cantidad);

    if ($rs) {
        $rs['i'] = true;
    } else {
        $rs['i'] = false;
    }
    $datos = json_encode($rs);
    return $datos;
}

function representantes($cantidad)
{
    $a  = new representanteDB();
    $rs = $a->representantes($cantidad);

    if ($rs) {
        $rs['i'] = true;
    } else {
        $rs['i'] = false;
    }

    $datos = json_encode($rs);
    return $datos;

}


function misalumnos($seccion,$grado,$area){
    
    switch ($area) {
        case 'Particular':
        $a = new alumnoDB();
        $r = $a-> alumnosp($grado,$seccion);
        if ($r) {
        $r['i'] = true;
    } else {
        $r['i'] = false;
    }
            $datos = json_encode($r);
            return $datos;


            break;
            case 'Especialidad':
            # code...
            break;
        
        default:
            # code...
            break;
    }

}
