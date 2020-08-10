
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ServiceController/updateService" method="POST" >
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo</label>
                        <div class="col-sm-9">
                            <select name="tipoU" class="custom-select" >
                                <option selected=""></option>
                                <option >Gas</option>
                                <option >Agua</option>
                                <option >Luz</option>
                                <option >Internet</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha de emisión</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="date" name="fecha_emisionU" class="form-control" maxlength="10"  value="<?php echo $data->fecha_emision; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha de expiración</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="date" name="fecha_expiracionU" class="form-control" value="<?php echo $data->fecha_expiracion; ?>">
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
                                    <input type="text" name="costoU" class="form-control" maxlength="10" value="<?php echo $data->costo; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo de pago</label>
                        <div class="col-sm-9">
                            <select name="tipo_pagoU" class="custom-select" >
                                <option selected=""></option>
                                <option >Efectivo</option>
                                <option >Transferencia</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Pendiente</label>
                        <div class="col-sm-9">
                            <select name="pendienteU" class="custom-select">
                                <option selected=""></option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Empleado</label>
                        <div class="col-sm-9">
                            <select name="personalU" class="custom-select">
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
                     <input type="hidden" name="idU" class="form-control" maxlength="10" value="<?php echo $data->id_servicio; ?>">
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-info">Actualizar</button> 
                        <a class='btn btn-primary' href='<?php echo site_url()?>/ServiceController' >Regresar</a>
                    </div>
                </form>
            </div>
        </div>

    

