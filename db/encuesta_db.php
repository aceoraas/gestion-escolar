<?php

require_once './vendor/autoload.php';

class MongoDD
{

    public function __construct()
    {
        $this->db = (new MongoDB\Client)->encuesta->info;
    }

    public function inserta($dato = [])
    {
        if (empty($dato)) {
            return false;
        }

        $insertables = $this->db->insertOne([
            'Nombre'    => $dato['Nombre'],
            'Apellido'  => $dato['Apellido'],
            'Cedula'    => $dato['Cedula'],
            'Correo'    => $dato['Correo'],
            'Pregunta1' => $dato['Pregunta1'],
            'Pregunta2' => $dato['Pregunta2'],
            'Pregunta3' => $dato['Pregunta3'],
            'Pregunta4' => $dato['Pregunta4'],
            'Pregunta5' => $dato['Pregunta5'],
            'Pregunta6' => $dato['Pregunta6'],

        ]);
        // retorna el id del documento insertado
        return $insertables->getInsertedId();
    }

    /*public function buscador($cedula){
    return $this->db->find(["Cedula"=>$cedula]);
    }*/
    /*
    public function mostrar(){
    return $this->db->find();
    }*/
    public function contadorgeneral()
    {
        return $this->db->count();
    }
    public function contadorsi()
    {
        $si = $this->db->count(array('Pregunta1' => 'si'));
        $si = $si + $this->db->count(array('Pregunta2' => 'si'));
        $si = $si + $this->db->count(array('Pregunta3' => 'si'));
        $si = $si + $this->db->count(array('Pregunta4' => 'si'));
        $si = $si + $this->db->count(array('Pregunta5' => 'si'));
        $si = $si + $this->db->count(array('Pregunta6' => 'si'));
        return $si;
    }
    public function contadorno()
    {
        $si = $this->db->count(array('Pregunta1' => 'no'));
        $no = $no + $this->db->count(array('Pregunta2' => 'no'));
        $no = $no + $this->db->count(array('Pregunta3' => 'no'));
        $no = $no + $this->db->count(array('Pregunta4' => 'no'));
        $no = $no + $this->db->count(array('Pregunta5' => 'no'));
        $no = $no + $this->db->count(array('Pregunta6' => 'no'));
        return $no;
    }
}

?>

<?php

if (isset($_POST['Cedula'])) {
    if (!empty($_POST['Cedula'])) {

        $db          = new MongoDD;
        $id_encuesta = $db->inserta([
            'Nombre'    => $nombre = $_POST['Nombre'],
            'Apellido'  => $_POST['Apellido'],
            'Cedula'    => $_POST['Cedula'],
            'Correo'    => $_POST['Correo'],
            'Pregunta1' => $_POST['inPregunta1'],
            'Pregunta2' => $_POST['inPregunta2'],
            'Pregunta3' => $_POST['inPregunta3'],
            'Pregunta4' => $_POST['inPregunta4'],
            'Pregunta5' => $_POST['inPregunta5'],
            'Pregunta6' => $_POST['inPregunta6'],
        ]);
    }
}

if ($id_encuesta) {
    echo "
				<script>
					var again= alert('Muchas Gracias Por Respnder la Encuesta: ($id_encuesta)');
					if(again==null){
						window.location = '../portales/encuesta/index.php';
					}
				</script>";

    /*foreach ($db->mostrar() as $key) {
    echo "<br><b>nombre: </b>".$key->nombre;
    echo "<br><b>apellido: </b>".$key->apellido;
    echo "<br><b>cedula: </b>".$key->cedula."<br>";

    }*/

    exit();
}

if ($_GET['COUNT'] != 0) {
    $db = new MongoDD;
    echo $db->contadorgeneral();
}
if ($_GET['SI'] != 0) {
    $db = new MongoDD;
    echo $db->contadorsi();
}
if ($_GET['NO'] != 0) {
    $db = new MongoDD;
    echo $db->contadorno();
}
?>