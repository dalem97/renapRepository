<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ciudadanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Proyectos2024/renap/public/css/styleCiudadanos.css">
    <link rel="stylesheet" href="<?= base_url('css/jquery.dataTables.min.css') ?>">
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
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo Ciudadano</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="txtDPI" class="form-label">DPI</label>
                                <input type="number" class="form-control" id="txtDPI" placeholder="Ingresa aquí tu DPI">
                            </div>
                            <div class="col-12">
                                <label for="txtApellido" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="txtApellido" placeholder="Escriba sus dos apellidos">
                            </div>
                            <div class="col-12">
                                <label for="txtNombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="txtNombre" placeholder="Escriba todos sus nombres">
                            </div>
                            <div class="col-12">
                                <label for="txtDireccion" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="txtDireccion" placeholder="12 ave. 16-49 zona 10">
                            </div>
                            <div class="col-12">
                                <label for="txtTelCasa" class="form-label">Teléfono de Casa</label>
                                <input type="number" class="form-control" id="txtTelCasa" placeholder="1234-5678">
                            </div>
                            <div class="col-12">
                                <label for="txtTelMovil" class="form-label">Teléfono Móvil</label>
                                <input type="number" class="form-control" id="txtMovil" placeholder="4212-0090">
                            </div>
                            <div class="col-md-6">
                                <label for="txtEmail" class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" id="txtEmail">
                            </div>
                            <div class="col-md-6">
                                <label for="txtFechaNac" class="form-label">Fecha de Nacimiento</label>
                                <input type="date" class="form-control" id="txtFechaNac" placeholder="aaa-mm-dd">
                            </div>
                            <div class="col-md-4">
                                <label for="txtNivelAcad" class="form-label">Nivel Académico</label>
                                <select id="txtNivelAcad" class="form-select">
                                    <option selected>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="txtLugarNac" class="form-label">Lugar de Nacimiento</label>
                                <select id="txtLugarNac" class="form-select">
                                    <option selected>101</option>
                                    <option>102</option>
                                    <option>103</option>
                                    <option>104</option>
                                    <option>105</option>
                                    <option>106</option>
                                    <option>107</option>
                                    <option>108</option>
                                </select>
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Registrar</button>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Salir</button>
                        <!-- <button type="button" class="btn btn-primary">Understood</button> -->
                    </div>
                </div>
            </div>
        </div>
    </ul>

    <div class="container mt-5">

        <table class="table table-responsive table-bordered border-dark table-hover text-center text-capitalize" id="dataTable">
            <thead>
                <tr class="table-dark table-active text-uppercase text-white">
                    <th>dpi</th>
                    <th>apellido</th>
                    <th>nombre</th>
                    <th>direccion</th>
                    <th>tel_casa</th>
                    <th>tel_movil</th>
                    <th>email</th>
                    <th>fechanac</th>
                    <th>cod_nivel_acad</th>
                    <th>lugar_nacimiento</th>
                    <th>Procesos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($resultado as $fila) {

                ?>
                    <tr class="table table-active text-light">
                        <td><?php echo $fila['dpi'] ?></td>
                        <td><?php echo $fila['apellido'] ?></td>
                        <td><?php echo $fila['nombre'] ?></td>
                        <td><?php echo $fila['direccion'] ?></td>
                        <td><?php echo $fila['tel_casa'] ?></td>
                        <td><?php echo $fila['tel_movil'] ?></td>
                        <td><?php echo $fila['email'] ?></td>
                        <td><?php echo $fila['fechanac'] ?></td>
                        <td><?php echo $fila['cod_nivel_acad'] ?></td>
                        <td><?php echo $fila['lugar_nacimiento'] ?></td>
                        <td>
                           <a href="<?php ?>">Actualizar</a> 
                             / 
                            <a href="<?=base_url('eliminarCiudadano/'.$fila['dpi']) ?>">Eliminar</a>
                             </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--JS datatable-->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <script src="<?= base_url('js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('js/configuracionDataTables.js') ?>"></script>
</body>

</html>