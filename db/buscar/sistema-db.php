<?php 


 include '../../db/vendor/autoload.php';

 /**
  *  charge and search in analitic of system 
  */
 class system
 {
 	
 	function __construct()
 	{
 		 $this->db = (new MongoDB\Client)->sistema->analitica_sistema;
 	}



 	public function getinscripcion(){

 			$r = $this->db->find(
            [
               "tablename" => "acionesdesistema"
            ],
            [
                
                'projection' => [
                    '_id' => 0,
                    'inscripcion' => 1
                ],
            ]);

            foreach ($r as $key => $value) {
            	return $a['$key']=$value;
            }
            

 	}
 }


?>