<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha de emisión</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="date" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha de expiración</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Costo</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">$</div>
                                    </div>
                                    <input type="text" name="titImagen" class="form-control" maxlength="10" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo de pago</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Pendiente</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Empleado</label>
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
                            <th scope="col">Tipo</th>
                            <th scope="col">Fecha de emisión</th>
                            <th scope="col">Fecha de expiración</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Tipo de pago</th>
                            <th scope="col">Pendiente</th>
                            <th scope="col">Empleado</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>