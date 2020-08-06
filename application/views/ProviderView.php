<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Nombre completo</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                                <option value="Físico">Físico</option>
                                <option value="Moral">Moral</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Preferente</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                                <option value="Sí">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Teléfono</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="tel" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Correo</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="email" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Dirección</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="titImagen" class="form-control" maxlength="100" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Estado</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-info">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">Nombre completo</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Preferente</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Insumo</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>