<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h1 class="box-title font-weight-bold text-info">Equipos</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url() ?>/EquipmentController/AgregarEquipo" method="POST"
                            class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nombre</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" name="nombreE"
                                        required >
                                    <div class="invalid-feedback">
                                        Completa Nombre.
                                         </div>
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
                                    <select name="mttoTF" class="custom-select" required>
                                        <option selected=""></option>
                                        <option value="1">Si</option>
                                        <option value="0">No</option>
                                    </select>
									<div class="invalid-feedback">
                                        Completa Fecha de Adquisición.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">Persona Asignada</label>
                                    <select name="id_personal" class="custom-select" id="validationCustom05" required>
									<div class="invalid-feedback">
                                        Completa Fecha de Adquisición.
                                    </div>
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
									<th scope="col" ></th>
									<th scope="col"></th>
									<th scope="col" style= "border-top-style: dotted;"></th>
									
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                        $equipos = json_decode(json_encode($equiposList), true);
                        $path = site_url();
                        foreach ($equipos as $equipo) {
                            echo "<tr id=".$equipo["id_equipo"].">";
                            if ($equipo["matenimiento"] == 0) {
                               echo "<td class='text-center'><a class='btn btn-secondary' href='javascript:void()'><i title='Terminado' class='fas fa-check-circle' '></i></a></td>";  
                            } else {
                                echo "<td class='text-center'><a class='btn btn-success' href='${path}/EquipmentController/EndMaintenance/" .  $equipo["id_equipo"] . "'><i title='Terminar Mantenimiento' class='fas fa-check-circle' ></a></td>"; 
							}
							echo "<td data-target='nombre'>" . $equipo["nombre_equipo"] . "</td>";
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
								echo "<td  class='text-center'><a class='btn btn-dark' href='${path}/EquipmentController/ModificarEquipo/" .  $equipo["id_equipo"] . "'>
								<i title='Actualizar' class='fas fa-pencil-alt' ></i></a>
								<td class='text-center'><a class='btn btn-info' href='${path}/MaintenanceController/indexMtto/" .  $equipo["id_equipo"] . "'>
								<i title='Mantenimiento' class='fas fa-align-center'></i></a>
								
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
