<?php
    //reanudo la session antes del contenido
    //rescato lo de la variable super global
    session_start();
    //compruebo,si se almaceno algo en la varible
    if(!isset($_SESSION["usuario"])){
            header("Location:../");
    }       
?>
<!DOCTYPE html>

<html lang="es">
    
<head>
<title>Index</title>
<!--Estilos-->
<?php include("plantillas/cssEstilos.php");?>
</head>
    
<body>
<!-- HEADER -->
<?php include("plantillas/header.php");?>
<!-- HEADER -->

<div id="wrapper">

    <!-- Sidebar -->
    <?php include("plantillas/sidebar.php");?>
    <!-- Sidebar -->

    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                <!-- El contenido -->
                <h3 class="">Bienvenido a la zona de administración</h3>
                <!-- El contenido -->
                </div>
            </div>
        </div>
    </div>

</div>
    <!--Estilos-->
    <?php include("plantillas/jsEstilos.php");?>
</body>
</html>