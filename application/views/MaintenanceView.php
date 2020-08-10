<div class="page-wrapper">
    <div class="box">
        <div class="box-header with-border">
            <h1 class="box-title">Mantenimiento</h1>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive-sm">
                        <div class="col-md-12 mb-1">
                            <table class="table table-striped table-hover text-center">
                                <thead class="thead-dark">
                                    <tr class="text-center">
                                        <th scope="col">Nombre del Equipo</th>
                                        <th scope="col">Tipo de Mantenimiento</th>
                                        <th scope="col">Persona Asignada</th>
                                        <th scope="col"><i class="fas fa-cogs" class="d-flex align-items-center"></i>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td scope="row">Bascula</td>
                                        <td>Sirve para pesar</td>
                                        <td>Toro</td>
                                        <td><i title="Actualizar" class="fas fa-pencil-alt mr-3" type="button" data-toggle="modal"
                                                data-target="#signup-modal"></i><i title="Eliminar" class="fas fa-trash mr-3"
                                                id="btn_delete"></i>
                                    </tr>
                                </tbody>
                            </table>
							<!-- /.modal mtto -->
							<form action="<?php echo site_url()?>/MaintenanceController/AgregarMantenimiento" method="POST">
                            <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="topModalLabel">Actualizar Mantenimiento</h4>
                                            <button type="button" class="close" data-dismiss="modal"
                                                aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form class="needs-validation" novalidate>
                                                <div class="form-row">
                                                    <div class="col-md-4 mb-3">
                                                        <label for="validationCustom01">Equipo</label>
                                                        <input type="text" class="form-control" id="validationCustom01"
                                                            placeholder="Nombre" required>
                                                        <div class="invalid-feedback">
                                                            Completa Nombre.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8 mb-3">
                                                        <label for="validationCustom02">Tipo de Mantenimiento</label>
                                                        <input type="text" class="form-control" id="validationCustom02"
                                                            placeholder="Descripción" required>
                                                        <div class="invalid-feedback">
                                                            Completa Tipo Mantenimiento.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="validationCustom03">Observación</label>
                                                        <input type="text" class="form-control" id="validationCustom03"
                                                            placeholder="Observación">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom05">Fecha de Entrada</label>
                                                        <input type="date" class="form-control" id="validationCustom05"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Completa Fecha de Entrada.
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        <label for="validationCustom05">Fecha de Salida</label>
                                                        <input type="date" class="form-control" id="validationCustom05"
                                                            required>
                                                        <div class="invalid-feedback">
                                                            Completa Fecha de Salida.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary" type="submit">Guardar</button>
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
                                                this.users_data.splice(this.users_items.indexOf(
                                                        item),
                                                    1); //Remove the user of the list.
                                                return "eliminated";
                                            })
                                            .catch((error) => {
                                                Swal.showValidationMessage(
                                                    `Se produjo un error: ${error}`);
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

                            <script>
                            $("#btn_mtto").click(function() {
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
                                                this.users_data.splice(this.users_items.indexOf(
                                                        item),
                                                    1); //Remove the user of the list.
                                                return "eliminated";
                                            })
                                            .catch((error) => {
                                                Swal.showValidationMessage(
                                                    `Se produjo un error: ${error}`);
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
