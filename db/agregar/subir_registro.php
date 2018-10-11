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

class Upload_dp_db{
	function __construct(){
		$this->db = ( new MongoDB\Client )->sistema->personal;
	}

	public function datospersonal($dato=[])
	{
		if(empty($dato))
		{
				return false;
		}
		$save_dp= $this->db->insertOne($dato);
		$save_dp->getInsertedId();
		if (isset($save_dp)) {
			if (!empty($save_dp)) {
				
					$true = array('valor' => 1);
					return json_encode($true);
			}
				else{
						$true = array('valor' => 0);
						return json_encode($true);
				}
		}

	}
}

?>