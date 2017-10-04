<?php
    require_once '/conexion/control.php';
    $obj = new controlDB();

    date_default_timezone_set('America/Argentina/Buenos_Aires');
    setlocale(LC_ALL,"spanish");
    echo strftime("%A %d de %B del %Y");
    
    $order = isset($_GET['ordenar']);
    if($order=="ASC"){
        $datos=$obj->consultar("select m.fecha_entrada,fecha_salida,v.patente from mantenimiento m join vehiculo v on v.idVehiculo = m.idVehiculo order by m.fecha_salida DESC");
    }
    else{
        $datos=$obj->consultar("select m.fecha_entrada,fecha_salida,v.patente from mantenimiento m join vehiculo v on v.idVehiculo = m.idVehiculo order by m.fecha_entrada");
    }

?>

<h2>Agenda</h2>
   <span class="label label-danger">Cambiar segun pregunte al profee hay que, mostrar por vehiculo, y km cuando debe hacerse los controles sobre el vehiculo ejemplo a los tantos km cambio de aceite</span>
    <p class="text-right">
        ordenar por: 
        <a href="calendario_service.php?ordenar=ASC">fecha de salida</a>,
        <a href="calendario_service.php">fecha de entrada</a>
    </p>

    <hr/>
    <div class="col-lg-8 col-lg-offset-2">
        <div class="table-responsive container-fluid">
            <table class="table table-condensed table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Fecha entrada</th>
                        <th>Fecha salida</th>
                        <th>Vehiculo</th>
                    </tr>
                </thead>
                <tbody>
                  
                    <?php foreach($datos as $td){ ?>
                    <tr>
                        <td class="agenda-date" class="active">
                            <div class="dayofmonth"><h4><?php echo date("d", strtotime($td['fecha_entrada']));?></h4></div>
                            <div class="dayofweek"><?php echo strftime("%B",strtotime($td['fecha_entrada']));?></div>
                            <div class="shortdate text-muted"><?php echo date("Y", strtotime($td['fecha_entrada']));?></div>
                        </td>
                        <td>
                           <p><?php echo $td['fecha_salida'];?></p>
                        </td>
                        <td class="agenda-events">
                            <div class="agenda-event">
                                <p><?php echo $td['patente'];?></p>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                    
                </tbody>
            </table>
        </div>
    </div> 