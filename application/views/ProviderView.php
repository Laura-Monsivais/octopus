<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Nombre completo</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Tipo</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                                <option value="Físico">Físico</option>
                                <option value="Moral">Moral</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Preferente</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
                                <option value="Sí">Sí</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Teléfono</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="tel" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Correo</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="email" name="titImagen" class="form-control" maxlength="10" required>
                            </div>
                        </div>
                    </div>
					<hr>
					<!--box-header-->
					<!--centro-->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <div id="tbllistado_wrapper" class="dataTables_wrapper">
							<div class="row p-2">
								<div class="col-9">
									<div class="dt-buttons">
										<a class="btn btn btn-light" tabindex="0" aria-controls="tbllistado" href="#"><span>Excel</span></a>
										<a class="btn btn btn-light" tabindex="0" aria-controls="tbllistado" href="#"><span>CSV</span></a>
										<a class="btn btn btn-light" tabindex="0" aria-controls="tbllistado" href="#"><span>PDF</span></a>    
									</div>
								</div>
								<div class="col-3">
									<div id="tbllistado_filter" class="dataTables_filter">		
										<input type="search" class="form-control" placeholder="Buscar" aria-controls="tbllistado">
									</div>
								</div>	
							</div>
							
							<table id="tbllistado" class="table table-striped table-bordered table-condensed table-hover dataTable" role="grid" aria-describedby="tbllistado_info" style="width: 1396px;">
								<thead>
									<tr role="row">
										<th class="sorting_desc" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Opciones: activate to sort column ascending" style="width: 126.5px;" aria-sort="descending">Opciones</th>
										<th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 111.5px;">Nombre</th>
										<th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Tipo: activate to sort column ascending" style="width: 124.5px;">Tipo</th>
										<th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Preferente: activate to sort column ascending" style="width: 86.5px;">Preferente</th>
										<th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Telefono: activate to sort column ascending" style="width: 254.5px;">Teléfono</th>
										<th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Correo: activate to sort column ascending" style="width: 84.5px;">Correo</th>
										<th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Estado: activate to sort column ascending" style="width: 198.5px;">Estado</th>
										<th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Fecha Creacion: activate to sort column ascending" style="width: 101.5px;">Fecha Creación</th>
										<th class="sorting" tabindex="0" aria-controls="tbllistado" rowspan="1" colspan="1" aria-label="Fecha Actualizacion: activate to sort column ascending" style="width: 101.5px;">Fecha Actualización</th>
									</tr>
								</thead>
								<tbody>
									<tr role="row" class="odd">
										<td class="sorting_1">
											<button class="btn btn-warning btn-xs">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
												<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
											</svg>
											</button> 
											<!--<button class="btn btn-info btn-xs" >
												<i class="fa fa-key"></i>
											</button> -->
											<button class="btn btn-danger btn-xs">
												<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
													<path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.146-3.146a.5.5 0 0 0-.708-.708L8 7.293 4.854 4.146a.5.5 0 1 0-.708.708L7.293 8l-3.147 3.146a.5.5 0 0 0 .708.708L8 8.707l3.146 3.147a.5.5 0 0 0 .708-.708L8.707 8l3.147-3.146z"></path>
												</svg>
											</button>
										</td>
										<td>Alejandro</td>
										<td>tipo</td>
										<td>preferente</td>
										<td>4499908788</td>
										<td>alejandro@email.com</td>
										<td>Aguascalientes</td>
										<td>2020-01-18 00:00:00</td>
										<td>2020-02-19 00:00:00</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<th rowspan="1" colspan="1">Opciones</th>
										<th rowspan="1" colspan="1">Nombre</th>
										<th rowspan="1" colspan="1">Tipo</th>
										<th rowspan="1" colspan="1">Preferente</th>
										<th rowspan="1" colspan="1">Teléfono</th>
										<th rowspan="1" colspan="1">Correo</th>
										<th rowspan="1" colspan="1">Estado</th>
										<th rowspan="1" colspan="1">Fecha Creación</th>
										<th rowspan="1" colspan="1">Actualizacion</th>
									</tr>
								</tfoot>   
							</table>
							<div class="dataTables_info" id="tbllistado_info" role="status" aria-live="polite">
								Mostrando 1 a 4 de 1 registro(s)
							</div>
							<div class="dataTables_paginate paging_simple_numbers" id="tbllistado_paginate">
								<a class="paginate_button previous disabled" aria-controls="tbllistado" data-dt-idx="0" tabindex="0" id="tbllistado_previous">Anterior</a><span>
								<a class="paginate_button current" aria-controls="tbllistado" data-dt-idx="1" tabindex="0">1</a></span>
								<a class="paginate_button next disabled" aria-controls="tbllistado" data-dt-idx="2" tabindex="0" id="tbllistado_next">Siguiente</a>
							</div>
						</div>
            
					</div>
				</div>
			</div>
		</div>
		<!--inicio de modal editar usuario--->
        <body>
                <h1 class="box-title">Actualizar Proveedor </h1>         
				<hr>
            <div class="container-fluid p-1 my-15 border">
                 <table>
                    <tr>
                     <td>
                        <div class="form-group1">
                            <label  class="text-body">Tipo(*)</label rowspan="1" colspan="1">
                            <input type="text"  size=40   class="form-control" name="Tipo" required="true" disabled>
                        </div>
                     </td>                            
                     <td>
                        <div class="form-group1">
                        <label  class="text-body">Email(*)</label>
                        <input type="text" size=40  class="form-control" name="Email" required="true">
                        </div>
                     </td>
                    </tr>
                            
                    <tr>
                     <td>
                        <div class="form-group1">
                        <label  class="text-body">Nombre(*)</label>
                        <input type="text"  size=40     class="form-control" name="username" required="true" disabled>
                        </div>
                     </td>
                     <td>
                        <div class="form-group1">
                        <label  class="text-body">Preferente</label>
                        <input type="text" size=40   class="form-control" name="Preferente" required="false" >
                        </div>
                     </td>
                    </tr>

                    <tr>
                     <td>
                        <div class="form-group1">
                        <label  class="text-body">Telefono(*)</label>
                        <input type="number"  size=40   class="form-control" name="Telefono" required="true">
                        </div>
                     </td>
                      <td>
                        <div class="form-group1">
                        <label class="text-body">Estado</label>
                        <input type="text"size=40 class="form-control" name="Estado" required="false">
                        </div>
                     </td>
                    </tr>                            
                 </table>
            </div>
                        <p ></p>
                        <p ></p>
                        <p ></p>

                 <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
                    <button class="btn btn-danger" onclick="cancelarform()" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                 </div>
		<!--fin de modal editar usuario--->
		<!--fin centro-->
    </div>
</div>
   
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Dirección</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="titImagen" class="form-control" maxlength="100" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Estado</label>
                        <div class="col-sm-9">
                            <select name="categoria" class="custom-select">
                                <option selected=""></option>
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
                            <th scope="col">Nombre completo</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Preferente</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Insumo</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
