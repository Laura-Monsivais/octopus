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

                                 <a class='btn btn-light' href='<?php echo site_url()?>/EquipmentController'>x</a>
                             </div>
                             <div class="form-row">
                                 <div class="col-md-3 mb-3">
                                     <label for="validationCustom01">Equipo</label>
                                     <input type="text" class="form-control" name="nameequipo" placeholder="Equipo"
                                         readonly="readonly">
                                 </div>
                                 <div class="col-md-4 mb-3">
                                     <label for="validationCustom01">Clave</label>
                                     <input type="text" class="form-control" name="cl" placeholder="" required>
                                     <div class="invalid-feedback">
                                         Completa Nombre.
                                     </div>
                                 </div>
                                 <div class="col-md-5 mb-3">
                                     <label for="validationCustom02">Tipo de mantenimiento</label>
                                     <select name="mtto" class="custom-select">
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
                                     <input type="text" class="form-control" name="obs" placeholder="">
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
         <div class="table-responsive-sm">
             <div class="col-md-12 mb-1">
                 <table class="table table-striped table-hover text-center">
                     <thead class="thead-dark">
                         <tr class="text-center">
                             <th scope="col">Clave</th>
                             <th scope="col">Tipo de Mantenimiento</th>
                             <th scope="col">Observación</th>
                             <th scope="col">Fecha de Entrada</th>
                             <th scope="col">Fecha de Salida</th>
                             <th scope="col"></th>
                             <th scope="col">
                             </th>
                         </tr>
                     </thead>

                     <tbody>
                         <?php 
                       $mttos = json_decode(json_encode($mttoList), true);
					   $path = site_url();
					   foreach ($mttos as $mtto) {
						   echo "<tr id=".$mtto["id_mantenimiento"].">";
          
							echo "<td data-target='cl'>" . $mtto["clave"] . "</td>";
                            echo "<td >" . $mtto["tipo"] . "</td>";
                            echo "<td >" . $mtto["observacion"] . "</td>";
							echo "<td >" . $mtto["fecha_inicio"] . "</td>";
							echo "<td >" . $mtto["fecha_fin"] . "</td>";
							
							echo "<td class='text-center'><a class='btn btn-danger' href='${path}/MaintenanceController/EliminarMtto/" .  $mtto["id_mantenimiento"] . "'>
							<i title='Eliminar' class='fas fa-trash' id='btn_delete'></i></a>
							</td>"; 
							
								echo "<td  class='text-center'><a class='btn btn-outline-primary' href='${path}/MaintenanceController/ModificarMantenimiento/" .  $mtto["id_mantenimiento"] . "'>
								<i title='Actualizar' class='fas fa-pencil-alt' ></i></a>
					
								
							</td>"; 
		
								}
							?>
                     </tbody>
                 </table>
             </div>
         </div>
         </table>




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
