<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ServiceController/insertService" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo</label>
                        <div class="col-sm-9">
                            <select name="tipo" class="custom-select">
                                <option selected="">Gas</option>
                                <option selected="">Agua</option>
                                <option selected="">Luz</option>
                                <option selected="">Internet</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha de emisión</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="date" name="fecha_emision" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha de expiración</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="date" name="fecha_expiracion" class="form-control" required>
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
                                    <input type="text" name="costo" class="form-control" maxlength="10" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo de pago</label>
                        <div class="col-sm-9">
                            <select name="tipo_pago" class="custom-select">
                                <option selected="">Efectivo</option>
                                <option selected="">Transferencia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Pendiente</label>
                        <div class="col-sm-9">
                            <select name="pendiente" class="custom-select">
                                <option selected=""></option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Empleado</label>
                        <div class="col-sm-9">
                            <select name="personal" class="custom-select">
                                <option selected=""></option>
                                <?php  
                                    $results = $this->ServiceModel->selectAllPersonal();
                                    foreach ($results as $employee) {
                                        echo '<option value='.$employee["id_personal"].'>' . $employee["nombre"] . ' ' . $employee["apellido_paterno"] . ' ' . $employee["apellido_materno"] . '</option>';
                                    }
                                ?>
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
                            <th scope="col"></th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Fecha de emisión</th>
                            <th scope="col">Fecha de expiración</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Tipo de pago</th>
                            <th scope="col">Pago Pendiente</th>
                            <th scope="col">Empleado</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $services = json_decode(json_encode($serviceList), true);
                        $path = site_url();
                        foreach ($services as $service) {
                            echo "<tr id=".$service["id_servicio"].">";
                            if ($service["pendiente"] == 0) {
                               echo "<td class='text-center'><a class='btn btn-secondary' href='javascript:void()'>Pagar</a></td>"; 
                            } else {
                                echo "<td class='text-center'><a class='btn btn-primary' href='${path}/ServiceController/updateServiceByPayment/" .  $service["id_servicio"] . "'>Pagar</a></td>"; 
                            }
                            echo "<td data-target='tipoU'>" . $service["tipo"] . "</td>";
                            echo "<td >" . $service["fecha_emision"] . "</td>";
                            echo "<td >" . $service["fecha_expiracion"] . "</td>";
                            echo "<td >" . $service["costo"] . "</td>";
                            echo "<td >" . $service["tipo_pago"] . "</td>";
                            echo "<td >" . $pendiente  = ($service["pendiente"] == 1) ? "Si" : "No" . "</td>";
                            echo "<td >" . $service["nombre"] . ' ' .  $service["apellido_paterno"] . ' ' .  $service["apellido_materno"] . "</td>";
                            echo "<td class='text-center'><a class='btn btn-danger' href='${path}/ServiceController/deleteService/" .  $service["id_servicio"] . "'>Eliminar</a>
                            </td>"; 

                            if ($service["pendiente"] == 1) {
                               echo "<td class='text-center'><a class='btn btn-primary' href='${path}/ServiceController/modifyService/" .  $service["id_servicio"] . "' >Editar</a>
                            </td>";  
                            } else {
                                    echo "<td class='text-center'><a class='btn btn-secondary' href='javascript:void()' >Editar</a>
                                    </td>"; 
                            }



                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>



