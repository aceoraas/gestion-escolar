<?php

require_once('../../db/vendor/autoload.php' );

class  UsuariosDB{
	function __construct()
		{
		$this->db = ( new MongoDB\Client )->sistema->usuarios;
		}

		public function total(){
			return $this->db->count();
		}
		
		//PASAR EL NOMBRE DE USUARIO
		public function buscarUsuario($data){
		$respuesta=$this->db->count($data);
		return $respuesta;
		}
		// PASAR EL _ID DE USUARIO 
		public function buscarHash($data)
		{
			
			$respuesta=$this->db->find($data,array('pwd'=>1));
			return $respuesta;
		}
		public function estadoUser($a)
		{
			$respuesta=$this->db->find(["C_U"=>$a],['limit'=>1,'projection'=>['estado'=> 1],]);
			foreach ($respuesta as $estado){
				$e=$estado->estado;
			}
			return $e;
		}

}
?>