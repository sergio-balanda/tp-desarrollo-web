<?php
    require_once '../conexion/conexion.php';
    date_default_timezone_set('America/Argentina/Buenos_Aires');
	
	$user = $_POST['num_doc'];
	$pass = md5($_POST['password']);
	$hoy = date("Y-m-d H:i:s");
    print_r($user);
print_r($pass);