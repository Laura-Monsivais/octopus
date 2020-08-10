<div class="page-wrapper">
<div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h1 class="box-title font-weight-bold text-info">Importar/descargar archivos</h1>
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Título</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo de documento</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected="HACCP">HACCP</option>
                                <option value="POES">POES</option>
                                <option value="BPDM">BPDM</option>
                                <option value="Fichas Técnicas">Fichas técnicas</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Cargar documento</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" name="fileImagen">
                            </div>
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
                            <th scope="col">Nombre</th>
                            <th scope="col">Ruta</th>
                            <th scope="col">Tipo de documento</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php 
                        $archivos = json_decode(json_encode($listaArchivos), true);
                        $path = site_url();
                        foreach ($archivos as $archivo) {
                            echo "<tr >";
                            echo "<td >" . $archivo["nombre_archivo"] . "</td>";
                            echo "<td >" . $archivo["ruta"] . "</td>";
                            echo "<td >" . $archivo["categoria"] . "</td>";
                            echo "<td class='text-center'>
                                <a class='btn btn-success' href='${path}/ImportFileController/descargarArchivo/" . $archivo["ruta"] . "'>Descargar</a>
                                <a class='btn btn-outline-danger' href='${path}/ImportFileController/eliminarArchivoActual/" . $archivo["id_archivo"] . "'>Eliminar</a>
                            </td>"; 
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>