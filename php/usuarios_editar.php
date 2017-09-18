<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
            header("Location:../html/login.html");
    }       
?>
<!DOCTYPE html>
    
<html lang="es">
    
<head>
<title>Usuarios</title>
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
                <?php include("usuarios/editar.php");?>    
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