<div class="page-wrapper">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST"
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
                            <select name="name" class="custom-select">
                                <option selected=""></option>
                                <option value="Si">Si</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col" width="25%">
                                    <button id="btn-add" class="btn btn-outline-info">Agregar</button>
                                    <button class="btn btn-danger" disabled>Eliminar</button>
                                </th>
                                <th scope="col">Personal</th>
                                <th scope="col">Puesto</th>
                            </tr>
                        </thead>
                        <tbody id="tbl-box" class="text-center"></tbody>
                    </table>
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
                            <th scope="col">Evento</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Fecha importante</th>
                            <th scope="col">Personas</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
<script type="text/javascript">
    alert("HOLA")

    // const btnAdd = document.getElementById("btn-add");
    // const select = document.getElementById("persons");
    // const tblBox = document.getElementById("tbl-box");

    let jsons = 
    [
        {
            "name": "Molecule Man",
            "age": 29,
            "secretIdentity": "Dan Jukes",
            "powers": [
            "Radiation resistance",
            "Turning tiny",
            "Radiation blast"
            ]
        },
        {
            "name": "Madame Uppercut",
            "age": 39,
            "secretIdentity": "Jane Wilson",
            "powers": [
            "Million tonne punch",
            "Damage resistance",
            "Superhuman reflexes"
            ]
        }
    ]

    let select = document.createElement("select");
    select.setAttribute("id", "select-input");
    document.body.appendChild(select);   

    for (let entry of jsons) {
        let option = document.createElement("option");
        let t = document.createTextNode(entry["name"]);
        option.appendChild(t);
        document.getElementById("select-input").appendChild(option);
    }
   
            
    // btnAdd.addEventListener("click", (e) => {});


</script>