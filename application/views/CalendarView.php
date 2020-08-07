<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Evento</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="titImagen" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="date" name="titImagen" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha importante</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead class="text-center">
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Personal</th>
                                <th scope="col">Puesto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td scope="col"><input type="checkbox" class="form-check-input"></td>
                                <td scope="col">
                                    <div class="col-sm-12">
                                        <select name="categoria" class="custom-select">
                                            <option selected=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </td>
                                <td scope="col"></td>
                            </tr>
                            <tr class="text-center">
                                <td scope="col"><input type="checkbox" class="form-check-input"></td>
                                <td scope="col">
                                    <div class="col-sm-12">
                                        <select name="categoria" class="custom-select">
                                            <option selected=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </td>
                                <td scope="col"></td>
                            </tr>
                        </tbody>
                    </table>
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
                            <th scope="col">Evento</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Fecha importante</th>
                            <th scope="col">Personas</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>