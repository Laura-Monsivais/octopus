<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ProviderController/updateProvider" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Nombre completo</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="UName" class="form-control" maxlength="50" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo</label>
                        <div class="col-sm-9">
                            <select name="UType" class="custom-select">
                                <option selected=""></option>
                                <option value="Físico">Físico</option>
                                <option value="Moral">Moral</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Preferible</label>
                        <div class="col-sm-9">
                            <select name="UPreferential" class="custom-select">
                                <option selected=""></option>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Teléfono</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="tel" name="UPhone" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Correo electrónico</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="email" name="UEmail" class="form-control" maxlength="50" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Dirección</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="UAddress" class="form-control" maxlength="100" required>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id_proveedor" class="form-control" maxlength="10" value="<?php echo $data->id_proveedor; ?>">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-info">Actualizar</button> 
                        <a class='btn btn-primary' href='<?php echo site_url()?>/ProviderController' >Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>