<?php
    require '../conexion/control.php';
    //capturas los input hidden, request captura tanto get como post
    $funcion=$_REQUEST['funcion'];
    $id=$_REQUEST['id'];

    /*al eliminar no me interesan los campos nombre y password y demas
    para evitar errores se pone un if
    */

    if($funcion!="eliminar"){
    $nomb=$_POST['nombre'];
    $pass=$_POST['pass'];
    $doc=$_POST['num_doc'];
    $tipo=$_POST['tipo_doc'];
    $rol=$_POST['rol'];
    $fecha=$_POST['fecha_nacimiento'];
    $clave_md5=md5($pass);
        
    $cod=$_POST['cod'];    
    }
    //instancea de control
    $obj= new controlDB();

    
    
    //modificar value del input hidden
    if($funcion=="modificar"){
        $sql="update usuario set nombre='$nomb', password='$clave_md5', num_doc='$doc', tipo_doc='$tipo', rol='$rol',fecha_nacimiento='$fecha' where idUsuario=$cod";
    }
    
    //eliminar de usuarios.php
    else if($funcion=="eliminar"){
        $sql="delete from usuario where idUsuario='$id'";
    }

    else{
       $sql="insert into usuario(nombre,password,num_doc,tipo_doc,rol,fecha_nacimiento) 
       values('$nomb','$clave_md5','$doc','$tipo','$rol','$fecha')" ;   }  

    $obj->insertar($sql);
    header("Location:../usuarios.php");
    
?>
