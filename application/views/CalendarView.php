<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h1 class="box-title font-weight-bold text-info">Calendario</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url()?>/CalendarController/validateFormData" method="POST"
                            enctype="multipart/form-data" class="mt-3 form-horizontal">
                            <div class="form-group row">
                                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Evento</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="text" name="evento" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha</label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="date" name="fecha" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha
                                    importante</label>
                                <div class="col-sm-9">
                                    <select name="fecha_importante" class="custom-select">
                                        <option selected=""></option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
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
                                    <th scope="col">Evento</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Fecha importante</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                            $path = site_url();
                            foreach ($events as $event) {
                                echo "<tr >";
                                echo "<td >" . $event["evento"] . "</td>";
                                echo "<td >" . $event["fecha"] . "</td>";
                                echo "<td >" . $isImportant = $event["fecha_importe"] ? "Si" : "No" . "</td>";;
                                echo "<td class='text-center'>
                                        <a class='btn btn-danger' href='${path}/CalendarController/processDeleteEvent/" . $event["id_calendario"] . "'>Eliminar</a>
                                      </td>"; 
                                echo "</tr>";
                            }
                        ?>
                                </body>
                        </table>
                    </div>
                </div>