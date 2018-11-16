<?php

require_once '../../db/vendor/autoload.php';

class asistenciatoday
{
    public function __construct()
    {
        $this->db = (new MongoDB\Client)->sistema->asistencia_alumno;
    }

	public function positivas($fecha)
	{
		$respuesta = $this->db->find(
            [
                "fecha" => $fecha,
            ],
            [
                'projection' => [
                    '_id' => 0,
                    'positiva'=>1
                ],
            ]);
		 if (isset($respuesta)) {
        	if (!empty($respuesta)) {
        		$e['cantidad']=0;
        	}
        	# code...
        }
		foreach ($respuesta as $dato) {
            $e['cantidad'] = $e['cantidad']+1; 
        }
        
            
        return $e['cantidad'];
	}


    public function negativas()
    {
    	{
		$respuesta = $this->db->find(
            [
                "fecha" => $fecha,
            ],
            [
                'projection' => [
                    '_id' => 0,
                    'negativa'=>1
                ],
            ]);
		 if (isset($respuesta)) {
        	if (!empty($respuesta)) {
        		$e['cantidad']=0;
        	}
        	# code...
        }
		foreach ($respuesta as $dato) {
            $e['cantidad'] = $e['cantidad']+1; 
        }
        if (isset($e['cantidad'])) {
        	if (!empty($e['cantidad'])) {
        		$e['cantidad']=0;
        	}
        	# code...
        }
            
        return $e['cantidad'];
	}
    }
}


$a = new asistenciatoday();
if (isset($_POST['tipo'])) {
	if (!empty($_POST['tipo'])) {
		if ($_POST['tipo']!=1) {
			$b= $a->negativas($_POST['fecha']);
			echo $b;
			# code...
		}else{
			$b= $a->positivas($_POST['fecha']);
			echo $b;
		}
		# code...
	}
	# code...
}

