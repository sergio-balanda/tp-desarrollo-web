<?php
    require_once '/conexion/control.php';
    $obj = new controlDB();
    
    $datos=$obj->consultar("select  m.tipo_vehiculo,m.fecha_entrada,m.repuestos,m.costo,u.nombre 
        from mantenimiento m 
        join usuario u on 
        u.idUsuario=m.idUsuario");
?>

<div class="continer">
    <div class="row">
        <div class="col">
            <h1>Zona de Mantenimiento</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Mantenimiento <a href="#" class="btn btn-primary">Nuevo</a></h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th  class="text-center">Mecanico</th>
					<th  class="text-center">Tipo Vehiculo</th>
					<th  class="text-center">Fecha entrada</th>
					<th  class="text-center">Repuestos</th>
					<th  class="text-center">Costo</th>
					<th  class="text-center">Operacion</th>
				</thead>
                <?php foreach($datos as $td){ ?>
				<tr>
					<td><?php echo $td['nombre'];?></td>
					<td><?php echo $td['tipo_vehiculo'];?></td>
					<td><?php echo $td['fecha_entrada'];?></td>
					<td><?php echo $td['repuestos'];?></td>
					<td><?php echo $td['costo'];?></td>
					<td class="text-center">
						<a href="#">
                            <button class="btn btn-info">Editar</button>
                        </a>
                        
                         <a href="#" class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
			    <?php } ?>   
             
			    
			</table>    
            </div>    
        </div>
    </div>
</div>

<div class="row">
    <div class="col">
        <?php
       
        ?>    
    </div>
</div>

<div class="row">
    <a href="#" class="btn btn-link" target="_blank" >Exportar</a>
</div>