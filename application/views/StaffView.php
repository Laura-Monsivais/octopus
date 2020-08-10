<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h1 class="box-title font-weight-bold text-info">Toma de asistencia</h1>
                <div class="card">
                    <div class="card-body table-responsive text-center">
                        <a class="btn btn-success" href="<?php echo site_url()?>/AssistanceController">Tomar nueva
                            asistencia</a>
                        <hr>
                        <div>
                            <input type="search" id="search-input" class="form-control"
                                placeholder="Filitar por cualquier elemento visible en la tabla"
                                aria-controls="tbllistado">
                        </div>
                        <hr>
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido paterno</th>
                                    <th scope="col">Apellido materno</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Horario</th>
                                    <th scope="col">Fecha</th>
                                    <th scope="col">Falto</th>
                                    <th scope="col">Nota</th>
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                <?php 
                                    $path = site_url();
                                    foreach ($people as $person) {
                                        echo "<tr >";
                                        echo "<td >" . $person["nombre"] . "</td>";
                                        echo "<td >" . $person["apellido_paterno"] . "</td>";
                                        echo "<td >" . $person["apellido_materno"] . "</td>";
                                        echo "<td >" . $person["telefono"] . "</td>";
                                        echo "<td >" . $person["horario"] . "</td>";
                                        echo "<td >" . $person["fecha"] . "</td>";
                                        echo "<td >" . $assitence = $person["falto"] ? "Si"  : "No" . "</td>";
                                        echo "<td >" . $person["nota"] . "</td>";
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