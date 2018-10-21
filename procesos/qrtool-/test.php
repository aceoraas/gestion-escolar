<?php
////obtengo la variable
require_once "./qrcode-detector-decoder/lib/QrReader.php";

$img = $_POST['qr'];

//limpiesa para base64
$img      = str_replace('data:image/png;base64,', '', $img);
$img      = str_replace(' ', '+', $img);
$fileData = base64_decode($img);

//guardo fichero para ser procesado
$fileName = "./temp/qr-temp.jpg";
file_put_contents($fileName, $fileData);

$qrc = new QrReader('./temp/qr-temp.png');
$var = $qrc->text();
echo $var;

// audio de confirmacion
//echo "<embed style='display: none;' src='../../assets/sonido/beep1.mp3' autostart='true' bucle='true'/>";
//echo "<embed style='display: none;' src='../../assets/sonido/beep2.mp3' autostart='true' bucle='true'/>";
