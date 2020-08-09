<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h1 class="box-title">Usuarios y permisos</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url()?>/AdministrationController/validateFormData" method="POST"
                            encname="multipart/form-data" class="mt-3 form-horizontal">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Nombre</label>
                                    <input type="text" name="nombre" class="form-control" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Apellido paterno</label>
                                    <input type="text" name="apellidoPaterno" class="form-control" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Apellido materno</label>
                                    <input type="text" name="apellidoMaterno" class="form-control">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Fecha de nacimiento</label>
                                    <input type="date" name="fechaNacimiento" class="form-control" maxlength="10"
                                        required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Edad</label>
                                    <input type="number" name="edad" min="18" value="18" max="100" class="form-control"
                                        required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>RFC</label>
                                    <input type="text" name="RFC" class="form-control" maxlength="15">
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Teléfono</label>
                                    <input type="tel" name="telefono" class="form-control" maxlength="10" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Experiencia</label>
                                    <select name="experiencia" class="form-control">
                                        <option value="0">No</option>
                                        <option value="1">Sí</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Nombre de usuario</label>
                                    <input type="text" name="nombreUsario" class="form-control" minlength="5" maxlength="30" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Contraseña</label>
                                    <input type="password" name="contrasena" class="form-control" minlength="8" maxlength="30"
                                        required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Vuelve a escribir la contraseña</label>
                                    <input type="password" name="" class="form-control" minlength="8" maxlength="30" required>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label>Puesto asignado</label>
                                    <select name="puesto" class="form-control">
                                        <option value="Supervisión de Operaciones">Operario</option>
                                        <option value="Gerente de Operaciones">Gerente de Operaciones</option>
                                        <option value="Supervisión de Operaciones">Supervisión de Operaciones</option>
                                        <option value="Supervisión de Operaciones">Supervisión de Operaciones</option>
                                        <option value="Supervisión de Operaciones">Asesor de Procesos</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Fecha ingreso</label>
                                    <input type="date" name="fechaIngreso" class="form-control" maxlength="10" required>
                                </div>
                            </div>
                            <hr>
                            <span><b>Información de dirección</b></span>
                            <hr>
                            <table class="table table-bordered">
                                <thead>
                                    <tr class="text-center">
                                        <td scope="col" width="20%">Calle</td>
                                        <td scope="col" width="20%">Fraccionamiento</td>
                                        <td scope="col" width="20%">Número</td>
                                        <td scope="col" width="15%">C.P.</td>
                                        <td scope="col" width="25%">País</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td scope="col"><input type="text" name="calle" class="form-control"
                                                maxlength="50" required></td>
                                        <td scope="col"><input type="text" name="fraccionamiento" class="form-control"
                                                maxlength="50" required></td>
                                        <td scope="col"><input type="text" name="numero" class="form-control"
                                                maxlength="5" required></td>
                                        <td scope="col"><input type="text" name="codigoPostal" class="form-control"
                                                maxlength="5" required></td>
                                        <td scope="col">
                                            <div class="col-sm-12">
                                                <select name="pais" class="custom-select">
                                                    <option value="México">México</option>
                                                    <option value="USA">Estados Unidos</option>
                                                    <option value="ESP">España</option>
                                                </select>
                                            </div>
                                        </td>
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
                                <tr >
                                    <th scope="col">Acciones</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido paterno</th>
                                    <th scope="col">Apellido materno</th>
                                    <th scope="col">Edad</th>
                                    <th scope="col">Fecha de nacimiento</th>
                                    <th scope="col">RFC</th>
                                    <th scope="col">Fecha ingreso</th>
                                    <th scope="col">Fecha egreso</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Calle</th>
                                    <th scope="col">Fraccionamiento</th>
                                    <th scope="col">Código postal</th>
                                    <th scope="col">Número</th>
                                    <th scope="col">País</th>
                                    <th scope="col">Experiencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $path = site_url();
                                    foreach ($people as $person) {
                                        echo "<tr >";
                                        echo "<td class='text-center'>
                                                <a class='btn btn-outline-info disabled' href='${path}/AdministrationController/processEditAdministrador/" . $person["id_personal"] . "'>&nbsp;&nbsp;Editar&nbsp;&nbsp;</a>
                                                <a class='btn btn-danger' href='${path}/AdministrationController/processDeleteAdministrador/" . $person["id_personal"] . "'>Eliminar</a>
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
                                        echo "<td >" . $person["telefono"] . "</td>";
                                        echo "<td >" . $person["calle"] . "</td>";
                                        echo "<td >" . $person["fraccionamiento"] . "</td>";
                                        echo "<td >" . $person["codigo_postal"] . "</td>";
                                        echo "<td >" . $person["numero"] . "</td>";
                                        echo "<td >" . $person["pais"] . "</td>";
                                        echo "<td >" . $hasExperience = ($person["experiencia"]) ? "Si" : "No" . "</td>";
                                        echo "</tr>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>