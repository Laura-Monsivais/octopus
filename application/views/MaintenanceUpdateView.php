<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h1 class="box-title font-weight-bold text-info">Actualizar Mantenimiento</h1>
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url() ?>/MaintenanceController/ActualizarMantenimiento"
                            method="POST" class="needs-validation" novalidate>
                            <div class="form-group text-right" style="flex-direction:column;justify-content: flex-end;">

                                <a class='btn btn-light'
                                    href='<?php echo site_url()?>/MaintenanceController/indexMtto/'>x</a>
                            </div>
                            <input type="hidden" id="id_mantenimiento" name="id_mantenimiento"
                                value="<?php echo $data->id_mantenimiento; ?>">
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="validationCustom01">Equipo</label>
                                    <input type="text" class="form-control" name="nameequipo" placeholder="Equipo"
                                        readonly="readonly">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Clave</label>
                                    <input type="text" class="form-control" name="cl" placeholder="Nombre" required
                                        value="<?php echo $data->clave; ?>">
                                    <div class="invalid-feedback">
                                        Completa Nombre.
                                    </div>
                                </div>

                                <div class="col-md-5 mb-3">
                                     <label for="validationCustom02">Tipo de Mantenimiento</label>
                                     <select name="mtto" class="custom-select"  value="<?php echo $data->tipo; ?>">
                                         <option selected="Lavado">Lavado</option>
                                         <option value="Desinfección y Cloración">Desinfección y Cloración</option>
                                         <option value="Verificación/Corrección">Verificación/Corrección</option>
                                         <option value="Calibración">Calibración</option>
										 <option selected="Control de Plagas">Control de Plagas</option>
                                         <option value="Fumigación">Fumigación</option>
                                         <option value="Análisis del Agua">Análisis del Agua</option>
                                     </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="validationCustom03">Observación</label>
                                    <input type="text" class="form-control" name="obs" placeholder="Observación"
                                        value="<?php echo $data->observacion; ?>">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Fecha de Entrada</label>
                                    <input type="date" class="form-control" name="fechaE" required
                                        value="<?php echo $data->fecha_inicio; ?>">
                                    <div class="invalid-feedback">
                                        Completa Fecha de Entrada.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="validationCustom05">Fecha de Salida</label>
                                    <input type="date" class="form-control" name="fechaS" required
                                        value="<?php echo $data->fecha_fin; ?>">
                                    <div class="invalid-feedback">
                                        Completa Fecha de Salida.
                                    </div>
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
