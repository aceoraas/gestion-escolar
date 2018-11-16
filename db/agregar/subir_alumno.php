<?php
echo "true";
/*
require_once ('../../db/vendor/autoload.php')


class alumno
{
	
	function __construct()
	{
		$this->db = (new MongoDB\Client)->sistema->alumnos;
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


	public function insertar(dato=[]){
		$rs= $this->db->insertOne(
			[
				{
	
	"Representante" =>dato=[],
	"PNombre" => dato=[],
	"SNombre" => dato=[],
	"PApellido" => dato=[],
	"SApellido" => dato=[],
	"C_E" => dato=[],
	"Sexo" => dato=[],
	"Fecha_Nacimiento" => dato=[],
	"Condicion" => {
		"Tipo" => dato=[],
		"Descripcion" => dato=[]
	},
	"Talla_Ropa" => {
		"Camisa" => dato=[],
		"Pantalon" => dato=[],
		"Zapato" => dato=[]
	},
	"Grado" => dato=[],
	"Seccion" => dato=[],
	"Estado_Academico" => "Cursando",
	"Ultimo_Aprobados" => "none",
	"UrlImagen" => "imgs/alumnos/".dato=[],
	"Fecha_P_A" => date(),
	"Posicion_Academica" => "inscripto"
}

    		]
    	);
    	printf("Inserted: %d\n",$rs->getInsertedId());
	}
}
*/
?>