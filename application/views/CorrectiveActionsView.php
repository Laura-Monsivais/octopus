<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
			<h1 class="box-title font-weight-bold text-info">Acciones Correctivas</h1>
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
           
                    <div class="card-body table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="thead-dark text-center">
                                <tr class="text-center">
                                            <th scope="col">Clave</th>
                                            <th scope="col">Version</th>
                                            <th scope="col">Fecha de creación</th>
                                            <th scope="col">Última actualización</th>
                                            <th scope="col">No conformidad</th>
                                            <th scope="col"><i class="fas fa-cogs"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $versioness = json_decode(json_encode($versiones), true);
                                            $path = site_url();
                                            foreach ($versioness as $version) {
                                                echo "<tr >";
                                                echo "<td >" . $version["clve_accion_cor"] . "</td>";
                                                echo "<td >" . $version["v_accion_cor"] . "</td>";
                                                echo "<td >" . $version["fecha_accion_cor"] . "</td>";
                                                echo "<td >" . $version["factual_accion_cor"] . "</td>";
                                                echo "<td >" . $version["desc_no_conf"] . "</td>";
                                                echo "<td><i class='fas fa-pencil-alt mr-2' type='button' data-toggle='modal' data-target='#edit-".$version['id_accion_cor']."'></i><i class='fas fa-trash-alt mr-2' type='button' id='btn_delete' data-id='".$version['id_accion_cor']."'></i></td>"; 
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                                <i class='btn btn-primary' data-toggle='modal' data-target='#add-modal'>Añadir</i>
                            </div>
                        </form>
                    </div>
                </div></div></div></div></div>
                
                
                
                <div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>

                            <div class="modal-body ">
                                <div class="col-md-12">
                                    <div class="box">
                                        <div class="box-header with-border ">
                                            <h1 class="box-title font-weight-bold text-info">Procedimiento de acciones correctivas</h1>
                                            <div class="card">
                                                <div class="card-body">
                                                    <form action="<?php echo base_url()?>index.php/CorrectiveActionsController/addAction" method="POST" >
                                                        <div class="col-md-4 mb-3"><label>ID:</label><br>
                                                        <?php 
                                                        $versioness = json_decode(json_encode($versiones), true);
                                                        $path = site_url();
                                                        foreach ($versioness as $version) {
                                                            echo "<input type='hidden' name='id_accion_cor' value='". $version['id_accion_cor'] ."'>";
                                                        }?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <span class="float-right">
                                                                    <label>Clave:</label>
                                                                    <input type="text" name="clve_accion_cor" value="R-AC-002" class="form-control" readonly><br>
                                                                    <label>Versión:</label>
                                                                    <input type="number" name="v_accion_cor" min="0" max="20" class="form-control" value="0"><br>
                                                                    <label>Fecha:</label>
                                                                    <input type="date" name="fecha_accion_cor" value="<?php echo date('Y') . '-' . date('m') . '-' . date('d'); ?>" class="form-control" readonly><br>
                                                                    <label>Fecha actualización:</label>
                                                                    <input type="date" name="factual_accion_cor" value="<?php echo date('Y') . '-' . date('m') . '-' . date('d'); ?>" class="form-control" readonly><br>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group"><label><b>Paso 0:</b></label>
                                                            <div class="form-row">
                                                                <div class="col-md-4 mb-3"><label>Descripción de la No conformidad:</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="desc_no_conf" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3"><label>Acciones realizadas después del problema:</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="accion_realizada" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3"><label>Controles existentes:</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="c_existente" rows="5"></textarea>
                                                                </div>
                                                            </div><br>
                                                            <div class="form-row">
                                                                <div class="col-md-6 mb-3"><label>Verificación de acciones de contención  y remediación:</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="v_ctrl_cyr" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-6 mb-3"><label>Monitoreo de acciones implementadas:</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="monitoreo" rows="5"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-md-4 mb-3"><label><b>Paso 1:</b><br> Definir el problema</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="problema" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3"><label><b>Paso 2:</b><br> Comprender el proceso</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="com_proceso" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3"><label><b>Paso 3:</b><br> Recolectar datos</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="recolec_dato" rows="5"></textarea>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-4 mb-3"><label><b>Paso 4:</b><br> Analizar los datos</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="analizar_dato" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3"><label><b>Paso 5:</b><br> Identificar las posibles causas</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="posible_causa" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3"><label><b>Paso 6:</b><br> Comprobar o verificar las causas</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="verif_causa" rows="5"></textarea>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-4 mb-3"><label><b>Paso 7:</b><br> Seleccionar solucion(es) a ser implementada(s)</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="sol_imple" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3"><label><b>Paso 8:</b><br> Implementar la(s) solucion(es)</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="impl_sol" rows="5"></textarea>
                                                                </div>
                                                                <div class="col-md-4 mb-3"><label><b>Paso 9:</b><br> Evaluar el/los efecto(s)</label><br>
                                                                    <textarea maxlength="500" class="form-control" name="eval_efe" rows="5"></textarea>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                            <div class="col-md-6 mb-3"><label><b>Paso 10:</b><br> Establecer los cambios</label><br>
                                                                <textarea maxlength="500" class="form-control" name="estbl_cambio" rows="5"></textarea>
                                                            </div>
                                                            <div class="col-md-6 mb-3"><label><b>Paso 11:</b><br> Registrar los aprendizajes y hacer el cierre de la no conformidad</label>
                                                                <textarea class="form-control" name="aprend_cierre" rows="5"></textarea>
                                                            </div>
                                                                <div class="col-md-6 mb-3"><label><br> Realizado por.</label>
                                                                    <textarea class="form-control" name="realizado_por" rows="5">
                                                                        <?php 
                                                                            echo $this->session->userdata("usuario");
                                                                        ?>
                                                                    </textarea>
                                                                </div>
                                                            </div><br>
                                                            <div class="row">
                                                                <div class="col-md-12 mb-3"><label>Validado por:<br /></label><select class="form-control" name="validado_por">
                                                                    <optgroup label="This is a group">
                                                                        <option value="12" selected>Seleccionar opción</option>
                                                                            <?php 
                                                                                $persona = json_decode(json_encode($personal), true);
                                                                                $path = site_url();
                                                                                foreach ($persona as $person) {
                                                                                    echo '<option value="' . $person["id_personal"] . '">' . $person["nombre"] . '</option>';
                                                                                }
                                                                            ?>
                                                                    </optgroup>
                                                                </select></div>
                                                            </div>
                                                            <input type="submit" class="btn btn-primary" id="insertar" value="Añadir">
                                                        </div>
                            
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <?php

                        $versioness = json_decode(json_encode($versiones), true);
                        $path = site_url();
                        foreach ($versioness as $version) {
                            echo '<div id="edit-' . $version['id_accion_cor'] . '" class="modal" tabindex="-1" role="dialog" aria-hidden="true">';
                            echo '
                                    <div class="modal-dialog modal-dialog-centered modal-lg">                                
                                    <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Editar acciones correctivas</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                        <div class="modal-body">
                                        <div class="col-md-12">';

                            echo '
                                            <form method="post" action="' . base_url() . 'index.php/CorrectiveActionsController/editAction">
                                            <div class="row">
                                                <div class="col">
                                                    <span class="float-right">
                                                        <input type="hidden" name="id_accion_cor" value="'. $version['id_accion_cor'] .'">
                                                        <label>Clave:</label>
                                                        <input type="text" name="clve_accion_cor" value="R-AC-002" class="form-control" readonly><br>
                                                        <label>Versión:</label>
                                                        <input type="number" name="v_accion_cor" min="0" max="20" class="form-control" value="' . ($version['v_accion_cor'] + 1) . '" readonly><br>
                                                        <label>Fecha:</label>
                                                        <input type="date" name="fecha_accion_cor" value="' . $version['fecha_accion_cor'] . '" class="form-control" readonly><br>
                                                        <label>Fecha actualización:</label>
                                                        <input type="date" name="factual_accion_cor" value="' . date('Y') . '-' . date('m') . '-' . date('d') . '" class="form-control" readonly><br>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group"><label><b>Paso 0:</b></label>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3"><label>Descripción de la No conformidad:</label><br>
                                                        <textarea required="required" maxlength="500" class="form-control" name="desc_no_conf" rows="5">' . $version['desc_no_conf'] . '</textarea>
                                                    </div>
                                                    <div class="col-md-4 mb-3"><label>Acciones realizadas después del problema:</label><br>
                                                        <textarea required="required" maxlength="500" class="form-control" name="accion_realizada" rows="5">' . $version['accion_realizada'] . '</textarea>
                                                    </div>
                                                    <div class="col-md-4 mb-3"><label>Controles existentes:</label><br>
                                                        <textarea required="required" maxlength="500" class="form-control" name="c_existente" rows="5">' . $version['c_existente'] . '</textarea>
                                                    </div>
                                                </div><br>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3"><label>Verificación de acciones de contención  y remediación:</label><br>
                                                        <textarea required="required" maxlength="500" class="form-control" name="v_ctrl_cyr" rows="5">' . $version['v_ctrl_cyr'] . '</textarea>
                                                    </div>
                                                    <div class="col-md-6 mb-3"><label>Monitoreo de acciones implementadas:</label><br>
                                                        <textarea required="required" maxlength="500" class="form-control" name="monitoreo" rows="5">' . $version['monitoreo'] . '</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4 mb-3"><label><b>Paso 1:</b><br> Definir el problema</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="problema" rows="5">' . $version['problema'] . '</textarea>
                                                </div>
                                                <div class="col-md-4 mb-3"><label><b>Paso 2:</b><br> Comprender el proceso</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="com_proceso" rows="5">' . $version['com_proceso'] . '</textarea>
                                                </div>
                                                <div class="col-md-4 mb-3"><label><b>Paso 3:</b><br> Recolectar datos</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="recolec_dato" rows="5">' . $version['recolec_dato'] . '</textarea>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4 mb-3"><label><b>Paso 4:</b><br> Analizar los datos</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="analizar_dato" rows="5">' . $version['analizar_dato'] . '</textarea>
                                                </div>
                                                <div class="col-md-4 mb-3"><label><b>Paso 5:</b><br> Identificar las posibles causas</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="posible_causa" rows="5">' . $version['posible_causa'] . '</textarea>
                                                </div>
                                                <div class="col-md-4 mb-3"><label><b>Paso 6:</b><br> Comprobar o verificar las causas</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="verif_causa" rows="5">' . $version['verif_causa'] . '</textarea>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-4 mb-3"><label><b>Paso 7:</b><br> Seleccionar solucion(es) a ser implementada(s)</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="sol_imple" rows="5">' . $version['sol_imple'] . '</textarea>
                                                </div>
                                                <div class="col-md-4 mb-3"><label><b>Paso 8:</b><br> Implementar la(s) solucion(es)</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="impl_sol" rows="5">' . $version['impl_sol'] . '</textarea>
                                                </div>
                                                <div class="col-md-4 mb-3"><label><b>Paso 9:</b><br> Evaluar el/los efecto(s)</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="eval_efe" rows="5">' . $version['eval_efe'] . '</textarea>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-6 mb-3"><label><b>Paso 10:</b><br> Establecer los cambios</label><br>
                                                    <textarea required="required" maxlength="500" class="form-control" name="estbl_cambio" rows="5">' . $version['estbl_cambio'] . '</textarea>
                                                </div>
                                                <div class="col-md-6 mb-3"><label><b>Paso 11:</b><br> Registrar los aprendizajes y hacer el cierre de la no conformidad</label>
                                                    <textarea required="required" class="form-control" name="aprend_cierre" rows="5">' . $version['aprend_cierre'] . '</textarea>
                                                </div>
                                                <div class="col-md-6 mb-3"><label><br> Realizado por.</label>
                                                    <textarea required="required" class="form-control" name="realizado_por" rows="5" readonly>
                                                ';

                            $user = json_decode(json_encode($usuario), true);
                            $path = site_url();
                            foreach ($user as $useri) {
                                echo $useri["id_personal"];
                            }
                            echo '
                                                </textarea>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-md-12 mb-3"><label>Validado por:<br /></label>
                                                    <select class="form-control" name="validado_por">
                                                        <optgroup label="Usuarios">' ;
                            $persona = json_decode(json_encode($personal), true);
                            $path = site_url();
                            if ($person['id_personal'] == $version['id_personal']) {
                                echo '<option selected value="' . $person["id_personal"] . '">' . $person["nombre"] . '</option>';
                            }
                            foreach ($persona as $person) {
                                if ($person['id_personal'] == $version['id_personal']) {
                                    echo '<option selected value="' . $person["id_personal"] . '">' . $person["nombre"] . '</option>';
                                } else {
                                    echo '<option value="' . $person["id_personal"] . '">' . $person["nombre"] . '</option>';
                                }
                            }
                            echo '
                                                        </optgroup>
                                                    </select></div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button class="btn btn-primary" type="submit">Guardar</button>
                                            </div>
                                        </div>
                                        </form>                                
                                        </div>
                                    </div>
                                </div>

                                ';
                        }
                        ?>






<script>
    $("tr td #btn_delete").click(function(ev) {
        ev.preventDefault();
        var id_accion_cor2 = $(this).attr('data-id');
        var self = this;
        Swal.fire({
            title: "¿Estás seguro?",
            text: "¡No podrás revertir esto!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Continuar",
            confirmButtonColor: "#d33",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url()?>index.php/CorrectiveActionsController/deleteAction",
                    data: {
                        "id_accion_cor2": id_accion_cor2
                    },

                    success: function() {
                        $(self).parents('tr').remove();
                        Swal("¡Eliminado!",
                            "El registro ha sido eliminado satisfactoriamente.",
                            "success"
                        )
                    },
                    statusCode: {
                        400: function(data) {
                            var json = JSON.parse(data.responseText);
                            Swal("ERROR",
                                json.msg,
                                "error"
                            )
                        }
                    }
                })
            }
        });
    });
</script>
