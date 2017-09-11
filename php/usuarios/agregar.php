<!DOCTYPE html>
    
<html lang="es">
    
<head>
<title>Agregar</title>
<!--Estilos-->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../css/bootstrap.min.css" />
<link rel="stylesheet" href="../../css/estilos.css">
<link rel="stylesheet" href="../../css/fontello.css"/>
</head>
    
<body>
<!-- HEADER -->
<?php include("../plantillas/header.php");?>
<!-- HEADER -->

<div id="wrapper">

    <!-- Sidebar -->
    <?php include("../plantillas/sidebar.php");?>
    <!-- Sidebar -->

    <!-- Page content -->
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <!-- El contenido -->
                <?php include("form/crear.php");?>
                <!-- El contenido -->
                </div>
            </div>
        </div>
    </div>

</div>
    <!--Estilos-->
    <script src="../../js/jquery3.2.1.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/main.js"></script>
</body>
</html>
