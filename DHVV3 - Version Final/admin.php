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

    <?php
    include("modelo/conexion.php");
    include("controlador/controlador_modificar_evento.php");
    include("controlador/controlador_eliminar_evento.php");
    ?>

    <div class="p-4">
        <a href="menu_admin.html" class="btn btn-warning mt-2 fw-bold text-white"><i class="fa-solid fa-backward"></i></a>
    </div>
    <!-- Formulario de eventos -->
    <div class="row col-12 p-4">
        <form action="" class="col-3" method="POST" enctype="multipart/form-data">
            <h3 class="alert alert-success"> Registro de Eventos </h3>

            <?php
            include("modelo/conexion.php");
            include("controlador/controlador_registrar_evento.php");
            ?>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Eventos</label>
                <input type="text" class="form-control" name="idevento">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                <input type="text" class="form-control" name="txttitulo">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Imagen</label>
                <input type="file" class="form-control" name="imagen">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="txtdescripcion">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha De Inicio</label>
                <input type="date" class="form-control" name="txtFI">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Fecha De Final</label>
                <input type="date" class="form-control" name="txtFF">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tipo de Evento</label>
                <select class="form-select" aria-label="Default select example" name="tipoE">
                    <option selected>Seleccionar</option>
                    <option value="Participar">Participar</option>
                    <option value="Publicitario">Publicitario</option>
                </select>
            </div>
            <div class="mb-3">
                <button type="submit" value="OK" name="btnregistrar" class="btn btn-success"> Registrar </button>
            </div>
        </form>
        <table class="table col">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Imagen</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Fecha De Inicio</th>
                    <th scope="col">Fecha de Fin</th>
                    <th scope="col">Tipo de evento</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("modelo/conexion.php");
                $eventos = $conexion->query("select*from eventos");

                while ($datos = $eventos->fetch_object()) { ?>
                    <tr>
                        <td> <?= $datos->id ?> </td>
                        <td> <?= $datos->titulo ?> </td>
                        <td> <img width="80px" height="80px" src="<?= $datos->imagen ?>"> </td>
                        <td> <?= $datos->descripcion ?> </td>
                        <td> <?= $datos->fechaini ?> </td>
                        <td> <?= $datos->fechafin ?> </td>
                        <td> <?= $datos->tipoevento ?> </td>
                        <td>
                            <a href="" class="btn btn-warning" data-bs-toggle="modal"
                                data-bs-target="#exampleModal<?= $datos->id ?>"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a href="admin.php?id=<?= $datos->id ?>&nombre=<?= $datos->imagen ?>" class="btn btn-danger" onclick="return eliminar()"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal<?= $datos->id ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Eventos</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" class="col-3" enctype="multipart/form-data" method="POST">
                                        <div class="mb-3">
                                            <select class="form-select" aria-label="Default select example" name="txtID">
                                                <option selected>Seleccionar</option>
                                                <?php
                                                $datosID = $conexion->query("select*from eventos");
                                                while ($datosIDD = $datosID->fetch_object()) { ?>
                                                    <option <?= $datos->id == $datosIDD->id ? "selected" : "" ?>
                                                        value="<?= $datosIDD->id ?>"> <?= $datosIDD->id ?> </option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Titulo</label>
                                            <input type="text" class="form-control" name="txttitulo"
                                                value="<?= $datos->titulo ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Imagen</label>
                                            <input type="hidden" value="<?= $datos->imagen ?>" name="nombreA">
                                            <input type="file" class="form-control" name="imagen">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Descripcion</label>
                                            <input type="text" class="form-control" name="txtdescripcion"
                                                value="<?= $datos->descripcion ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Fecha De Inicio</label>
                                            <input type="date" class="form-control" name="txtFI"
                                                value="<?= $datos->fechaini ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Fecha De Final</label>
                                            <input type="date" class="form-control" name="txtFF"
                                                value="<?= $datos->fechafin ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Tipo de Evento</label>
                                            <select class="form-select" aria-label="Default select example" name="tipoE">
                                                <option selected>Seleccionar</option>
                                                <?php
                                                $datosID = $conexion->query("select*from eventos");
                                                while ($datosIDD = $datosID->fetch_object()) { ?>
                                                    <option <?= $datos->tipoevento == $datosIDD->tipoevento ? "selected" : "" ?>
                                                        value="<?= $datosIDD->tipoevento ?>"> <?= $datosIDD->tipoevento ?>
                                                    </option>
                                                <?php }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <button type="submit" value="OK" name="btnmodificar" class="btn btn-success"> Actualizar </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php }

                ?>
            </tbody>
        </table>
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