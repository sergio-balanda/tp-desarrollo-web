<?php 
	
	require '../conexion/conexion.php';

	//consuta sql con marcadores que son los q tienen : son un alias
    $consulta="SELECT * FROM USUARIO WHERE NUM_DOC = :num_doc and PASSWORD= :pass";
    
    //preparo la consulta creo varible nueva igualo a la conexion de conexion.php -> llama a la funcion prepare
    $resultado=$conexion->prepare($consulta);

    //recato los datos del form
    //html entities combierte simbolos,add no tiene encuenta simbolos como _
    $num=htmlentities(addslashes($_POST["usuario"]));
    $password=htmlentities(addslashes($_POST["pass"]));

    //identificar marcadores con parametros bindvalue, que el valor del campo se identifique con el marcador
    $resultado->bindValue(":num_doc",$num);
    $resultado->bindValue(":pass",$password);
    
    //ejecutar instruccion sql
    $resultado->execute();
    $userRow=$resultado->fetch(PDO::FETCH_ASSOC);
    //para saber si hay un usurio,rowCount() devulve un numero de registro de la tabla usuario
    $registros=$resultado->rowCount();
    if($registros != 0){
        //inicio seccion
        session_start();
        //guardo 
        $_SESSION["usuario"]=$userRow["nombre"];
        header("location:usuarios.php");
    }else{
        header("Location:../");
    }

?>
        
