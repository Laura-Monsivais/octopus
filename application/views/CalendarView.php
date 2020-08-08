<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="<?php echo site_url()?>/CalendarController/validateFormData" method="POST"
                    enctype="multipart/form-data" class="mt-3 form-horizontal">
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Evento</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="text" name="evento" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha</label>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="date" name="fecha" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputHorizontalDnger" class="col-sm-3 col-form-label">Fecha importante</label>
                        <div class="col-sm-9">
                            <select name="fecha_importante" class="custom-select">
                                <option selected=""></option>
                                <option value="1">Si</option>
                                <option value="0">No</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <button id="btn-add" class="btn btn-outline-success">Agregar</button>
                    <button id="btn-drop" class="btn btn-danger">Eliminar</button>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">Nombre de la persona</th>
                                <th scope="col">Puesto</th>
                            </tr>
                        </thead>
                        <tbody id="tbl-box" class="text-center"></tbody>
                    </table>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-outline-info" disabled>Guardar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card">
            <div class="card-body table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <thead class="thead-dark text-center">
                        <tr>
                            <th scope="col">Evento</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Fecha importante</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $path = site_url();
                            foreach ($events as $event) {
                                echo "<tr >";
                                echo "<td >" . $event["evento"] . "</td>";
                                echo "<td >" . $event["fecha"] . "</td>";
                                echo "<td >" . $isImportant = $event["fecha_importe"] ? "Si" : "No" . "</td>";
                                echo "<td class='text-center'>
                                        <a class='btn btn-outline-info disabled' href='${path}/CalendarController/processDeleteEvent/" . $event["id_calendario"] . "'>&nbsp;&nbsp;Editar&nbsp;&nbsp;</a>
                                        <a class='btn btn-danger'  href='${path}/CalendarController/processDeleteEvent/" . $event["id_calendario"] . "'>Eliminar</a>
                                      </td>"; 
                                echo "</tr>";
                            }
                        ?>
                        </body>
                </table>
            </div>
        </div>

        <script>
        const buttonAdd = document.getElementById("btn-add");
        const tableBody = document.getElementById("tbl-box");
        const buttonDrop = document.getElementById("btn-drop");

        let jsons = [{
                "name": "Persona 1",
            },
            {
                "name": "Persona 2",
            }
        ];

        buttonAdd.addEventListener("click", (e) => {
            e.preventDefault();
            var row = tableBody.insertRow(0);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            let select = document.createElement("select");
            select.setAttribute("id", "select-input");
            select.classList.add("form-control");
            document.body.appendChild(select);

            for (let entry of jsons) {
                let option = document.createElement("option");
                let t = document.createTextNode(entry["name"]);
                option.appendChild(t);
                cell1.appendChild(select);
                document.getElementById("select-input").appendChild(option);
            }
        });

        buttonDrop.addEventListener("click", (e) => {
            e.preventDefault();
            tableBody.deleteRow(0);
        });
        </script>