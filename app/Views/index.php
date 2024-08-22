<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: beige;
            height: 80px;
            margin: 20px;
            border-radius: 16px;
            padding: 0.5rem;
        }


        .navbar-brand {
            font-weight: 500;
            color: #009970;
            font-size: 24px;
            transition: 0.3s color;
        }


        .login-button {
            background-color: #009970;
            color: #fff;
            font-size: 14px;
            padding: 8px 20px;
            border-radius: 50px;
            text-decoration: none;
            transition: 0.3s background-color;
        }

        .login-button:hover {
            background-color: #00b383;
        }

        .navbar-toggler {
            border: none;
            font-size: 1.25rem;
        }

        .navbar-toggler:focus,
        .btn-close:focus {
            box-shadow: none;
            outline: none;
        }

        .nav-link {
            color: #666777;
            font-weight: 500;
            position: relative;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #000;
        }

        @media(min-width: 991px) {
            .nav-link::before {
                content: "";
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 0;
                height: 2px;
                background-color: #009970;
                visibility: hidden;
                transition: 0.3s ease-in-out;
            }

            .nav-link:hover::before,
            .nav-link.active::before {
                width: 100%;
                visibility: visible;
            }
        }

        .hero-section {
            background: url(hero-bg-.jpg) no-repeat center;
            background-size: cover;
            width: 100%;
        }

        .hero-section::before{
            background-color: rgba(0, 0, 0, 6);
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;

        }

        .hero-section .container{
            height: 100vh;
            z-index: 1;
            position: relative;

        }

        .hero-section h1{
            font-size: 2.0rem;
        }

        .hero-section h2{
            font-size: 1.2rem;
        }

    </style>
    <title>Home</title>
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
                                <a class="nav-link mx-lg-2 active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Ciudadanos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Departamentos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Municipios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Regiones</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mx-lg-2" href="#">Niveles Acadmémicos</a>
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
            <div class="container d-flex align-items-center justify-content-center fs-l text-white flex-column">
                <h1>EFPEM - USAC</h1>
                <h2>Diego Martínez</h2>
            </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>