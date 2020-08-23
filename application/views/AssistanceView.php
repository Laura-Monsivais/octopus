<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Horario</label>
                        <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Fecha</label>
                        <input type="password" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputEmail4">Falto</label>
                        <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="inputPassword4">Nota</label>
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
                            <th scope="col">Horario</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Falto</th>
                            <th scope="col">Nota</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>
            </div>
        </div>