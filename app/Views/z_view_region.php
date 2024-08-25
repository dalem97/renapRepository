<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/Proyectos2024/renap/public/css/styleCIudadanos.css">
    <title>Regiones</title>
</head>

<body>

        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand me-auto"><img src="http://localhost/Proyectos2024/renap/public/img/IMA-Logo.png" width="50px" height="55px" alt="Logo"></a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Renap</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-center flex-grow-1 pe-3">
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
                        </ul>

                    </div>
                </div>
                <a href="#" class="login-button">Login</a>
                <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>

        <section class="hero-section">
            <div class="container mt-5">
                <h1 class="text-center text-white p2 bg-dark bg-gradient text-uppercase">Regiones</h1>
                <br>
                <table class="table table-responsive table-bordered border-dark table-hover text-center text-capitalize">
                    <thead>
                        <tr class="table-dark table-active text-uppercase text-white">
                            <th>cod_región</th>
                            <th>nombre</th>
                            <th>descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($resultado as $fila){   
                           
                        ?>
                        <tr class="table table-active text-light">
                            <td><?php echo $fila['cod_region'] ?></td>
                            <td><?php echo $fila['nombre']?></td>
                            <td><?php echo $fila['descripcion'] ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>

            </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>