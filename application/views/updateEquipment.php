<!-- /.modal actualizar -->
<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h1 class="box-title font-weight-bold text-dark">Actualizar Equipo</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url() ?>/EquipmentController/ActualizarEquipo" method="POST"
                            class="needs-validation" novalidate>

                            <div class="form-group text-right" style="flex-direction:column;justify-content: flex-end;">

                                <a class='btn btn-light' href='<?php echo site_url()?>/EquipmentController'>x</a>
                            </div>
                            <input type="hidden" id="id_equipo" name="id_equipo"
                                value="<?php echo $data->id_equipo; ?>">
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nombre</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre"
                                        name="nombreE" required value="<?php echo $data->nombre_equipo; ?>">
                                    <div class="invalid-feedback">
                                        Completa Nombre.
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="validationCustom02">Descripción</label>
                                    <input type="text" class="form-control" id="validationCustom02"
                                        placeholder="Descripción" name="desc" required
                                        value="<?php echo $data->descripcion; ?>">
                                    <div class="invalid-feedback">
                                        Completa Descripción.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom03">Marca</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Marca"
                                        name="marca" required value="<?php echo $data->marca; ?>">
                                    <div class="invalid-feedback">
                                        Completa Marca.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom03">Modelo</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Modelo"
                                        name="modelo" required value="<?php echo $data->modelo; ?>">
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
                                            placeholder="Costo" aria-describedby="inputGroupPrepend" name="costo"
                                            required value="<?php echo $data->costo; ?>">
                                        <div class="invalid-feedback" name="costo">
                                            Completa Costo.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Stock</label>
                                    <input type="number" class="form-control" id="validationCustom04"
                                        placeholder="Stock" name="stock" required value="<?php echo $data->stock; ?>">
                                    <div class="invalid-feedback">
                                        Completa Stock.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">Fecha de Adquisición</label>
                                    <input type="date" class="form-control" id="validationCustom05" placeholder="Fecha"
                                        name="fechaA" required value="<?php echo $data->fecha_adquisicion; ?>">
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
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">Persona Asignada</label>
                                    <select name="id_personal" class="custom-select" id="validationCustom05" required>
                                        <option selected=""></option>
                                        <?php  
                                    $results = $this->EquipmentModel->selectAllPersonal();
                                    foreach ($results as $person) {
                                        echo '<option value='.$person["id_personal"].'>' . $person["nombre"] . ' ' . $person["apellido_paterno"] . ' ' . $person["apellido_materno"] . '</option>';
                                    }
                                ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group text-right" style="flex-direction:column;justify-content: flex-end;">
                                <button class="btn btn-outline-success" type="submit"
                                    name="btnActualizar">Actualizar</button>
                            </div>

                        </form>

                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

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
