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
		public function estadoUser($c_u)
		{
			$respuesta=$this->db->find($c_u);
			return $respuesta;
		}

}

//$a=new UsuariosDB();
//$text=array(["C_U"=>"27226407"],["C_U"=>"1"]);
//$R=$a->estadoUser($text);
//print_r($R);
?>