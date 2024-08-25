<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Proyectos2024/renap/public/css/styleCIudadanos.css">
    <title>Ciudadanos</title>
</head>

<body>
   
    <ul class="nav justify-content-center flex-grow-1">

        <li class="nav-item">
            <a class="nav-link mx-lg-2 active" aria-current="page" href="<?= base_url('/') ?>">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?= base_url('verCiudadanos') ?>">Ciudadanos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?= base_url('verDepartamentos') ?>">Departamentos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?= base_url('verMunicipios') ?>">Municipios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?= base_url('verRegiones') ?>">Regiones</a>
        </li>
        <li class="nav-item">
            <a class="nav-link mx-lg-2" href="<?= base_url('verNivelesacad') ?>">Niveles Acadmémicos</a>
        </li>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Nuevo
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo Municipio</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form class="row g-3">
                            <div class="col-12">
                                <label for="txtCodMuni" class="form-label">Código de Municipio</label>
                                <input type="number" class="form-control" id="txtCodMuni" placeholder="Cod_Muni">
                            </div>
                            <div class="col-12">
                                <label for="txtNombreMuni" class="form-label">Nombre Municipio</label>
                                <input type="text" class="form-control" id="txtNombreMuni" placeholder="Municipio">
                            </div>
                            <div class="col-12">
                                <label for="txtCodDepto" class="form-label">Código de Departamento</label>
                                <input type="number" class="form-control" id="txtCodDepto" placeholder="Cod_Departamento">
                            </div>
                           


                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                    </div>
                </div>
            </div>
        </div>
    </ul>

    
        <div class="container mt-5">

            <br>
            <table class="table table-responsive table-bordered border-dark table-hover text-center text-capitalize">
                <thead>
                    <tr class="table-dark table-active text-uppercase text-white">
                        <th>cod_muni</th>
                        <th>nombre</th>
                        <th>cod_depto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($resultado as $fila) {

                    ?>
                        <tr class="table table-active text-dark">
                            <td><?php echo $fila['cod_muni'] ?></td>
                            <td><?php echo $fila['nombre'] ?></td>
                            <td><?php echo $fila['cod_depto'] ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>