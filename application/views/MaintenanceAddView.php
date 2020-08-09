 <!-- /.modal mtto -->
 <div class="page-wrapper">
     <div class="col-md-12">
         <div class="box">
             <div class="box-header with-border ">
                 <h1 class="box-title font-weight-bold text-info">Mantenimiento</h1>
                 <div class="card">
                     <div class="card-body">
                         <form action="<?php echo site_url() ?>/MaintenanceController/AgregarMantenimiento"
                             method="POST" class="needs-validation" novalidate>
                             <div class="form-group text-right"
                                 style="flex-direction:column;justify-content: flex-end;">

                                 <a class='btn btn-light' href='<?php echo site_url()?>/EquipmentController/'>x</a>
                             </div>
                             <div class="form-row">
                                 <div class="col-md-3 mb-3">
                                     <label for="validationCustom01">Equipo</label>
                                     <input type="text" class="form-control" name="nameequipo" placeholder="Equipo"
                                         readonly="readonly">
                                 </div>
                                 <div class="col-md-4 mb-3">
                                     <label for="validationCustom01">Clave</label>
                                     <input type="text" class="form-control" name="cl" placeholder="Nombre" required>
                                     <div class="invalid-feedback">
                                         Completa Nombre.
                                     </div>
                                 </div>

                                 <div class="col-md-5 mb-3">
                                     <label for="validationCustom02">Tipo de Mantenimiento</label>
                                     <input type="text" class="form-control" name="mtto" placeholder="Descripción"
                                         required>
                                     <div class="invalid-feedback">
                                         Completa Tipo Mantenimiento.
                                     </div>
                                 </div>
                             </div>
                             <div class="form-row">
                                 <div class="col-md-12 mb-3">
                                     <label for="validationCustom03">Observación</label>
                                     <input type="text" class="form-control" name="obs" placeholder="Observación">
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
                             <div class="form-group text-right">
                                 <button class="btn btn-success	" type="submit" name="btn_guardar_mtto">Guardar</button>
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
