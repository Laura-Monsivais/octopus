<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h1 class="box-title">Equipos</h1>
                <div class="card">
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom01">Nombre</label>
                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required>
                                    <div class="invalid-feedback">
                                        Completa Nombre.
                                    </div>
                                </div>
                                <div class="col-md-8 mb-3">
                                    <label for="validationCustom02">Descripción</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Descripción" required>
                                    <div class="invalid-feedback">
                                        Completa Descripción.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom03">Marca</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Marca" required>
                                    <div class="invalid-feedback">
                                        Completa Marca.
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <label for="validationCustom03">Modelo</label>
                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Modelo" required>
                                    <div class="invalid-feedback">
                                        Completa Modelo.
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustomUsername">Costo</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupPrepend">$</span>
                                        </div>
                                        <input type="number" class="form-control" id="validationCustomUsername" placeholder="Costo" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">
                                            Completa Costo.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom04">Stock</label>
                                    <input type="number" class="form-control" id="validationCustom04" placeholder="Stock" required>
                                    <div class="invalid-feedback">
                                        Completa Stock.
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">Fecha de Adquisición</label>
                                    <input type="date" class="form-control" id="validationCustom05" placeholder="Fecha" required>
                                    <div class="invalid-feedback">
                                        Completa Fecha de Adquisición.
                                    </div>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="validationCustom05">Mantenimiento</label>
                                    <select name="" class="custom-select">
                                        <option selected="Mantenimiento"></option>
                                        <option value="1">Tipo 1</option>
                                        <option value="2">Tipo 2</option>
                                        <option value="3">Tipo 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-primary" type="submit">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
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

                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Costo</th>
                                    <th scope="col">Stock</th>
                                    <th scope="col">Fecha de adquisición</th>
                                    <th scope="col">Mantenimiento</th>
                                    <th scope="col"><i class="fas fa-cogs"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Bascula</td>
                                    <td>Sirve para pesar</td>
                                    <td>Toro</td>
                                    <td>23-v1Df</td>
                                    <td>$4,000.00</td>
                                    <td>1</td>
                                    <td>06/08/2020</td>
                                    <td>1</td>
                                    <td><i class="fas fa-pencil-alt mr-2" type="button" data-toggle="modal" data-target="#signup-modal"></i><i class="fas fa-trash" id="btn_delete"></i></td>
                                </tr>
                            </tbody>
                        </table>

                        <div id="signup-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="topModalLabel">Editar Equipo</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>

                                    <div class="modal-body">
                                        <form class="needs-validation" novalidate>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom01">Nombre</label>
                                                    <input type="text" class="form-control" id="validationCustom01" placeholder="Nombre" required>
                                                    <div class="invalid-feedback">
                                                        Completa Nombre.
                                                    </div>
                                                </div>
                                                <div class="col-md-8 mb-3">
                                                    <label for="validationCustom02">Descripción</label>
                                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Descripción" required>
                                                    <div class="invalid-feedback">
                                                        Completa Descripción.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom03">Marca</label>
                                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Marca" required>
                                                    <div class="invalid-feedback">
                                                        Completa Marca.
                                                    </div>
                                                </div>
                                                <div class="col-md-2 mb-3">
                                                    <label for="validationCustom03">Modelo</label>
                                                    <input type="text" class="form-control" id="validationCustom03" placeholder="Modelo" required>
                                                    <div class="invalid-feedback">
                                                        Completa Modelo.
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustomUsername">Costo</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text" id="inputGroupPrepend">$</span>
                                                        </div>
                                                        <input type="number" class="form-control" id="validationCustomUsername" placeholder="Costo" aria-describedby="inputGroupPrepend" required>
                                                        <div class="invalid-feedback">
                                                            Completa Costo.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom04">Stock</label>
                                                    <input type="number" class="form-control" id="validationCustom04" placeholder="Stock" required>
                                                    <div class="invalid-feedback">
                                                        Completa Stock.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Fecha de Adquisición</label>
                                                    <input type="date" class="form-control" id="validationCustom05" placeholder="Fecha" required>
                                                    <div class="invalid-feedback">
                                                        Completa Fecha de Adquisición.
                                                    </div>
                                                </div>

                                                <div class="col-md-4 mb-3">
                                                    <label for="validationCustom05">Mantenimiento</label>
                                                    <select name="" class="custom-select">
                                                        <option selected="Mantenimiento"></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                    </select>
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