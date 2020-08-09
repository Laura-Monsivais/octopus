<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/AssistanceController/takeAssistance" method="POST" class="mt-3 form-horizontal">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Horario</label>
                            <select name="horario" class="custom-select">
                                <option value="Diurno">Diurno</option>
                                <option value="Nocturno">Nocturno</option>
                                <option value="Mixto">Mixto</option>
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
                            <input type="date" name="fecha" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Nota</label>
                            <input type="text" name="nota" class="form-control" required minlength="5" maxlength="100">
                        </div>
                        <input type="hidden" name="idPerson" value="<?php echo $idPerson; ?>">
                    </div> 
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-info">Guardar</button>
                        <a class="btn btn-outline-success" href="<?php echo site_url()?>/StaffController">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>