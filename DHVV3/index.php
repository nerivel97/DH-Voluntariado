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
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="/Eventos" role="button"
                aria-expanded="false">Colabora</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.html">Eventos</a></li>
                <li><a class="dropdown-item" href=" ">Voluntariado</a></li>
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
  <hr>

  <!-- Carrusel -->
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000" style="text-align: center;">
        <img src="https://images.alphacoders.com/903/thumb-1920-903501.jpg" width="800px" height="450px" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="color-text">Primera imagen</h5>
          <p class="color-text" style="text-align: center;">
            Descripcion representativa de la primera imagen
          </p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000" style="text-align: center;">
        <img src="https://www.am.com.mx/u/fotografias/fotosnoticias/2021/11/9/49963.jpg" width="800px" height="450px" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="color-text">Segunda imagen</h5>
          <p class="color-text">
            Descripcion representativa de la segunda imagen
          </p>
        </div>
      </div>
      <div class="carousel-item" style="text-align: center;">
        <img src="https://th.bing.com/th/id/OIP.Ad7v5b96uv4DukmHGKA_NQHaEK?rs=1&pid=ImgDetMain" width="800px"
          height="450px" />
        <div class="carousel-caption d-none d-md-block">
          <h5 class="color-text">Tercera imagen</h5>
          <p class="color-text">
            Descripcion representativa de la primera imagen
          </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container-sm">
    <h5 class="text-center">¿Como participo en los eventos?</h5>
    <p>
      Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus, recusandae
      deleniti. Ducimus libero corporis, minus minima nihil atque, provident
      accusamus unde iusto animi sequi. Eius asperiores velit iste dolore.
      Ducimus! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minus,
      recusandae deleniti. Ducimus libero corporis, minus minima nihil atque,
      provident accusamus unde iusto animi sequi. Eius asperiores velit iste
      dolore. Ducimus!
    </p>
  </div>

  <div class="container-sm">
    <div class="row row-cols-1 row-cols-md-2 g-4">
    <?php
    include("modelo/conexion.php");
    $eventos = $conexion->query("select*from eventos");
    while ($datos = $eventos->fetch_object()) { ?>
        <div class="col">
          <div class="card" style="height: 300px;">
            <img width="100px" height="100px" src="<?= $datos->imagen ?>" class="card-img-top">
            <div class="card-body">
              <h5 class="card-title"> <?= $datos->titulo ?> </h5>
              <p class="card-text"> <?= $datos->descripcion ?> </p>
            </div>
          </div>
        </div>
      <?php } 
      ?>
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
</body>

</html>