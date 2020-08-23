<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h2 class="box-title font-weight-bold text-info">Incidente</h2>

                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fecha</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                                <label class="col-sm-3 col-form-label">Incidencia</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Medida correctora aplicada</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                                <label class="col-sm-3 col-form-label">Responsable (Firma)</label>
                                <div class="col-sm-3">
                                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                                </div>
                            </div>
                        

                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-info">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body table-responsive text-center">

                        <div>
                            <input type="search" id="search-input" class="form-control"
                                placeholder="Filitar por cualquier elemento visible en la tabla"
                                aria-controls="tbllistado">
                        </div>
                        <hr>
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Incidencia</th>
                                    <th scope="col">Medida correctora aplicada</th>
                                    <th scope="col">Responsable (Firma)</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                <?php 
                                    $path = site_url();
                                    foreach ($incidentes as $incidente) {
                                        echo "<tr >";
                                        echo "<td >" . $incidente["fecha"] . "</td>";
                                        echo "<td >" . $incidente["incidencia"] . "</td>";
                                        echo "<td >" . $incidente["medida_correctora_aplicada"] . "</td>";
                                        echo "<td >" . $incidente["id_personal"] . "</td>";
                                        echo "<td class='text-center'>
                                        <a class='btn btn-outline-success' href='${path}/IncidentController/generatePDF/" . $incidente["id_incidente"] . "'>PDF</a>
                                      </td>"; 
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            <script>
                $(document).ready(function() {
                    $("#search-input").on("keyup", function() {
                        var value = $(this).val().toLowerCase();
                        $("#table-body tr").filter(function() {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>