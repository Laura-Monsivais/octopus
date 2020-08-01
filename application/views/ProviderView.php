<div class="page-wrapper">
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="box">
        
                    <div class="box-header with-border">
                        <h1 class="box-title">Proveedor 
                            <button class="btn btn-success" id="btnagregar">
                                <i class="fa fa-plus-circle"></i>Agregar
                            </button>
                        </h1>
                        <div class="box-tools pull-right"></div>
                    </div>
    <!--box-header-->
    <!--centro-->
                    <div class="panel-body table-responsive" id="listadoregistros">
                        <div id="tbllistado_wrapper" class="dataTables_wrapper">
                        <!-- <div class="dt-buttons">
                                <a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="tbllistado" href="#"><span>Copy</span></a>
                                <a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="tbllistado" href="#"><span>Excel</span></a>
                                <a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="tbllistado" href="#"><span>CSV</span></a>
                                <a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="tbllistado" href="#"><span>PDF</span></a>
                                
                            </div> -->
                <div id="tbllistado_filter" class="dataTables_filter">
                    <label>Buscar:
                        <input type="search" class="" placeholder="" aria-controls="tbllistado">
                    </label>
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
                        <tr role="row" class="odd"><td class="sorting_1">
                            <button class="btn btn-warning btn-xs">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                            </svg>
                            </button> 
                            <button class="btn btn-info btn-xs" >
                                <i class="fa fa-key"></i>
                            </button> 
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
                <div class="dataTables_info" id="tbllistado_info" role="status" aria-live="polite">Mostrando 1 a 4 de 1 registro(s)</div>
                <div class="dataTables_paginate paging_simple_numbers" id="tbllistado_paginate">
                    <a class="paginate_button previous disabled" aria-controls="tbllistado" data-dt-idx="0" tabindex="0" id="tbllistado_previous">Anterior</a><span>
                    <a class="paginate_button current" aria-controls="tbllistado" data-dt-idx="1" tabindex="0">1</a></span>
                    <a class="paginate_button next disabled" aria-controls="tbllistado" data-dt-idx="2" tabindex="0" id="tbllistado_next">Siguiente</a>
                </div>
            </div>
            
            </div>
            <div class="panel-body" id="formularioregistros" style="display: none;">
            <form action="" name="formulario" id="formulario" method="POST">
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                <label for="">Tipo usuario(*):</label>
                <div class="btn-group bootstrap-select form-control select-picker"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="idtipousuario" title="seleccione..."><span class="filter-option pull-left">seleccione...</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">seleccione...</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Administrador</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Recursos Humanos</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="idtipousuario" id="idtipousuario" class="form-control select-picker" required="" tabindex="-98"><option value="0">seleccione...</option><option value="1">Administrador</option><option value="2">Recursos Humanos</option></select></div>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                <label for="">Departamento(*):</label>
                <div class="btn-group bootstrap-select form-control select-picker"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" role="button" data-id="iddepartamento" title="seleccione..."><span class="filter-option pull-left">seleccione...</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open" role="combobox"><ul class="dropdown-menu inner" role="listbox" aria-expanded="false"><li data-original-index="0" class="selected"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="true"><span class="text">seleccione...</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Recursos Humanos</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Psicología</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Gerencia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Administración</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Recibidor(a)</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Vigilancia</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Limpieza</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select name="iddepartamento" id="iddepartamento" class="form-control select-picker" required="" tabindex="-98"><option value="0">seleccione...</option><option value="1">Recursos Humanos</option><option value="2">Psicología</option><option value="3">Gerencia</option><option value="4">Administración</option><option value="5">Recibidor(a)</option><option value="6">Vigilancia</option><option value="7">Limpieza</option></select></div>
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                <label for="">Nombre(*):</label>
                <input class="form-control" type="hidden" name="idusuario" id="idusuario" value="">
                <input class="form-control" type="text" name="nombre" id="nombre" maxlength="100" placeholder="Nombre" required="">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                <label for="">Apellidos(*):</label>
                <input class="form-control" type="text" name="apellidos" id="apellidos" maxlength="100" placeholder="Apellidos" required="">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                <label for="">Email: </label>
                <input class="form-control" type="email" name="email" id="email" maxlength="70" placeholder="email">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                <label for="">Login(*):</label>
                <input class="form-control" type="text" name="login" id="login" maxlength="20" placeholder="nombre de usuario" required="">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-12" id="claves">
                <label for="">Clave de ingreso(*):</label>
                <input class="form-control" type="password" name="clave" id="clave" maxlength="64" placeholder="Clave">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-12" id="claves">
                <label for="">Clave de asistencia(*):</label>
                <button class="btn btn-info" type="button">Generar</button>
                <input class="form-control" type="text" name="codigo_persona" id="codigo_persona" maxlength="64" placeholder="Clave">
                </div>
                <div class="form-group col-lg-6 col-md-6 col-xs-12">
                <label for="">Imagen:</label>
                <input class="form-control filestyle" data-buttontext="Seleccionar foto" type="file" name="imagen" id="imagen" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"><div class="bootstrap-filestyle input-group"><input type="text" class="form-control " placeholder="" disabled=""> <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="imagen" class="btn btn-default "><span class="icon-span-filestyle fa fa-folder-open"></span> <span class="buttonText">Seleccionar foto</span></label></span></div>
                <input type="hidden" name="imagenactual" id="imagenactual" value="">
                <img src="" alt="" width="150px" height="120" id="imagenmuestra" style="display: none;">
                </div>
                <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button class="btn btn-primary" type="submit" id="btnGuardar"><i class="fa fa-save"></i>  Guardar</button>
                <button class="btn btn-danger" type="button"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
                </div>
            </form>
            </div>



<!--modal para ver la venta-->
 <div class="modal fade" id="getCodeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" style="width: 20% !important;">
     <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h4 class="modal-title">Cambio de contraseña</h4>
        </div>
        <div class="modal-body">
  <form action="" name="formularioc" id="formularioc" method="POST">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Password:</label>
            <input class="form-control" type="hidden" name="idusuarioc" id="idusuarioc">
            <input class="form-control" type="password" name="clavec" id="clavec" maxlength="64" placeholder="Clave" required="">
          </div>
          <button class="btn btn-primary" type="submit" id="btnGuardar_clave"><i class="fa fa-save"></i>  Guardar</button>
      <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-arrow-circle-left"></i> Cancelar</button>
        </form>

        <div class="modal-footer">
          <button class="btn btn-default" type="button" data-dismiss="modal">Cerrar</button>
        </div>
</div>
</div>
</div>
<!--inicio de modal editar contraseña--->
<!--fin de modal editar contraseña--->
<!--fin centro-->
      </div>

      </div>
      </div>
      <!-- /.box -->

    </div>

    </div>
</div>