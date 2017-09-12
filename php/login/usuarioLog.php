<?php 
   
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	
	$user = $_POST['usuario'];
	$pass = $_POST['pass'];
	$hoy = date("Y-m-d H:i:s");
	
	
	require_once '../conexion/conexion.php';

	
	$ingreso = "SELECT idUsuario,nombre FROM usuario u WHERE u.num_doc = '".$user."' and u.password = '".$pass."'";
	
	$result2 = mysqli_query($conexion,$ingreso);
	$fila = mysqli_fetch_array($result2);
	//$id_usuario = $fila['id']; ----< por si hay auditoria
	$nombre_usuario = $fila['nombre'];
	
	if( mysqli_affected_rows($conexion)==1 )
	{
		session_start();
		$_SESSION['usuario']=$nombre_usuario;
		//mysqli_query($link,"UPDATE usuario SET ult_ing = '".$hoy."' WHERE id = ".$id_usuario.";" ); -----> graba la auditoria
        header('Location:../index.php');
        
	}
	else 
	{
		session_start();
		$_SESSION['error'] = "Usuario no Existe";
		header('Location:../../html/login.html');
	}
?>
