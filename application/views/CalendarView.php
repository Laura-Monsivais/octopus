<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form  action="<?php echo site_url()?>/ImportFileController/subirArchivo" method="POST" enctype="multipart/form-data" class="mt-3 form-horizontal">
					    <div class="form-group row">
                            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Evento</label>
                            <div class="col-sm-9">
                                <div class="custom-file">
									<input type="text" name="titImagen" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha</label>
                            <div class="col-sm-9">
                                <div class="custom-file">
									<input type="date" name="titImagen" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha importante</label>
                        <div class="col-sm-9">
                                <select name="categoria" class="custom-select">
                                    <option selected=""></option>
                                    <option value="Si">Si</option>
                                    <option value="No">No</option>
                                </select>
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
		<!-- <table class="table">
			<thead>
				<tr>
					<th scope="col">Nombre</th>
					<th scope="col">Link</th>
					<th scope="col">Tipo de doumento</th>
					<th scope="col">Acción</th>
				</tr>
			</thead>
			<tbody>
			<?php 
				// $archivos = json_decode(json_encode($listaArchivos), true);
				// $path = site_url();
				// foreach ($archivos as $archivo) {
				// 	echo "<tr >";
				// 	echo "<td >" . $archivo["nombre_archivo"] . "</td>";
				// 	echo "<td >" . $archivo["ruta"] . "</td>";
				// 	echo "<td >" . $archivo["categoria"] . "</td>";
                //     echo "<td ><a class='btn btn-primary' href='${path}/ImportFileController/descargarArchivo/" . $archivo["id_archivo"] . "'>Descargar</a></td>"; 
				// 	echo "</tr>";
				// }
			?>
			</tbody> -->
		</table>