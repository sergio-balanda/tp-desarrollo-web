<?php 

$server = "localhost";
$usuario = "root";
$clave = "ciclon";

$link = mysqli_connect($server, $usuario, $clave, "logistica");
if (mysqli_connect_errno($link) ) 
{
	echo "Fallo al conectar a MySQL: " . mysqli_connect_error($link);
}
?>
