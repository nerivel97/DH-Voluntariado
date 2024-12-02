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

  <!-- Imagen Principal -->
  <div class="containerI" style=" background-image: url('public/Index_img/Gato_Perro.jpg'); /* Ruta relativa o absoluta */
                                  background-size: cover; /* Escala la imagen para cubrir todo el contenedor */
                                  background-position: center; /* Centra la imagen */
                                  background-repeat: no-repeat; /* Evita repeticiones */
                                  display: flex; /* Para centrar texto u otros elementos */
                                  justify-content: left; /* Centrar horizontalmente */
                                  align-items: center; /* Centrar verticalmente */
                                  color: white; /* Color del texto (opcional) */
                                  text-shadow: 2px 2px 4px black; /* Sombra en texto (opcional) */
                                  padding-top: 300px;
                                  padding-bottom: 100px;
                                  margin-top: 10px;">
          <div style="text-shadow: 2px 2px 4px black; width: 50%; padding: 100px;">
          <h6 class="p-2" style="color: grey;" > Fundación Dejando Huellas por Cancún A.C </h6>
          <h1 class="p-2 fw-bold"> ¡Se parte de nuestros eventos y cambia vidas! </h1>
          <div class="text-center">
            <!-- Botón dentro de un enlace -->
            <a href="#eventos" class="btn btn-warning mt-2 fw-bold text-white"> Eventos </a>
          </div>
          </div>
  </div>

  <!-- Conocenos - Primer contendor de texto-->
  <div class="container-sm mt-4 pb-4 ">
  <h2 class="text-left" style="font-weight: bold; color: #c50e91;">Conocenos</h2>
    <div style="display: flex;">
      <div style="text-align: justify; margin-right: 20px;">
        <h5>En nuestros eventos no solo conoces a otros amantes de los animales, también haces una diferencia real en la vida de nuestros 
          rescatados. Desde ferias de adopción hasta caminatas solidarias, cada evento es una oportunidad para conectar, ayudar y crear 
          recuerdos inolvidables. ¡Tu participación puede salvar vidas!</h5>
      </div>
      <img height="200px" src="public/Index_img/img_I2.jpg">
    </div>
  </div>

  <!-- Eventos - Segundo contendor de texto -->
  <div id="eventos" class="container-sm mt-4 pb-4 ">
  <h2 class="text-left" style="font-weight: bold; color: #c50e91;">¡Proximos eventos en Cancún!</h2>
    <div style="display: flex;">
      <div style="text-align: justify; margin-right: 20px;">
        <h5>Consulta nuestro calendario actualizado y encuentra el evento perfecto para ti. Ya sea que quieras adoptar, ser voluntario o 
          simplemente disfrutar de un día especial con tus amigos peludos, aquí tienes toda la información que necesitas. ¡Anota la fecha
          y acompáñanos!</h5>
      </div>
    </div>
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
                              data-bs-toggle="modal" 
                              data-bs-target="#registroModal" 
                              data-evento-id="<?= $datos->id ?>"
                              data-evento-titulo="<?= $datos->titulo ?>">
                              Participar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
          <?php } ?>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="registroModal" tabindex="-1" aria-labelledby="registroModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registroModalLabel">Registro al Evento</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
              include("modelo/conexion.php");
              include("controlador/controlador_registrar_participante_evento.php");
            ?>
            <div class="modal-body">
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" required>
                    </div>
                    <input type="hidden" id="eventoId" name="eventoId">
                    <div class="modal-footer">
                        <button type="submit" value="OK" name="btnregistrarp" class="btn btn-warning mt-2 fw-bold text-white">Registrarse</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Confirmación - Participantess -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="successModalLabel">Registro Exitoso</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        ¡Has sido registrado correctamente!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning mt-2 fw-bold text-white" data-bs-dismiss="modal">Aceptar</button>
      </div>
    </div>
  </div>
</div>

<!-- Escript para guardar ID del evento seleccinado por el modal -->
<script>
    const registroModal = document.getElementById('registroModal');

    registroModal.addEventListener('show.bs.modal', function (event) {
        // Botón que dispara el modal
        const button = event.relatedTarget;

        // Extraer datos del atributo data-bs-*
        const eventoId = button.getAttribute('data-evento-id');
        const eventoTitulo = button.getAttribute('data-evento-titulo');

        // Insertar datos en el modal
        const modalTitle = registroModal.querySelector('.modal-title');
        const eventoIdInput = registroModal.querySelector('#eventoId');

        modalTitle.textContent = `Registro al Evento: ${eventoTitulo}`;
        eventoIdInput.value = eventoId;
    });
</script>

<!-- Texto - Eventos Publicitarios -->
  <div class="container-sm mt-4 pb-4 ">
    <h2 class="text-left" style="font-weight: bold; color: #c50e91;">Eventos Publicitarios</h2>
  </div>

<!-- Eventos - Contenedor de eventos publicitarios -->
<div class="container-sm mt-4 pb-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
        include("modelo/conexion.php");
        $eventos = $conexion->query("select * from eventos where tipoevento='Publicitario'");
        while ($datos = $eventos->fetch_object()) { ?>
            <div class="col">
                <div class="card" style="height: 400px;">
                    <!-- Contenedor de la imagen -->
                    <div class="d-flex justify-content-center" style="height: 200px; overflow: hidden;">
                        <img src="<?= $datos->imagen ?>" class="card-img-top" style="height: 100%; width: auto; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="text-align: justify;"> <?= $datos->titulo ?> </h5>
                        <p class="card-text" style="text-align: justify;"> <?= $datos->descripcion ?> </p>
                    </div>
                </div>
            </div>
        <?php }
        ?>
    </div>
</div>

<!-- Eventos pasados - Tercer contendor de texto -->
<div class="container-sm mt-4 pb-4 ">
  <h2 class="text-left" style="font-weight: bold; color: #c50e91;">"Recuerdos que inspiran"</h2>
    <div style="display: flex;">
      <div style="text-align: justify; margin-right: 20px;">
        <h5>Cada evento tiene historias que nos llenan de esperanza. Mira las sonrisas, los abrazos y los momentos de amor que 
          hemos compartido en eventos anteriores. ¿Listo para ser parte del próximo capítulo?</h5>
      </div>
    </div>
  </div>
  
<!-- Eventos pasados - Contendor de eventos -->
  <div class="container-sm mt-4 pb-4">
    <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
                <div class="card" style="height: 400px;">
                    <!-- Contenedor de la imagen -->
                    <div class="d-flex justify-content-center" style="height: 200px; overflow: hidden;">
                    <a href="evento_pasado_Starbucks.html">    
                      <img src="public/img_evento_pasado_Starbucks/1.jpg" class="card-img-top" style="height: 100%; width: auto; object-fit: cover;">
                    </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="text-align: justify;"> Starbucks </h5>
                        <p class="card-text" style="text-align: justify;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Dolor, ad voluptatum. Voluptas explicabo cumque reiciendis nemo numquam praesentium minus deleniti harum ex. 
                        Quia aspernatur minus non impedit itaque debitis amet. </p>
                    </div>
                </div>
          </div>
          <div class="col">
                <div class="card" style="height: 400px;">
                    <!-- Contenedor de la imagen -->
                    <div class="d-flex justify-content-center" style="height: 200px; overflow: hidden;">
                    <a href="evento_pasado_chapuzoncanino.html">    
                      <img src="public/img_evento_pasado_Chapuzon canino 10 de agosto 2024/8.jpeg" class="card-img-top" style="height: 100%; width: auto; object-fit: cover;">
                    </a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title fw-bold" style="text-align: justify;"> Chapuzon Canino </h5>
                        <p class="card-text" style="text-align: justify;"> Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Dolor, ad voluptatum. Voluptas explicabo cumque reiciendis nemo numquam praesentium minus deleniti harum ex. 
                        Quia aspernatur minus non impedit itaque debitis amet. </p>
                    </div>
                </div>
          </div>
    </div>
  </div>

<!-- Registro de Voluntarios -->
  <div class="container-sm mt-5 pb-4">
    <div class="row">
      <!-- Sección de información del evento -->
      <div class="col-md-6">
        <div class="card p-3">
          <img width="400px" src="public/Index_img/Huellitas_de_cake.jpg" class="img-fluid mx-auto d-block" alt="Huellitas de Café">
        </div>
      </div>

      <!-- Sección de formulario -->
      <div class="col-md-6">
        <?php
            include("modelo/conexion.php");
            include("controlador/controlador_registrar_voluntario.php");
        ?>
        <h2 class="fw-bold mb-4">¡Unete como voluntario y haz la diferencia!</h2>
        <form action="" method="POST">
          <div class="row">
            <div class="col-6 mb-3">
              <label for="nombre" class="form-label">Nombre *</label>
              <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="col-6 mb-3">
              <label for="apellido" class="form-label">Apellido *</label>
              <input type="text" class="form-control" id="apelli" name="apelli" placeholder="Apellido">
            </div>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono *</label>
            <input type="tel" class="form-control" id="tel" name="tel" placeholder="000 000 0000">
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico *</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Correo electrónico">
          </div>
          <button type="submit" value="OK" name="btnregistrarv" class="btn btn-warning mt-2 fw-bold text-white">Registrarse</button>
        </form>
      </div>
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