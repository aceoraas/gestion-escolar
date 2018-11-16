
<?php
if (isset($_FILES["file"]))
{

    $file = $_FILES["file"];
    $nombre = $file["name"];
    $tipo = $file["type"];
    $ruta_provisional = $file["tmp_name"];
    $size = $file["size"];
    $dimensiones = getimagesize($ruta_provisional);
    $width = $dimensiones[0];
    $height = $dimensiones[1];

    $carpeta = "../../assets/img/imgs/alumnos/";
if (size>1048) {
    echo "<script>alert('La imagen es muy pesada para el servidor, las dimensiones recomendadas son ancho 113px y alto 151px y con un peso menor a 1mb o 1024kb');</script>";
}else{
    if ($tipo != 'image/jpg' && $tipo != 'image/jpeg')
    {
      echo false; 
    }
    else
    {
        $src = $carpeta.$nombre;
        $r=move_uploaded_file($ruta_provisional,$src);
        var_dump($r);
    }
}
}
?>