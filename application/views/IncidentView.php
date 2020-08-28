
<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h2 class="box-title font-weight-bold text-info">Incidente</h2>
				<div class="card">
                    <div class="card-body">
                        <form action="<?php echo site_url() ?>/IncidentController/InsertIncident" method="POST">
                <div class="text-right">
                    <?php 
                        $path = site_url();
                        echo "<a target='_blank' class='btn btn-outline-success' href='${path}/IncidentController/generateIncidentsPDF'>Exportar a PDF</a>";
                    ?>
                </div>
                <hr>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Clave</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" readonly=»readonly» name="clave" value="RDI-008">
                                </div>
                                <label class="col-sm-2 col-form-label">Versión</label>
                                <div class="col-sm-4">
                                    <input type="number" min="0" max="20" class="form-control"  name="version" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Fecha Inicial</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="fecha_inicial" value="<?php echo date("d/m/Y")?>" readonly=»readonly»>
                                </div>
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-4">
                                    <input type="hidden" class="form-control" name="nueva_fecha">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Incidencia</label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" rows="3"
                                        style="resize: none;" name="incidencia" ></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label">Medida correctora aplicada</label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" rows="3"
                                        style="resize: none;" name="medida"></textarea>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Responsable</label>
                                <div class="col-sm-4">
                                    <select name="responsable" class="form-control">
                                        <option> <?php echo $this->session->userdata("usuario"); ?></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label">Realizó</label>
                                <div class="col-sm-4">
                                    <select name="realizo" class="form-control">
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
                                    <select name="id_personal" class="form-control">
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
                                    <th>Clave</th>
                                    <th>Versión</th>
                                    <th>Fecha Inicial</th>
                                    <th>Nueva fecha</th>
                                    <th>Incidencia</th>
                                    <th>Medida</th>
                                    <th>Responsable</th>
                                    <th>Realizó</th>
                                    <th>Autorizó</th>
                                    <th colspan=3>Acciones</th>
                            </thead>
                            <tbody>
                                    <?php

                                    if(isset($incidentes)) {
                                        
                                        foreach($incidentes->result() as $row) {
                                            echo '
                                            <tr>
                                            <td>'.$row->clve_incidente.'</td>
                                            <td>'.$row->v_incidente.'</td>
                                            <td>'.$row->fecha_incidente.'</td>
                                            <td>'.$row->fecha_registro.'</td>
                                            <td>'.$row->incidencia.'</td>
                                            <td>'.$row->medida.'</td>
                                            <td>'.$row->responsable.'</td>
                                            <td>'.$row->realizo.'</td>
											<td>'.$row->id_personal.'</td>
											<td><a class="btn btn-warning"  href="'.site_url().'/IncidentController/UpdateIncident/'.$row->id_incidente.'">Editar</a></td>
											<td><a class="btn btn-danger"  href="'.site_url().'/IncidentController/deleteIncident/'.$row->id_incidente.'">Eliminar</a></td>
                                            <td><a target="_blank" class="btn btn-primary"  href="'.site_url().'/IncidentController/pdfdetails/'.$row->id_incidente.'">PDF</a></td>
                                            
                                            </tr>
                                            ';
                                        }
                                    }
									?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
