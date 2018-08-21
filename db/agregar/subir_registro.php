<?php
require_once('../../db/vendor/autoload.php' );
class  Upload_Usuarios_DB
{
		function __construct()
		{
		$this->db = ( new MongoDB\Client )->sistema->usuarios;
		}

		public function insertauser($dato = [])
		{
			if(empty($dato)){
				return false;
			}

			$insertables = $this->db->insertOne([
				'usuario'=>$dato['user'],
				'pwd'=>$dato['pwd'],
				'pregunta_secreta'=>$dato['ps'],
				'respuesta_secreta'=>$dato['rs'],
				'C_U'=>$dato['cu'],
				'estado'=>'espera'

			]);
			// retorna el id del documento insertado
			$A=json_encode($insertables->getInsertedId());
			$B=json_decode($A,true);
			$formato="ObjectId('".$B['$oid']."')";
			$dato['_id']=$formato;
			return $dato;
		}
}


?>