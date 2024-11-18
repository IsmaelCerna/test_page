
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Ingrese los datos</h5>
        <form id="frmUsuario">
            <div class="row mb-3">
                <label for="usuario" class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="usuario" name="usuario">
                </div>
            </div>
            <div class="row mb-3">
                <label for="clave" class="col-sm-2 col-form-label">Clave</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="clave" name="clave">
                </div>
            </div>
            <button type="button" id="guardar" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>

<script src="./../../controlador/js/contenido.js"></script>
<script src="lib/assets/js/jquery.min.js"></script>
<script src="lib/assets/config/frmCreate"></script>