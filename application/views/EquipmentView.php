<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h1 class="box-title">Equipos</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url() ?>/EquipmentController/AgregarEquipo" method="POST"
                            class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nombre</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre"
                                        required name="nombreE">
                                    <div class="invalid-feedback">
                                        Completa Nombre.
                                        ¿ </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="validationCustom02">Descripción</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Descripción" required name="desc">
                                    <div class="invalid-feedback">
                                        Completa Descripción.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom03">Marca</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Marca"
                                        required name="marca">
                                    <div class="invalid-feedback">
                                        Completa Marca.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom03">Modelo</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Modelo"
                                        required name="modelo">
                                    <div class="invalid-feedback">
                                        Completa Modelo.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Costo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">$</span>
                                        </div>
                                        <input type="number" class="form-control" id="validationCustomUsername"
                                            placeholder="Costo" aria-describedby="inputGroupPrepend" required
                                            name="costo">
                                        <div class="invalid-feedback">
                                            Completa Costo.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Stock</label>
                                    <input type="number" class="form-control" id="validationCustom04"
                                        placeholder="Stock" required name="stock">
                                    <div class="invalid-feedback">
                                        Completa Stock.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">Fecha de Adquisición</label>
                                    <input type="date" class="form-control" id="validationCustom05" placeholder="Fecha"
                                        required name="fechaA">
                                    <div class="invalid-feedback">
                                        Completa Fecha de Adquisición.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">¿Requiere Mantenimiento?</label>
                                    <select name="mttoTF" class="custom-select">
                                        <option selected=""></option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">Persona Asignada</label>
                                    <select name="id_personal" class="custom-select" id="validationCustom05">
                                        <option selected=""></option>
                                        <?php  
                                    $results = $this->EquipmentModel->selectAllPersonal();
                                    foreach ($results as $person) {
                                        echo '<option value='.$person["id_personal"].'>' . $person["nombre"] . ' ' . $employee["apellido_paterno"] . ' ' . $employee["apellido_materno"] . '</option>';
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-right" style="flex-direction:column;justify-content: flex-end;">
                                <button class="btn btn-outline-success" type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <script script>
                (function() {
                    'use strict';
                    window.addEventListener('load', function() {

                        var forms = document.getElementsByClassName('needs-validation');

                        var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                    event.preventDefault();
                                    event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                            }, false);
                        });
                    }, false);
                })();
                </script>
                <div class="card">
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark text-center">
                                <tr class="text-center">
                                    <th scope="col"></th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Costo</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Fecha de adquisición</th>
                                    <th scope="col">Mantenimiento</th>
                                    <th scope="col">Empleado Asignado</th>
                                    <td scope="col" colspan="2"><i class="fas fa-cogs" class="thead-dark "lass="d-flex align-items-center"></i></th</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                        $equipos = json_decode(json_encode($equiposList), true);
                        $path = site_url();
                        foreach ($equipos as $equipo) {
                            echo "<tr id=".$equipo["id_equipo"].">";
                            if ($equipo["matenimiento"] == 0) {
                               echo "<td class='text-center'><a class='btn btn-secondary' href='javascript:void()'>Terminar Mantenimiento</a></td>"; 
                            } else {
                                echo "<td class='text-center'><a class='btn btn-primary' href='${path}/EquipmentController/updateServiceByPayment/" .  $equipo["id_equipo"] . "'>Terminar</a></td>"; 
							}
							echo "<td data-target='nombreE'>" . $equipo["nombre"] . "</td>";
                            echo "<td >" . $equipo["descripcion"] . "</td>";
                            echo "<td >" . $equipo["marca"] . "</td>";
							echo "<td >" . $equipo["modelo"] . "</td>";
							echo "<td >" . $equipo["costo"] . "</td>";
                            echo "<td >" . $equipo["stock"] . "</td>";
                            echo "<td >" . $equipo["fecha_adquisicion"] . "</td>";
                            echo "<td >" . $mttoTF  = ($equipo["matenimiento"] == 1) ? "Si" : "No" . "</td>";
							echo "<td >" . $equipo["nombre"] . ' ' .  $equipo["apellido_paterno"] . ' ' .  $equipo["apellido_materno"] . "</td>";
							
							echo "<td class='text-center'><a class='btn btn-danger' href='${path}/EquipmentController/deleteService/" .  $equipo["id_equipo"] . "'>
							<i title='Eliminar' class='fas fa-trash' id='btn_delete'></i></a>
							</td>"; 
							if ($equipo["matenimiento"] == 1) {
								echo "<td class='text-center'><a class='btn btn-dark'>
							<ititle='Actualizar' class='fas fa-pencil-alt' type='button' data-toggle='modal' data-target='#signup-modal'><i>
							</td>"; 
							 } else {
									 
									}



									echo "</tr>";
								}
							?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </table>
                <!-- /.modal actualizar -->
                <form action="<?php echo site_url() ?>/EquipmentController/ModificarEquipo" method="POST"
                    class="needs-validation" novalidate>
                    <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="topModalLabel">Editar Equipo</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>
                                <div class="modal-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom01">Nombre</label>
                                                <input type="text" class="form-control" id="validationCustom01"
                                                    placeholder="Nombre" required name="nombreE">
                                                <div class="invalid-feedback">
                                                    Completa Nombre.
                                                </div>
                                            </div>
                                            <div class="col-md-8 mb-3">
                                                <label for="validationCustom02">Descripción</label>
                                                <input type="text" class="form-control" id="validationCustom02"
                                                    placeholder="Descripción" required name=desc>
                                                <div class="invalid-feedback">
                                                    Completa Descripción.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-2 mb-3">
                                                <label for="validationCustom03">Marca</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="Marca" required name="marca">
                                                <div class="invalid-feedback">
                                                    Completa Marca.
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="validationCustom03">Modelo</label>
                                                <input type="text" class="form-control" id="validationCustom03"
                                                    placeholder="Modelo" required name="modelo">
                                                <div class="invalid-feedback">
                                                    Completa Modelo.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustomUsername">Costo</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text" id="inputGroupPrepend">$</span>
                                                    </div>
                                                    <input type="number" class="form-control"
                                                        id="validationCustomUsername" placeholder="Costo"
                                                        aria-describedby="inputGroupPrepend" required>
                                                    <div class="invalid-feedback" name="costo">
                                                        Completa Costo.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom04">Stock</label>
                                                <input type="number" class="form-control" id="validationCustom04"
                                                    placeholder="Stock" required name="stock">
                                                <div class="invalid-feedback">
                                                    Completa Stock.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom05">Fecha de Adquisición</label>
                                                <input type="date" class="form-control" id="validationCustom05"
                                                    placeholder="Fecha" required name="fechaA">
                                                <div class="invalid-feedback">
                                                    Completa Fecha de Adquisición.
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom05">¿Requiere Mantenimiento?</label>
                                                <select name="mttoTF" class="custom-select">
                                                    <option selected=""></option>
                                                    <option value="1">Si</option>
                                                    <option value="0">No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="validationCustom05">Persona Asignada</label>
                                                <select name="id_personal" class="custom-select"
                                                    id="validationCustom05">
                                                    <option selected=""></option>
                                                    <?php  
                                    $results = $this->EquipmentModel->selectAllPersonal();
                                    foreach ($results as $person) {
                                        echo '<option value='.$person["id_personal"].'>' . $person["nombre"] . ' ' . $employee["apellido_paterno"] . ' ' . $employee["apellido_materno"] . '</option>';
                                    }
                                ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group text-right"
                                            style="flex-direction:column;justify-content: flex-end;">
                                            <button class="btn btn-outline-success" type="submit">Guardar</button>
                                        </div>
                                    </form>

                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <!-- /.modal mtto -->
                    <form action="<?php echo site_url() ?>/MaintenanceController/AgregarMantenimiento" method="POST"
                        class="needs-validation" novalidate>
                        <div id="signup-modal-mtto" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="topModalLabel">Mantenimiento</h4>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Clave</label>
                                                    <input type="text" class="form-control" name="cl"
                                                        placeholder="Nombre" required>
                                                    <div class="invalid-feedback">
                                                        Completa Nombre.
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="validationCustom02">Tipo de Mantenimiento</label>
                                                    <input type="text" class="form-control" name="mtto"
                                                        placeholder="Descripción" required>
                                                    <div class="invalid-feedback">
                                                        Completa Tipo Mantenimiento.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="validationCustom03">Observación</label>
                                                    <input type="text" class="form-control" name="obs"
                                                        placeholder="Observación">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom05">Fecha de Entrada</label>
                                                    <input type="date" class="form-control" name="fechaE" required>
                                                    <div class="invalid-feedback">
                                                        Completa Fecha de Entrada.
                                                    </div>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationCustom05">Fecha de Salida</label>
                                                    <input type="date" class="form-control" name="fechaS" required>
                                                    <div class="invalid-feedback">
                                                        Completa Fecha de Salida.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button class="btn btn-primary" type="submit"
                                                    name="btn_guardar_mtto">Guardar</button>
                                            </div>
                                        </form>

                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->


                        <script>
                        $("#btn_delete").click(function() {
                            Swal.fire({
                                title: "¿Estás seguro?",
                                text: "¡No podrás revertir esto!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonText: "Sí, eliminar!",
                                confirmButtonColor: "#d33",
                                cancelButtonText: "Cancelar",
                                cancelButtonColor: "#3085d6",
                                showLoaderOnConfirm: true,
                                preConfirm: () => {
                                    /* let id = this.hoshinGuidelines[index].id; */
                                    return axios //En esta parte va la petición Ajax
                                        .delete(route("Usuarios.destroy", {
                                            id: item.id
                                        }).url())
                                        .then((response) => {
                                            this.users_data.splice(this.users_items.indexOf(
                                                    item),
                                                1); //Remove the user of the list.
                                            return "eliminated";
                                        })
                                        .catch((error) => {
                                            Swal.showValidationMessage(
                                                `Se produjo un error: ${error}`);
                                        });
                                },
                                allowOutsideClick: () => !Swal.isLoading(),
                            }).then((result) => {
                                if (result.value) {
                                    Swal.fire("Eliminado!", "Equipo Eliminado.", "success");
                                }
                            });
                        });;
                        </script>

                        <script>
                        $("#btn_mtto").click(function() {
                            Swal.fire({
                                title: "¿Estás seguro?",
                                text: "¡No podrás revertir esto!",
                                icon: "warning",
                                showCancelButton: true,
                                confirmButtonText: "Sí, eliminar!",
                                confirmButtonColor: "#d33",
                                cancelButtonText: "Cancelar",
                                cancelButtonColor: "#3085d6",
                                showLoaderOnConfirm: true,
                                preConfirm: () => {
                                    /* let id = this.hoshinGuidelines[index].id; */
                                    return axios //En esta parte va la petición Ajax
                                        .delete(route("Usuarios.destroy", {
                                            id: item.id
                                        }).url())
                                        .then((response) => {
                                            this.users_data.splice(this.users_items.indexOf(
                                                    item),
                                                1); //Remove the user of the list.
                                            return "eliminated";
                                        })
                                        .catch((error) => {
                                            Swal.showValidationMessage(
                                                `Se produjo un error: ${error}`);
                                        });
                                },
                                allowOutsideClick: () => !Swal.isLoading(),
                            }).then((result) => {
                                if (result.value) {
                                    Swal.fire("Eliminado!", "Equipo Eliminado.", "success");
                                }
                            });
                        });;
                        </script>
