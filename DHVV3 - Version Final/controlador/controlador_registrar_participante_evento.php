<?php
if (!empty($_POST['btnregistrarp'])) {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $eventoId = $_POST['eventoId'];

    if (!empty($eventoId) && !empty($nombre) && !empty($apellidos) && !empty($correo) && !empty($telefono)) {
        $registrar = $conexion->query("INSERT INTO participantes(eventoId, nombre, apellidos, correo, telefono) VALUES('$eventoId', '$nombre', '$apellidos', '$correo', '$telefono')");

        if ($registrar == true) {
            // Mostrar el modal de éxito
            echo "<script>
                    document.addEventListener('DOMContentLoaded', function() {
                    var successModal = new bootstrap.Modal(document.getElementById('successModal'));
                    successModal.show();
                    });
                </script>";
        } else {
            echo "<div class='alert alert-danger'>Error al registrar. Por favor, intenta de nuevo.</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Por favor, llena todos los campos.</div>";
    }
    ?>
    <script>
        window.history.replaceState(null, null, window.location.pathname);
    </script>
<?php }
?>