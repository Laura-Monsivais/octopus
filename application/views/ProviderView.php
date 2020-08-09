<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ProviderController/AgregarProveedor" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Nombre completo</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="Name" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo</label>
                        <div class="col-sm-9">
                            <select name="Type" class="custom-select">
                                <option selected=""></option>
                                <option value="Físico">Físico</option>
                                <option value="Moral">Moral</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Preferible</label>
                        <div class="col-sm-9">
                            <select name="Preferential" class="custom-select">
                                <option selected=""></option>
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Teléfono</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="tel" name="Phone" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Correo electrónico</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="email" name="Email" class="form-control" maxlength="50" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Dirección</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="Address" class="form-control" maxlength="100" required>
                            </div>
                        </div>
                    </div>
                    <!-- <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <td scope="col" width="20%">Calle</td>
                                <td scope="col" width="15%">C.P.</td>
                                <td scope="col" width="20%">Municipio</td>
                                <td scope="col">Estado</td>
                                <td scope="col">País</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td scope="col"><input type="text" name="" class="form-control" required></td>
                                <td scope="col"><input type="text" name="" class="form-control" required></td>
                                <td scope="col"><input type="text" name="" class="form-control" required></td>
                                <td scope="col">
                                    <div class="col-sm-12">
                                        <select name="categoria" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </td>
                                <td scope="col">
                                    <div class="col-sm-12">
                                        <select name="categoria" class="custom-select">
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table> -->
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-info">Guardar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                    <div class="table-responsive">
                            <div class="row">
                                <div class="col-6">
                                    <div>		
                                        <input type="search" name="Search" class="form-control" placeholder="Buscar por nombre del proveedor" aria-controls="tbllistado">
                                    </div>
                                </div>	
                            </div>
                            <hr>
                            <table class="table table-striped table-bordered table-hover">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">Acciones</th>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Preferible</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Correo electrónico</th>
                                        <th scope="col">Dirección</th>
                                        <!-- <th scope="col">Calle</th>
                                        <th scope="col">C.P.</th>
                                        <th scope="col">Municipio</th>
                                        <th scope="col">Estado</th>
                                        <th scope="col">País</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $path = site_url();
                                        foreach ($providers as $person) {
                                            echo "<tr >";
                                            echo "<td class='text-center'>
                                                <a class='btn btn-outline-info disabled' href='${path}/ProviderController/processEditAdministrador/" . $person["id_proveedor"] . "'>&nbsp;&nbsp;Editar&nbsp;&nbsp;</a>
                                                <a class='btn btn-danger' href='${path}/ProviderController/processDeleteProvider/" . $person["id_proveedor"] . "'>Eliminar</a>
                                                </td>";
                                            echo "<td >" . $person["nombre"] . "</td>";
                                            echo "<td >" . $person["tipo"] . "</td>";
                                            echo "<td >" . $person["preferente"] . "</td>";
                                            echo "<td >" . $person["telefono"] . "</td>";
                                            echo "<td >" . $person["correo"] . "</td>";
                                            echo "<td >" . $person["direccion"] . "</td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
						</div>
					</div>
				</div>
			</div>
		</div>