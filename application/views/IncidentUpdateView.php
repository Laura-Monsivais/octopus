<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h2 class="box-title font-weight-bold text-info">Actualizar Incidente</h2>
				<div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url() ?>/IncidentController/EditIncident" method="POST">
                <hr>
                <div class="text-right">
                    <?php 
                        $path = site_url();
                        echo "<a target='_blank' class='btn btn-outline-success' href='${path}/IncidentController/pdfdetails/'>Exportar a PDF</a>";
                    ?>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Clave</label>
                                <div class="col-sm-4">
                                    <input type="text" required class="form-control" readonly=»readonly» name="clave" value="<?php echo $data->clve_incidente; ?>">
                                </div>
                                <label class="col-sm-2 col-form-label">Versión</label>
                                <div class="col-sm-4">
                                    <input type="number" required min="0" max="20" class="form-control"  name="version"  value="<?php echo $data->v_incidente; ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha Inicial</label>
                                <div class="col-sm-4">
                                    <input type="text" required class="form-control" name="fecha_inicial" value="<?php echo $data->fecha_incidente;?>" readonly=»readonly»>
                                </div>
                                <label class="col-sm-2 col-form-label">Nueva Fecha</label>
                                <div class="col-sm-4">
                                    <input type="date" required class="form-control" name="nueva_fecha" value="<?php echo $data->fecha_registro;?>" >
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Incidencia</label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <textarea type="text" required class="form-control" rows="3"
                                        style="resize: none;" name="incidencia"><?php echo $data->incidencia;?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Medida correctora aplicada</label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <textarea type="text" required class="form-control" rows="3"
                                        style="resize: none;" name="medida" ><?php echo $data->medida;?></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Responsable</label>
                                <div class="col-sm-4">
                                    <select name="responsable" required class="form-control" value="<?php echo $data->responsable;?>" >
                                        <option> <?php echo $this->session->userdata("usuario"); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Realizó</label>
                                <div class="col-sm-4">
                                    <select name="realizo" required class="form-control" value="<?php echo $data->realizo;?>" >
                                        <option selected=""></option>
                                        <?php  
                                            if (isset($personas)) {
                                                foreach ($personas as $person) {
                                                    echo '<option value='.$person["id_personal"].'>' . $person["nombre"] . ' ' . $person["apellido_paterno"] . ' ' . $person["apellido_materno"] . '</option>';
                                                }
                                            }
                                    	?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Autorizó</label>
                                <div class="col-sm-4">
                                    <select name="id_personal" required class="form-control">
                                        <option selected=""></option>
										<?php  
                                             if (isset($personas)) {
                                                foreach ($personas as $person) {
                                                    echo '<option value='.$person["id_personal"].'>' . $person["nombre"] . ' ' . $person["apellido_paterno"] . ' ' . $person["apellido_materno"] . '</option>';
                                                }
                                            }
                                	    ?>
                                    </select>
                                </div>
                            </div>
							<input type="hidden" name="id_incidente" class="form-control" maxlength="10" value="<?php echo $data->id_incidente; ?>">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-outline-warning">Actualizar</button>
								<a class='btn btn-primary' href='<?php echo site_url()?>/IncidentController' >Regresar</a>
                            </div>
                        </form>
                    </div>
                </div>
                
                