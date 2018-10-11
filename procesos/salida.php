<?php
session_start();
salir();

function salir()
{
	unset($_SESSION['id_u']);
	unset($_SESSION['sesiones']);
	unset($_SESSION['EXPIRACION']);
	session_destroy();
	header('Location: ../');
}


?>