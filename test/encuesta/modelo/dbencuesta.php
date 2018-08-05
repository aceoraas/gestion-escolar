<?php
	
	require_once('./modelo/vendor/autoload.php');
	
	class BDENCUESTA{
		//contructor de base de datos y colecion en dbmongo
		function __construct()
		{
			$this-> db = ( new MongoDB\Client)->encuesta->respuestas;
		}
			// genera una insercion de datos de una nueva encuesta
		public function nueva_encuesta($data = [])
		{
			// si esta vacio retorna falso ya que no existen datos 
			if(empty($data))
			{
				return false;
			}
			// si existe informacion guarda los datos de una nueva encuesta
			else
			{
				// en insertado se almacena la respuesta de insertOne() 
				// puede ser el id o el query completo

					/*
						esta se compone de un array[] cuyos datos pueden ser modificados,
						de manera que se puede usar para distintos formularios de encuestas
					*/

				$insertado = $this->db->insert(
					[
						'nombre'=>$data['nombre'],
						'apellido'=>$data['apellido'],
						'cedula'=>$data['cedula'],
						'numero_movil'=>$data['numero_movil'],
						'pregunta1'=>$data['pregunta1'],
						'pregunta2'=>$data['pregunta2'],
						'pregunta3'=>$data['pregunta3']
					]);
			// retorna el id del documento insertado
			return $insertado->getInsertedId();
			}
		}
		// verifica que el usuario no haya respondido la encuesta con anterioridad
		public function validador($data)
		{
		    return $this->db->find(['cedula'=>$data]);
		}
		// cuenta la cantidad de respuestas positivas y negativas 
		public function contador_respuestas($data=[])
		{

		}

		// retorna los datos de un usuario y sus respuestas 
		public function retorna_datos(){

		} 
	}
?>