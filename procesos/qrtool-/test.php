<?php
////obtengo la variable
$img = $_POST['qr'];

echo "<img src='".$img."'>";

//limpiesa para base64
$img = str_replace('data:image/png;base64,','',$img);
$img = str_replace(' ', '+',$img);
$fileData = base64_decode($img);

//guardo fichero para ser procesado
$fileName= "../../assets/img/temp/qr-temp.png";
file_put_contents($fileName,$fileData);
 // audio de confirmacion
//echo "<embed style='display: none;' src='../../assets/sonido/beep1.mp3' autostart='true' bucle='true'/>";
//echo "<embed style='display: none;' src='../../assets/sonido/beep2.mp3' autostart='true' bucle='true'/>";

?>
