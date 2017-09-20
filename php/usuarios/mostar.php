<?php
    require_once '/conexion/control.php';
    $obj = new controlDB();
        $obj = new controlDB();
    /*-------------Paginacion-------------------*/
    $tamagno_paginas=5;//cunatos registros x pag
    if(isset($_GET['pagina'])){
    if($_GET['pagina']==1){
            header("Location:usuarios.php");
        }else{
            $pag=$_GET['pagina'];
        }
    }else{
        $pag=1;//pagina actual
    }    
    
    
    $empezar_desde=($pag-1)*$tamagno_paginas;
    
    //consulta, variable el objeto y la funcion de la clase
    $datos=$obj->consultar("select * from usuario  order by nombre LIMIT $empezar_desde,$tamagno_paginas");
    //print_r($datos);
    
    /*-------------Paginacion-------------------*/
    $num_filas=count($obj->consultar("select * from usuario"));
    $total_paginas=ceil($num_filas/$tamagno_paginas);//ceil redondea paginas
    $sql_limite=$obj->consultar("select * from usuario"); 
?>
   

<div class="continer">
    <div class="row">
        <div class="col">
        <h1>Sidebar</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt voluptatem explicabo, esse, provident, a dolor, tempora nam ipsum nihil neque voluptatum eius optio? Eligendi placeat perspiciatis at culpa asperiores quaerat.
        </p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h3>Registrar empleado <a href="../php/usuarios_agregar.php" class="btn btn-primary">Nuevo</a></h3>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th  class="text-center">Nombre</th>
					<th  class="text-center">Documento</th>
					<th  class="text-center">Nro documento</th>
					<th  class="text-center">Nacimiento</th>
					<th  class="text-center">Rol</th>
					<th  class="text-center">Operacion</th>
				</thead>
               
                <?php foreach($datos as $td){ ?>
				<tr>
					<td><?php echo $td['nombre'];?></td>
					<td><?php echo $td['tipo_doc'];?></td>
					<td><?php echo $td['num_doc'];?></td>
					<td><?php echo $td['fecha_nacimiento'];?></td>
					<td><?php echo $td['rol'];?></td>
					<td class="text-center">
						<a href="usuarios_editar.php?id=<?php echo $td["idUsuario"]?>">
                            <button class="btn btn-info">Editar</button>
                        </a>
                        
                         <a href="usuarios/registrar.php?id=<?php echo $td["idUsuario"]?>&funcion=eliminar" class="btn btn-danger">Eliminar</button></a>
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
        for($i=1; $i <= $total_paginas; $i++){
        echo "<ul class='pagination'>
               <li><a href='?pagina=" . $i . "'>" . $i . "</a></li>
              </ul>";}
        ?>    
    </div>
</div>

<div class="row">
    <a href="pdf/exportarUsuario.php" class="btn btn-link" target="_blank" >Exportar</a>
</div>