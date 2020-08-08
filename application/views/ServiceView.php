<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                        $path = site_url();//'.$service['id_servicio'].'
                        foreach ($services as $service) {
                            echo "<tr id=".$service["id_servicio"].">";
                            if ($service["pendiente"] == 0) {
                               echo "<td class='text-center'><a class='btn btn-secondary' href='javascript:void()'>Pagar</a></td>"; 
                            } else {
                                echo "<td class='text-center'><a class='btn btn-primary' href='${path}/ServiceController/updateServiceByPayment/" .  $service["id_servicio"] . "'>Pagar</a></td>"; 
                            }
                            echo "<td >" . $service["tipo"] . "</td>";
                            echo "<td >" . $service["fecha_emision"] . "</td>";
                            echo "<td >" . $service["fecha_expiracion"] . "</td>";
                            echo "<td >" . $service["costo"] . "</td>";
                            echo "<td >" . $service["tipo_pago"] . "</td>";
                            echo "<td >" . $pendiente  = ($service["pendiente"] == 1) ? "Si" : "No" . "</td>";
                            echo "<td >" . $service["nombre"] . ' ' .  $service["apellido_paterno"] . ' ' .  $service["apellido_materno"] . "</td>";
                            echo "<td class='text-center'><a class='btn btn-danger' href='${path}/ServiceController/deleteService/" .  $service["id_servicio"] . "'>Eliminar</a>
                            </td>"; 
                            echo '<td>
                                  <a class="btn btn-primary" href="#" data-id="" data-role="update" id="btnUpdate">Editar</a>
                            </td>';
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Actualizar usuario administrador</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
            <form action="#" method="POST">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingresar nombre" id="nameUp" name="nameUp">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Ingresar nombre de usuario" id="usernameUp" name="usernameUp">
                </div>
                <div class="form-group">
                  <label class="form-check-label" for="can_viewUp" >Ver 
                    <input type="text" class="form-control" placeholder="Ingresar Si o No" id="can_viewUp" name="can_viewUp">
                  </label>
                  <label class="form-check-label" for="can_createUp" >Crear 
                    <input type="text" class="form-control" placeholder="Ingresar Si o No" id="can_createUp" name="can_createUp">
                  </label>
                  <label class="form-check-label" for="can_editUp" >Editar 
                    <input type="text" class="form-control" placeholder="Ingresar Si o No" id="can_editUp" name="can_editUp">
                  </label>
                  <label class="form-check-label" for="can_deleteUp" >Eliminar 
                    <input type="text" class="form-control" placeholder="Ingresar Si o No" id="can_deleteUp" name="can_deleteUp">
                  </label>
                  <label class="form-check-label" for="statusUp" >Estatus 
                    <input type="text" class="form-control" placeholder="Ingresar Activo o Inactivo" id="statusUp" name="statusUp">
                  </label>
                  <!--<input type="hidden" id="user_idUp">-->
                </div>
                
                <div class="mb-4"></div>
          </form>
      </div>
      <div class="modal-footer">
        <a href="#" id="saveChanges" class="btn btn-danger" >Actualizar</a>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>

    </div>
  </div>
</div>


<script>
  $(document).ready(function(){  
     $(document).on('click' , 'a[data-role=update]', function(event) {
      //var id = $(this).data('id'); 
      event.preventDefault();
      $('#myModal').modal('toggle'); 
      alert("hola");
      /*var name = $('#'+id).children('td[data-target=nameU]').text();
      var username = $('#'+id).children('td[data-target=usernameU]').text();
      var can_view = $('#'+id).children('td[data-target=can_viewU]').text();
      var can_create = $('#'+id).children('td[data-target=can_createU]').text();
      var can_edit = $('#'+id).children('td[data-target=can_editU]').text();
      var can_delete = $('#'+id).children('td[data-target=can_deleteU]').text();
      var status = $('#'+id).children('td[data-target=statusU]').text();

      $('#nameUp').val(name);
      $('#usernameUp').val(username);
      $('#can_viewUp').val(can_view);
      $('#can_createUp').val(can_create);
      $('#can_editUp').val(can_edit);
      $('#can_deleteUp').val(can_delete);
      $('#statusUp').val(status);
      $('#user_idUp').val(id);*/
         
   


    /*$('#saveChanges').click(function() {
      var user_idUp = $('#user_idUp').val();
      var nameUp = $('#nameUp').val();
      var usernameUp = $('#usernameUp').val();
      var can_viewUp = $('#can_viewUp').val();
      var can_createUp = $('#can_createUp').val();
      var can_editUp = $('#can_editUp').val();
      var can_deleteUp = $('#can_deleteUp').val();
      var statusUp = $('#statusUp').val();

      $.ajax({
        url : '../config/useradminmanagementUpdate.php',
        method : 'post',
        data : {user_idUp : user_idUp, nameUp : nameUp, usernameUp : usernameUp, can_viewUp : can_viewUp, can_createUp : can_createUp, can_editUp : can_editUp, can_deleteUp : can_deleteUp, statusUp : statusUp},
        success : function(response) {                    
                    alert("Se ha modificado correctamente el usuario");
                    $('#myModal').modal('toggle');
                    window.location.href = "../public/usermanagement.php";
                  }
      });
    });*/
  });

</script>