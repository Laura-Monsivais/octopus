<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h1 class="box-title font-weight-bold text-info">Toma de asistencia</h1>
                <div class="card">
                    <div class="card-body table-responsive">
                    <hr>
                        <a class='btn btn-success' href='${path}/AssistanceController/takeAssistance/" . $person["id_personal"] . "'>Lista de todas las asitencias</a>
                    <hr>
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark text-center">
                                <tr>
                                    <th scope="col">Acción</th>
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
                            <tbody>
                                <?php 
                                    $path = site_url();
                                    foreach ($people as $person) {
                                        echo "<tr >";
                                        echo "<td class='text-center'>
                                                <a class='btn btn-outline-info' href='${path}/AssistanceController/setPersonId/" . $person["id_personal"] . "'>Tomar</a>
                                            </td>";
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