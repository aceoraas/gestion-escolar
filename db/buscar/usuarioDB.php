<?php

require_once '../../db/vendor/autoload.php';

class UsuariosDB
{
    public function __construct()
    {
        $this->db = (new MongoDB\Client)->sistema->usuarios;
    }

    // cuenta los usuarios registrados
    public function total()
    {
        return $this->db->count();
    }

    //PASAR EL NOMBRE DE USUARIO
    public function buscarUsuario($data)
    {
        $respuesta = $this->db->count($data);
        return $respuesta;
    }
    // PASAR EL _ID DE USUARIO
    public function buscarHash($user)
    {

        $respuesta = $this->db->find(
            [
                "usuario" => $user,
            ],
            [
                'limit'      => 1,
                'projection' => [
                    'C_U'    => 1,
                    'estado' => 1,
                    'pwd'    => 1,
                ],
            ]);

        foreach ($respuesta as $dato) {
            $e['C_U']    = $dato->C_U;
            $e['estado'] = $dato->estado;
            $e['pwd']    = $dato->pwd;
            $e['id']     = $dato->_id;
        }
        return $e;
    }

    // pasar cedula del usuario
    public function estadoUser($a)
    {
        $respuesta = $this->db->find(
            [
                "C_U" => $a,
            ],
            [
                'limit'      => 1,
                'projection' => [
                    'estado' => 1,
                ],
            ]);
        foreach ($respuesta as $estado) {
            $e = $estado->estado;
        }
        return $e;
    }
}
    