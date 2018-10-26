<?php

require_once '../../db/vendor/autoload.php';

class alumnoDB
{
    public function __construct()
    {
        $this->db = (new MongoDB\Client)->sistema->alumno;
    }

    public function buscaralumno($id)
    {
        $respuesta = $this->db->find(
            [
                "C_E" => $id,
            ],
            [
                'limit'      => 1,
                'projection' => [
                    '_id' => 0
                ],
            ]);
        foreach ($respuesta as $dato => $valor) {
            $e[$dato] = $valor;
        }
        $respuesta = json_encode($respuesta);
        $e         = json_decode($respuesta, true);
        return $e;
    }

    public function alumnos($cantidad)
    {
        $respuesta = $this->db->find();
        foreach ($respuesta as $dato => $valor) {
            $e[$dato] = $valor;
        }
        $e = json_encode($e);
        $e = json_decode($e, true);
        return $e;
    }

    public function alumnosp($grado,$seccion){

        $respuesta = $this->db->find(
            [
                "Grado"=> $grado,
                "Seccion"=> $seccion
            ],
            [
                'projection' =>[ '_id' =>0],
        ]);
        foreach ($respuesta as $dato => $valor) {
            $e[$dato] = $valor;
        }
        $e = json_encode($e);
        $e = json_decode($e, true);
        return $e;

    }
}
