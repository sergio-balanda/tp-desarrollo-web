<div class="row">
    <div class="col">
        <h3>Registrar nuevo usuario</h3>
    </div>
</div>
<form action="usuarios/registrar.php" method="post">
    <table class="table">
        <div class="col-xs-6">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Nombre...">
                </div>
                <div class="form-group">
                    <label for="doc">Tipo documento</label>
                    <input type="text" class="form-control" name="tipo_doc" placeholder="Tipo...">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="****">
                </div>
                <div class="form-group">
                    <label for="">Numero documento</label>
                    <input type="text" class="form-control" name="num_doc" placeholder="Numero...">
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="sel1">Rol</label>
                    <select class="form-control" id="sel1" name="rol">
                        <option value="chofer">chofer</option>
                        <option value="admin">admin</option>
                        <option value="supervisor">supervisor</option>
                        <option value="mecanico">mecanico</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label for="">Fecha nacimiento</label>
                    <input type="text" class="form-control" name="fecha_nacimiento" placeholder="2017-07-28">
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg">Crear</button>
            </div> 
    </table>
    
    <input type="hidden" name="funcion" value="insertar">
    
</form>
