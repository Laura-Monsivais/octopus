<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Horario</label>
                            <select name="falto" class="custom-select">
                                <option value="">Diurno</option>
                                <option value="">Nocturno</option>
                                <option value="">Mixto</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Falto</label>
                            <select name="falto" class="custom-select">
                                <option value="0">No</option>
                                <option value="1">Sí</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Fecha</label>
                            <input type="date" name="fecha" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nota</label>
                            <input type="password" class="form-control">
                        </div>
                </form>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-outline-info">Guardar</button>
                <a class="btn btn-outline-success" href="<?php echo site_url()?>/StaffController">Regresar</a>
            </div>
        </div>
    </div>