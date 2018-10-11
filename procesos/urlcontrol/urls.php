<?php
if (isset($_POST['tipo'])) {
	if(!empty($_POST['tipo'])){
		$data[0]=$_POST['tipo'];
		if ($_POST['tipo']=='otro') {
			if (isset($_POST['otro'])) {
				if (!empty($_POST['otro'])) {
					$data[1]=$_POST['otro'];
							echo geturl($data);
				}
			}
		}
		
		echo geturl($data);
	}
}

 function geturl($tipo=[])
 {
 	switch ($tipo[0]) {
		
		case 'Docente':
			return "../portales/docente/";
		break;

		case 'Administrativo':
			return "../portales/administracion/";
		break;

		case 'Secretaria':
			
			return "../portales/secretaria/";

		break;

		case 'otro':
			switch ($tipo[1]) {
				case '1':
					return 'opcion1';
					break;
				
				case '2':
					return "opcion2";
				break;
				
				default:
					# code...
					break;
			}
		break;

		case 'Salud':
			return "../portales/salud/";
		break;
		case 'cocinero':
		 	return "../portales/cocina/";
		 break;

		 case 'Directivo':
		 	return "../portales/direcion/";
		 	break;
		 case 'Lopna':
		 	return "../portales/lopna/";
		 	break;
	
	default:
		# code...
		break;
}
 }
	
?>