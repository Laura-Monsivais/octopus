<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h1 class="box-title">Acciones correctivas</h1>
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">

                <table class="table table-hover">
                    <thead class="thead-dark">
                        <tr>
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
                            echo "<td><i class='fas fa-pencil-alt mr-2' type='button' data-toggle='modal' data-target='#signup-modal' href='"echo base_url()"/index.php/CorrectiveActionsController/editAction/$version['id_accion_cor']'></i><i class='fas fa-trash' id='btn_delete'></i></td>"; 
                            echo "</tr>";
                        }
                    ?>
                    </tbody>
                </table>
                <i class='btn btn-primary' data-toggle='modal' data-target='#add-modal'>Añadir</i>



                <div id="add-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="topModalLabel">Editar Equipo</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>

                            <div class="modal-body">
                            <form action="<?php echo base_url()?>index.php/CorrectiveActionsController/addAction" method="POST" >
                            <div class="form-group"><label><b>Paso 0:</b></label>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3"><label>Descripción de la No conformidad:</label><br>
                                    <textarea maxlength="500" class="form-control" id="desc_no_conf" rows="5"></textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label>Acciones realizadas después del problema:</label><br>
                                    <textarea maxlength="500" class="form-control" id="accion_realizada" rows="5"></textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label>Controles existentes:</label><br>
                                    <textarea maxlength="500" class="form-control" id="c_existente" rows="5"></textarea>
                                </div>
                                </div><br>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3"><label>Verificación de acciones de contención  y remediación:</label><br>
                                    <textarea maxlength="500" class="form-control" id="v_ctrl_cyr" rows="5"></textarea>
                                </div>
                                    <div class="col-md-6 mb-3"><label>Monitoreo de acciones implementadas:</label><br>
                                    <textarea maxlength="500" class="form-control" id="monitoreo" rows="5"></textarea>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4 mb-3"><label><b>Paso 1:</b><br> Definir el problema</label><br>
                                    <textarea maxlength="500" class="form-control" id="problema" rows="5"></textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 2:</b><br> Comprender el proceso</label><br>
                                    <textarea maxlength="500" class="form-control" id="com_proceso" rows="5"></textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 3:</b><br> Recolectar datos</label><br>
                                    <textarea maxlength="500" class="form-control" id="recolec_dato" rows="5"></textarea>
                                </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4 mb-3"><label><b>Paso 4:</b><br> Analizar los datos</label><br>
                                    <textarea maxlength="500" class="form-control" id="analizar_dato" rows="5"></textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 5:</b><br> Identificar las posibles causas</label><br>
                                    <textarea maxlength="500" class="form-control" id="posible_causa" rows="5"></textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 6:</b><br> Comprobar o verificar las causas</label><br>
                                    <textarea maxlength="500" class="form-control" id="verif_causa" rows="5"></textarea>
                                </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4 mb-3"><label><b>Paso 7:</b><br> Seleccionar solucion(es) a ser implementada(s)</label><br>
                                    <textarea maxlength="500" class="form-control" id="sol_imple" rows="5"></textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 8:</b><br> Implementar la(s) solucion(es)</label><br>
                                    <textarea maxlength="500" class="form-control" id="impl_sol" rows="5"></textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 9:</b><br> Evaluar el/los efecto(s)</label><br>
                                    <textarea maxlength="500" class="form-control" id="eval_efe" rows="5"></textarea>
                                </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6 mb-3"><label><b>Paso 10:</b><br> Establecer los cambios</label><br>
                                    <textarea maxlength="500" class="form-control" id="estbl_cambio" rows="5"></textarea>
                                </div>
                                    <div class="col-md-6 mb-3"><label><b>Paso 11:</b><br> Registrar los aprendizajes y hacer el cierre de la no conformidad</label>
                                    <textarea class="form-control" id="aprend_cierre" rows="5"></textarea>
                                </div>
                                <div class="col-md-6 mb-3"><label><br> Realizado por.</label>
                                    <textarea class="form-control" id="realizadopor" rows="5">
                                    <?php 
                                        echo $this->session->userdata("usuario");
                                    ?>
                                    </textarea>
                                </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12 mb-3"><label>Validado por:<br /></label><select class="form-control">
                                            <optgroup label="This is a group">
                                                <option value="12" selected>Seleccionar opción</option>
                                                <?php 
                                                    $persona = json_decode(json_encode($personal), true);
                                                    $path = site_url();
                                                    foreach ($persona as $person) {
                                                        echo "<option>". $person["id_personal"] . "</option>";
                                                    }
                                                    ?>
                                            </optgroup>
                                        </select></div>
                                    </div>
                                    
                            </div>
                            <input type="submit" class="btn btn-primary" id="Guardar" value="Añadir">
                        </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->



                <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="topModalLabel">Editar Equipo</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>

                            <div class="modal-body">
                            <form>
                            <div class="form-group"><label><b>Paso 0:</b></label>
                                <div class="form-row">
                                    <div class="col-md-4 mb-3"><label>Descripción de la No conformidad:</label><br>
                                    <textarea maxlength="500" class="form-control" id="desc_no_conf2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["desc_no_conf"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label>Acciones realizadas después del problema:</label><br>
                                    <textarea maxlength="500" class="form-control" id="accion_realizada2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["accion_realizada"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label>Controles existentes:</label><br>
                                    <textarea maxlength="500" class="form-control" id="c_existente2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["c_existente"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                </div><br>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3"><label>Verificación de acciones de contención  y remediación:</label><br>
                                    <textarea maxlength="500" class="form-control" id="v_ctrl_cyr2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["v_ctrl_cyr"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-6 mb-3"><label>Monitoreo de acciones implementadas:</label><br>
                                    <textarea maxlength="500" class="form-control" id="monitoreo2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["clve_accion_cor"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-4 mb-3"><label><b>Paso 1:</b><br> Definir el problema</label><br>
                                    <textarea maxlength="500" class="form-control" id="problema2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["problema"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 2:</b><br> Comprender el proceso</label><br>
                                    <textarea maxlength="500" class="form-control" id="com_proceso2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["com_proceso"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 3:</b><br> Recolectar datos</label><br>
                                    <textarea maxlength="500" class="form-control" id="recolec_dato2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["recolec_dato"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4 mb-3"><label><b>Paso 4:</b><br> Analizar los datos</label><br>
                                    <textarea maxlength="500" class="form-control" id="analizar_dato2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["analizar_dato"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 5:</b><br> Identificar las posibles causas</label><br>
                                    <textarea maxlength="500" class="form-control" id="posible_causa2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["posible_causa"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 6:</b><br> Comprobar o verificar las causas</label><br>
                                    <textarea maxlength="500" class="form-control" id="verif_causa2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["verif_causa"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-4 mb-3"><label><b>Paso 7:</b><br> Seleccionar solucion(es) a ser implementada(s)</label><br>
                                    <textarea maxlength="500" class="form-control" id="sol_imple2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["sol_imple"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 8:</b><br> Implementar la(s) solucion(es)</label><br>
                                    <textarea maxlength="500" class="form-control" id="impl_sol2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["impl_sol"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-4 mb-3"><label><b>Paso 9:</b><br> Evaluar el/los efecto(s)</label><br>
                                    <textarea maxlength="500" class="form-control" id="eval_efe2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["eval_efe"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-6 mb-3"><label><b>Paso 10:</b><br> Establecer los cambios</label><br>
                                    <textarea maxlength="500" class="form-control" id="estbl_cambio2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["estbl_cambio"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                    <div class="col-md-6 mb-3"><label><b>Paso 11:</b><br> Registrar los aprendizajes y hacer el cierre de la no conformidad</label>
                                    <textarea class="form-control" id="aprend_cierre2" rows="5">
                                    <?php 
                                        $versioness = json_decode(json_encode($versiones), true);
                                        $path = site_url();
                                        foreach ($versioness as $version) {
                                            echo $version["aprend_cierre"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                <div class="col-md-6 mb-3"><label><br> Realizado por.</label>
                                    <textarea class="form-control" id="realizadopor2" rows="5">
                                    <?php 
                                        $user = json_decode(json_encode($usuario), true);
                                        $path = site_url();
                                        foreach ($user as $useri) {
                                            echo $useri["id_personal"];
                                        }
                                    ?>
                                    </textarea>
                                </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-md-12 mb-3"><label>Validado por:<br /></label><select class="form-control">
                                            <optgroup label="This is a group">
                                                <option value="12" selected>Seleccionar opción</option>
                                                <?php 
                                                    $persona = json_decode(json_encode($personal), true);
                                                    $path = site_url();
                                                    foreach ($persona as $person) {
                                                        echo "<option>". $person["id_personal"] .". ". $person["nombre"] . "</option>";
                                                    }
                                                    ?>
                                            </optgroup>
                                        </select></div>
                                    </div>
                                </div>
                            </form>

                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->



                <script>
                    $("#btn_delete").click(function() {
                        Swal.fire({
                            title: "¿Estás seguro?",
                            text: "¡No podrás revertir esto!",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Sí, eliminar!",
                            confirmButtonColor: "#d33",
                            cancelButtonText: "Cancelar",
                            cancelButtonColor: "#3085d6",
                            showLoaderOnConfirm: true,
                            preConfirm: () => {
                                /* let id = this.hoshinGuidelines[index].id; */
                                return axios //En esta parte va la petición Ajax
                                    .delete(route("Usuarios.destroy", {
                                        id: item.id
                                    }).url())
                                    .then((response) => {
                                        this.users_data.splice(this.users_items.indexOf(item), 1); //Remove the user of the list.
                                        return "eliminated";
                                    })
                                    .catch((error) => {
                                        Swal.showValidationMessage(`Se produjo un error: ${error}`);
                                    });
                            },
                            allowOutsideClick: () => !Swal.isLoading(),
                        }).then((result) => {
                            if (result.value) {
                                Swal.fire("Eliminado!", "Equipo Eliminado.", "success");
                            }
                        });
                    });;
                </script>