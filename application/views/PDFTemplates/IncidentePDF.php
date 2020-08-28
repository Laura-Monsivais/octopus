<table border="1">
    <thead>
        <tr>
            <th>Clave</th>
            <th>Versión</th>
            <th>Fecha Inicial</th>
            <th>Nueva fecha</th>
            <th>Incidencia</th>
            <th>Medida</th>
            <th>Responsable</th>
            <th>Realizó</th>
            <th>Autorizó</th>
            <th>Acciones</th>
        <?php
            foreach($incidente as $incidenteActual) {
                echo '
                    <tr >
                        <td>' . $incidenteActual["clve_incidente"] . '</td>
                        <td>' . $incidenteActual["v_incidente"]    . '</td>        
                    </tr>
                    ';
            }
            ?>
    </thead>

</table>