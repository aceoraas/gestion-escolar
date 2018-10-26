<?php


require_once ('../../db/vendor/autoload.php');



/**
 * 
 */
class asistencia
{
	
	function __construct()
	{
		$this->db = (new MongoDB\Client)->sistema->asistencia_alumno;
	}


	public function actualizar($fecha,$grado,$seccion,$tipo,$dato)
	{
		$rs= $this->db->updateOne(
			['grado'=>$grado,'seccion'=>$seccion,'fecha'=>$fecha],
    		['$addToSet' => [$tipo=>$dato]]
    	);
    	printf("Matched %d document(s)\n", $rs->getMatchedCount());
   printf("Modified %d document(s)\n", $rs->getModifiedCount());
	
	}

	public function tablero($fecha,$grado,$seccion)
	{
		$rs= $this->db->updateOne(
			['grado'=>$grado,'seccion'=>$seccion,'fecha'=>$fecha],
    		['$addToSet' => ['positiva'=>[],'negativa'=>[]]]
    	);
    	$rs=json_encode($rs->getMatchedCount());
	return $rs;
	}


	public function inserta($fecha,$grado,$seccion){
		$rs= $this->db->insertOne(
			[
				'grado'=>$grado,
				'seccion'=>$seccion,
				'fecha'=>$fecha,
    			'positiva'=>[],
    			'negativa'=>[]
    		]
    	);
    	printf("Inserted: %d\n",$rs->getInsertedId());
	}
}

if (isset($_POST['d'])) {
	if (!empty($_POST['d'])) {

		$rr= new asistencia();

		$b=$rr-> tablero($_POST['d']['fecha'],$_POST['d']['grado'],$_POST['d']['seccion']);

		if ($b<1) {
printf($b);
			$b=$rr->inserta($_POST['d']['fecha'],$_POST['d']['grado'],$_POST['d']['seccion']);

			$a= $rr->actualizar($_POST['d']['fecha'],$_POST['d']['grado'],$_POST['d']['seccion'],$_POST['d']['tipo'],$_POST['d']['dato']);

		}else{
			$a= $rr->actualizar($_POST['d']['fecha'],$_POST['d']['grado'],$_POST['d']['seccion'],$_POST['d']['tipo'],$_POST['d']['dato']);
		}
		
		
	}

}

?>