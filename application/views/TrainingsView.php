<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Modalidad</label>
                        <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Tematica</label>
                        <input type="password" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Área</label>
                        <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Observaciónes</label>
                        <input type="password" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                        <label for="inputPassword4">Encargado</label>
                        <input type="password" class="form-control">
                        </div>
                </form>
            </div>
            <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-info">Guardar</button>
                    </div>
        </div>
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">Modalidad</th>
                            <th scope="col">Tematica</th>
                            <th scope="col">Área</th>
                            <th scope="col">Observaciónes</th>
                            <th scope="col">Encargado</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
        </div>