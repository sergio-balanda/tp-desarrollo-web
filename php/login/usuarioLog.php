<?php 
   session_start();
	date_default_timezone_set('America/Argentina/Buenos_Aires');
	
	$user = $_POST['usuario'];
	$pass = $_POST['pass'];
	$hoy = date("Y-m-d H:i:s");
	
	
	require_once '../conexion/conexion.php';

	//prepared statement
	$ingreso = $conexion->prepare("SELECT idUsuario,nombre
										FROM usuario
											WHERE num_doc = ? and password = ? ");
	
	$ingreso->bind_param("ss",$user,$pass);
	$ingreso->execute();
	
	// ejecucion de sentencia preparada
	$resultado = $ingreso->get_result();
	$fila = $resultado->fetch_assoc();

	//$id_usuario = $fila['id']; ----< por si hay auditoria
	$nombre_usuario = $fila['nombre'];
	//debug -- printf("%d",$resultado->num_rows)
	
	if( $resultado->num_rows==1 )
	{
		$_SESSION['usuario']=$nombre_usuario;
		//mysqli_query($link,"UPDATE usuario SET ult_ing = '".$hoy."' WHERE id = ".$id_usuario.";" ); -----> graba la auditoria
        header('Location:../index.php');
        
	}
	else 
	{
		$_SESSION['error'] = "Usuario no Existe";
		header('Location:../../html/login.html');
	}
?>
