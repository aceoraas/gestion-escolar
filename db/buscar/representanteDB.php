<?php

require_once '../../db/vendor/autoload.php';

class representanteDB
{
    public function __construct()
    {
        $this->db = (new MongoDB\Client)->sistema->representante;
    }

    public function buscarrepresentante($id)
    {
        $respuesta = $this->db->find(
            [
                "Cedula" => $id,
            ],
            [
                'limit'      => 1,
                'projection' => [
                    '_id' => 0,
                ],
            ]);
        foreach ($respuesta as $dato => $valor) {
            $e[$dato] = $valor;
        }
        $respuesta = json_encode($respuesta);
        $e         = json_decode($respuesta, true);
        return $e;
    }

    public function representantes($cantidad)
    {
        $respuesta = $this->db->find();
        foreach ($respuesta as $dato => $valor) {
            $e[$dato] = $valor;
        }
        $e = json_encode($e);
        $e = json_decode($e, true);
        return $e;
    }
}
