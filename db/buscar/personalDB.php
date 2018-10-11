<?php

	require_once('../../db/vendor/autoload.php' );

class  personalDB{
	function __construct()
		{
		$this->db = ( new MongoDB\Client )->sistema->personal;
		}
		public function buscarm($c)
	{
		
		$r=$this->db->find(
				[
					"Cedula"=>$c
				],
				[
				 'limit'=>1,
				 'projection'=>[
				 				'Cedula'=> 0
				 			],
				]);
		
		foreach ($r as $estado => $valor){
			$e[$estado]=$valor;
		}			

		$a=json_encode($e);
		$b=json_decode($a,true);
		$a=json_encode($b[0]);
		return $a;

			
	}
}


?>