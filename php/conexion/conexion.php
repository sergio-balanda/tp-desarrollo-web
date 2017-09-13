



<?php

$conexion = new mysqli("localhost","root","ciclon","logistica");

if( $conexion->connect_errno)
{
	printf("Fallo la conexion: %s\n" , $conexion->connect_errno);
	exit();
}


/*   FORMA PDO
try{
//instasear, 3 ARGUMENTOS, nombre de la bd,nombre de la base, usuario de la bd y contraseña
    $base=new PDO('mysql:host=localhost; dbname=logistica','root','');
    //echo 'ok';
    //para ver el tipo de error,reporta errores,y permite el usar ciertos metodos
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $base->exec("SET CHARACTER SET UTF8");
    
}catch(Exception $e){
    //devuel el error, despues sacar getMessage para que el usuari no vea el error
    //->accede al metodo
    die('Error' . $e->GetMessage() . ' ' . 'Linea: ' . $e->GetLine());

}finally{
    //vaciar memoria
    $base=null;
}
    
*/
?>
