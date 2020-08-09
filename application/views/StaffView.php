<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h1 class="box-title">Personal
                </h1>
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" novalidate 
                        action="<?php echo site_url()?>/StaffController/AgregarPersonal" method="POST">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nombre</label>
                                    <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="Nombre"
                                        required>
                                    <div class="invalid-feedback">
                                        Completa Nombre.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom02">Apellido Paterno</label>
                                    <input type="text" name="last_name" class="form-control" id="validationCustom02"
                                        placeholder="Apellido Paterno" required>
                                    <div class="invalid-feedback">
                                        Completa Apellido Paterno.
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom02">Apellido Materno</label>
                                    <input type="text" name="mother_last_name" class="form-control" id="validationCustom02"
                                        placeholder="Apellido Materno" required>
                                    <div class="invalid-feedback">
                                        Completa Apellido Materno.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom02">Edad</label>
                                    <input type="number" name="age" class="form-control" id="validationCustom02" placeholder="Edad"
                                        required>
                                    <div class="invalid-feedback">
                                        Completa Edad.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom02">Fecha de Nacimiento</label>
                                    <input type="date" name="birthdate" class="form-control" id="validationCustom03"
                                        placeholder="Fecha de nacimiento" required>
                                    <div class="invalid-feedback">
                                        Completa Fecha de Nacimiento.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom03">RFC</label>
                                    <input type="text" name="RFC" class="form-control" id="validationCustom03" placeholder="RFC"
                                        required>
                                    <div class="invalid-feedback">
                                        Completa RFC.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Fecha de Ingreso</label>
                                    <input type="date" name="in_Date" class="form-control" id="validationCustom03"
                                        placeholder="Fecha de Ingreso" required>
                                    <div class="invalid-feedback">
                                        Completa Fecha de Ingreso.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom02">Fecha de Egreso</label>
                                    <input type="date" name="egress_Date" class="form-control" id="validationCustom03"
                                        placeholder="Fecha de Egreso" required>
                                    <div class="invalid-feedback">
                                        Completa Fecha de Egreso.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Usuario</label>
                                    <input type="text" name="user" class="form-control" id="validationCustom04"
                                        placeholder="Usuario" required>
                                    <div class="invalid-feedback">
                                        Completa Stock.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Contraseña</label>
                                    <input type="text" name="password" class="form-control" id="validationCustom04"
                                        placeholder="Contraseña" required>
                                    <div class="invalid-feedback">
                                        Completa Stock.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Teléfono</label>
                                    <input type="number" name="phone" class="form-control" id="validationCustom04"
                                        placeholder="Teléfono" required>
                                    <div class="invalid-feedback">
                                        Completa Teléfono.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Calle</label>
                                    <input type="text" name="street" class="form-control" id="validationCustom04" placeholder="Calle"
                                        required>
                                    <div class="invalid-feedback">
                                        Completa Calle.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Fraccionamiento</label>
                                    <input type="text" name="fracc" class="form-control" id="validationCustom04"
                                        placeholder="Fraccionamiento" required>
                                    <div class="invalid-feedback">
                                        Completa Fraccionamiento.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Código Postal</label>
                                    <input type="text" name="postal_Code" class="form-control" id="validationCustom04"
                                        placeholder="Código Postal" required>
                                    <div class="invalid-feedback">
                                        Completa Código Postal.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Número</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">#</span>
                                        </div>
                                        <input type="number" name="number" class="form-control" id="validationCustomUsername"
                                            placeholder="Número" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Completa Número.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCu"stom04">País</label>
                                    <input type="text" name="country" class="form-control" id="validationCustom04" placeholder="País"
                                        required>
                                    <div class="invalid-feedback">
                                        Completa Código País.
                                    </div>
                                </div>

                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom05">Experiencia</label>
                                    <select name="experience" class="custom-select">
                                        <option selected="Experiencia"></option>
                                        <option value="ALTA">ALTA</option>
                                        <option value="MEDIA">MEDIA</option>
                                        <option value="BAJA">BAJA</option>
                                    </select>
                                </div>
                                <div class="col-md-1 mb-3 d-flex"
                                    style="flex-direction:column;justify-content: flex-end;">
                                    <div class="form-check">
                                        <input type="checkbox" name="status" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Estatus</label>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Fecha de Creación</label>
                                        <input type="date" name="creation_date" class="form-control" id="validationCustom03"
                                            placeholder="Fecha de Creación" required>
                                        <div class="invalid-feedback">
                                            Completa Fecha de Creación.
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="validationCustom02">Fecha de Actualización</label>
                                        <input type="date" name="update_date" class="form-control" id="validationCustom03"
                                            placeholder="Fecha de Actualización" required>
                                        <div class="invalid-feedback">
                                            Completa Fecha de Actualización.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit" >Guardar</button>
                            </div>
                        </form>

                        <script>
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
                                        <tr>
                                            <th></th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Apellido Paterno</th>
                                            <th scope="col">Apellido Materno</th>
                                            <th scope="col">Edad</th>
                                            <th scope="col">Fecha de Nacimiento</th>
                                            <th scope="col">RFC</th>
                                            <th scope="col">Fecha de Ingreso</th>
                                            <th scope="col">Fecha de Egreso</th>
                                            <th scope="col">Usuario</th>
                                            <th scope="col">Contraseña</th>
                                            <th scope="col">Teléfono</th>
                                            <th scope="col">Calle</th>
                                            <th scope="col">Fraccionamiento</th>
                                            <th scope="col">Código Postal</th>
                                            <th scope="col">Número</th>
                                            <th scope="col">País</th>
                                            <th scope="col">Experiencia</th>
                                            <th scope="col">Estatus</th>
                                            <th scope="col">Fecha de Creación</th>
                                            <th scope="col">Fecha de Actualización</th>
                                            <th scope="col"><i class="fas fa-cogs"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        $path = site_url();
                                        foreach ($personal as $person) {
                                            echo "<tr >";
                                            echo "<td class='text-center'>
                                                <a class='btn btn-outline-info disabled' href='${path}/StaffController/processEditAdministrador/" . $person["id_personal"] . "'>&nbsp;&nbsp;Editar&nbsp;&nbsp;</a>
                                                <a class='btn btn-danger' href='${path}/StaffController/processDeleteStaff/" . $person["id_personal"] . "'>Eliminar</a>
                                                </td>";
                                            echo "<td >" . $person["nombre"] . "</td>";
                                            echo "<td >" . $person["apellido_paterno"] . "</td>";
                                            echo "<td >" . $person["apellido_materno"] . "</td>";
                                            echo "<td >" . $person["edad"] . "</td>";
                                            echo "<td >" . $person["fecha_nacimiento"] . "</td>";
                                            echo "<td >" . $person["RFC"] . "</td>";
                                            echo "<td >" . $person["fecha_ingreso"] . "</td>";
                                            echo "<td >" . $person["fecha_egreso"] . "</td>";
                                            echo "<td >" . $person["usuario"] . "</td>";
                                            echo "<td >" . $person["contrasena"] . "</td>";
                                            echo "<td >" . $person["telefono"] . "</td>";
                                            echo "<td >" . $person["calle"] . "</td>";
                                            echo "<td >" . $person["fraccionamiento"] . "</td>";
                                            echo "<td >" . $person["codigo_postal"] . "</td>";
                                            echo "<td >" . $person["numero"] . "</td>";
                                            echo "<td >" . $person["pais"] . "</td>";
                                            echo "<td >" . $person["experiencia"] . "</td>";
                                            echo "<td >" . $person["estatus"] . "</td>";
                                            echo "<td >" . $person["fecha_creacion"] . "</td>";
                                            echo "<td >" . $person["fecha_actualizacion"] . "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
