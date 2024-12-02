<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dejando Huellas por Cancun</title>

  <!-- Estilos de Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Scripts de Bootstrap 5-->

  <!-- Estilos propios -->
  <link rel="stylesheet" href="styles.css">
  <script src="https://kit.fontawesome.com/577e4ce119.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg" style="background-color: #CFF3FF;">
    <div class="container">
      <a class="navbar-brand me-auto" href="/">
        <img
          src="https://dejandohuellascancun.org/wp-content/uploads/2024/06/Logo-Fundacion-Dejando-Huellas-por-Cancun-A.C.webp"
          alt="Avatar Logo" style="width:200px;">
      </a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">LinkArt</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link mx-lg-2 <%= currentPage === 'index' ? 'active' : '' %>" aria-current="page"
                href=" ">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 <%= currentPage === 'artistas' ? 'active' : '' %>" href=" ">Nosotros</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link mx-lg-2 <%= currentPage === 'new-entry' ? 'active' : '' %>" href=" ">Apoyar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 <%= currentPage === 'comprar' ? 'active' : '' %>" href=" ">Reportar
                maltrato</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="index.php" role="button"
                aria-expanded="false">Colabora</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">Eventos</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-lg-2 <%= currentPage === 'vender' ? 'active' : '' %>" href=" ">Contacto</a>
            </li>
          </ul>
        </div>
      </div>

      <button class="navbar-toggler pe-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>

  <div class="p-4">
        <a href="menu_admin.html" class="btn btn-warning mt-2 fw-bold text-white"><i class="fa-solid fa-backward"></i></a>
  </div>
  
  <!-- Eventos - Contenedor de eventos por participar -->
  <div class="container-sm mt-4 pb-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        include("modelo/conexion.php");
        $eventos = $conexion->query("SELECT * FROM eventos WHERE tipoevento='Participar'");
        while ($datos = $eventos->fetch_object()) { ?>
            <div class="col">
                <!-- Card con tamaño fijo -->
                <div class="card" style="height: 400px; max-width: 300px; margin: auto;">
                    <!-- Contenedor de la imagen -->
                    <div class="d-flex justify-content-center align-items-center" 
                         style="overflow: hidden; height: 150px; background-color: #f8f9fa;">
                        <!-- Imagen con tamaño específico -->
                        <img src="<?= $datos->imagen ?>" 
                             style="width: 120px; height: 120px; object-fit: contain;">
                    </div>
                    <div class="card-body" style="overflow: hidden;">
                        <!-- Título con límite de altura -->
                        <h5 class="card-title fw-bold text-truncate" 
                            style="max-height: 2.5em; line-height: 1.25em; overflow: hidden; text-align: justify;">
                            <?= $datos->titulo ?>
                        </h5>
                        <!-- Descripción con altura limitada -->
                        <p class="card-text" 
                           style="height: 100px; overflow: hidden; text-align: justify;">
                            <?= $datos->descripcion ?>
                        </p>
                        <div class="text-center">
                            <!-- Botón que abre el modal -->
                            <button type="button" class="btn btn-warning mt-2 fw-bold text-white" 
                                    data-bs-toggle="modal" data-bs-target="#modalListaParticipantes<?= $datos->id ?>">
                                Ver lista
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal para la lista de participantes -->
            <div class="modal fade" id="modalListaParticipantes<?= $datos->id ?>" tabindex="-1" 
                 aria-labelledby="modalListaLabel<?= $datos->id ?>" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalListaLabel<?= $datos->id ?>">Lista de Participantes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Consulta para obtener participantes del evento actual
                                    $participantes = $conexion->query("SELECT * FROM participantes WHERE eventoId = $datos->id");
                                    while ($participante = $participantes->fetch_object()) { ?>
                                        <tr>
                                            <td><?= $participante->nombre ?></td>
                                            <td><?= $participante->apellidos ?></td>
                                            <td><?= $participante->correo ?></td>
                                            <td><?= $participante->telefono ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


  <!-- footer-->
  <footer style="background-color: #CFF3FF;">
    <div class="container text-center">
      <div class="row align-items-center">
        <div class="col">
          <div class="col1">
            <img
              src="https://dejandohuellascancun.org/wp-content/uploads/2024/06/Logo-Fundacion-Dejando-Huellas-por-Cancun-A.C.webp"
              width="300px" height="110px">
            <p>Dejando Huella por Cancún A.C busca mejorar la calidad de vida de perros y gatos en situaciones
              vulnerables mediante las campañas de adopción, esterilización, el rescate animal y la concientización en
              la población garantizando el respeto a sus derechos.</p>
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

  <!-- Modal -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>