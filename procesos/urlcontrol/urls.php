<?php
if (isset($_POST['tipo'])) {
    if (!empty($_POST['tipo'])) {
        $data[0] = $_POST['tipo'];
        if ($_POST['tipo'] == 'otro') {
            if (isset($_POST['otro'])) {
                if (!empty($_POST['otro'])) {
                    $data[1] = $_POST['otro'];
                    echo geturl($data);
                }
            }
        }

        echo geturl($data);
    }
}

function geturl($tipo = [])
{
    switch ($tipo[0]) {

        case 'Docente':
            return "../portales/docente/";
            break;

        case 'Administrativo':
            return "../portales/administracion/";
            break;

        case 'Secretaria':

            return "../portales/secretaria/";

            break;

        case 'Salud':
            return "../portales/salud/";
            break;
        case 'cocinero':
            return "../portales/cocina/";
            break;

        case 'Directivo':
            return "../portales/direccion/";
            break;
        case 'Lopna':
            return "../portales/lopna/";
            break;

        default:
                 return "../portales/otro/";
           break;
    }
}
