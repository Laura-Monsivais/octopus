<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
				<form  action="<?php echo site_url()?>/ImportFilesController/subirArchivo" method="POST" enctype="multipart/form-data" class="mt-3 form-horizontal">
				<div class="form-group row">
					<label for="inputHorizontalDnger" class="col-sm-3">Titulo</label>
					<div class="col-xs-3">
						<div class="custom-file">	
							<input type="text" name="titImagen" class="form-control">
						</div>
					</div>
					</div>
					<div class="form-group row">
						<label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo de documento</label>
						<div class="col-sm-9">
								<select name="categoria" class="custom-select">
									<option selected="HACCP">HACCP</option>
									<option value="POES">POES</option>
									<option value="BPDM">BPDM</option>
									<option value="Fichas Técnicas">Fichas técnicas</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Cargar   documento</label>
							<div class="col-sm-9">
								<div class="custom-file">
									<input type="file" name="fileImagen" class="form-control">	
								</div>
							</div>
						</div>
						<div class="form-group text-center">
							<button type="submit" class="btn btn-outline-info">Guardar</button>
                    </div>
				</form>
            </div>
        </form>
    </div>
</div>

