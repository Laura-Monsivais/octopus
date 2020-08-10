<div class="page-wrapper">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border ">
                <h1 class="box-title font-weight-bold text-info">Lista de Mantenimientos</h1>
                <div class="card">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive-sm">
                                <div class="col-md-12 mb-1">
                                    <table class="table table-striped table-hover text-center">
                                        <thead class="thead-dark">
                                            <tr class="text-center">
                                                <th scope="col">Nombre del Equipo</th>
                                                <th scope="col">Tipo de Mantenimiento</th>
                                                <th scope="col">Empleado Asignado</th>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
											
                                            <?php  
							         
									 $equipos = json_decode(json_encode($equipoList), true);
									 $path = site_url();
									 foreach ($equipos as $equipo) {
										 echo "<tr id_equipo=".$equipo["id_equipo"].">";
										 echo "<td data-target='nombre'>" . $equipo["nombre_equipo"] . "</td>";
										 echo "<td 'tipo'>" . $equipo["tipo"] . "</td>";
										 echo "<td >" . $equipo["nombre"] . ' ' .  $equipo["apellido_paterno"] . ' ' .  $equipo["apellido_materno"] . "</td>";}
												?>
																								
                                            </tr>
                                        </tbody>
                                    </table>
                                    <tbody>

                                    </tbody>
                                    </table>
                                </div>
                            </div>
                            </table>
