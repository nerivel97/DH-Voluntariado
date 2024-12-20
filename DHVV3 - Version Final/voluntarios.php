<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dejando Huellas por Cancun</title>

    <!-- Estilos de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Scripts de Bootstrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- Estilos propios -->
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/577e4ce119.js" crossorigin="anonymous"></script>
</head>

<body>
    <script>
        function eliminar(){
            var eliminar=confirm("¿Estas seguro que deseas eliminar este evento?")
            return eliminar
        }
    </script>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #CFF3FF;">
        <div class="container">
            <a class="navbar-brand me-auto" href="/">
                <img src="https://dejandohuellascancun.org/wp-content/uploads/2024/06/Logo-Fundacion-Dejando-Huellas-por-Cancun-A.C.webp"
                    alt="Avatar Logo" style="width:200px;">
            </a>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LinkArt</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 <%= currentPage === 'index' ? 'active' : '' %>"
                                aria-current="page" href=" ">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 <%= currentPage === 'artistas' ? 'active' : '' %>"
                                href=" ">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-lg-2 <%= currentPage === 'new-entry' ? 'active' : '' %>"
                                href=" ">Apoyar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 <%= currentPage === 'comprar' ? 'active' : '' %>"
                                href=" ">Reportar maltrato</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/Eventos" role="button"
                                aria-expanded="false">Colabora</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="index.html">Eventos</a></li>
                                <li><a class="dropdown-item" href=" ">Voluntariado</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 <%= currentPage === 'vender' ? 'active' : '' %>"
                                href=" ">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>

            <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
    <hr>

    
    <div class="p-4">
    <a href="menu_admin.html" class="btn btn-warning mt-2 fw-bold text-white">
        <i class="fa-solid fa-backward"></i>
    </a>
</div>

<!-- Contenedor principal -->
<div class="container p-4">
    <h2 class="text-center fw-bold mb-4">Lista de Voluntarios</h2>
    
    <div class="table-responsive">
        <table class="table table-striped table-hover text-center align-middle shadow-sm rounded">
            <thead class="table-warning">
                <tr class="fw-bold">
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Correo</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("modelo/conexion.php");
                $eventos = $conexion->query("SELECT * FROM voluntarios");

                if ($eventos->num_rows > 0) {
                    while ($datos = $eventos->fetch_object()) { ?>
                        <tr>
                            <td><?= htmlspecialchars($datos->nombre) ?></td>
                            <td><?= htmlspecialchars($datos->apellido) ?></td>
                            <td><?= htmlspecialchars($datos->telefono) ?></td>
                            <td><?= htmlspecialchars($datos->correo) ?></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="4" class="text-center text-muted">No hay voluntarios registrados</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>  

    <!-- Footer -->
    <footer style="background-color: #CFF3FF;">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col">
                    <div class="col1">
                        <img src="https://dejandohuellascancun.org/wp-content/uploads/2024/06/Logo-Fundacion-Dejando-Huellas-por-Cancun-A.C.webp"
                            width="300px" height="110px">
                        <p>Dejando Huella por Cancún A.C busca mejorar la calidad de vida de perros y gatos en
                            situaciones vulnerables mediante las campañas de adopción, esterilización, el rescate animal
                            y la concientización en la población garantizando el respeto a sus derechos.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="col2">
                        <a href="/index">Inicio</a>
                        <a href="">Nosotros</a>
                        <a href="">Apoyar</a>
                        <a href="">Reportar Maltrato</a>
                        <a href="/Eventos">Colabora</a>
                        <a href="">Contacto</a>
                    </div>
                </div>
                <div class="col">
                    <div class="col1">
                        <p style="font-weight: bold;">Contacto</p>
                        <p>+52 998-870-1062</p>
                        <p>fundaciondejandohuellascancun@gmail.com</p>
                        <a href=""></a>
                        <a href=""></a>
                    </div>
                </div>
            </div>
        </div>
        <div style="background-color: #6EC1E4; height: 50px;">
            <p class="mb-0" style="text-align: center;">&copy; Copyright 2024 ®Dejando Huellas por Cancún | Powered by
                Iniciativa M</p>
        </div>
    </footer>
</body>

</html>