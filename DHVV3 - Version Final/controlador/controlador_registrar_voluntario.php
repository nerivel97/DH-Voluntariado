<?php
if (!empty($_POST['btnregistrarv'])) {
    $nombre = $_POST['name'];
    $apellido = $_POST['apelli'];
    $correo = $_POST['email'];
    $telefono = $_POST['tel'];

    if (!empty($nombre) && !empty($apellido) && !empty($correo) && !empty($telefono)) {
        $registrar = $conexion->query("INSERT INTO voluntarios(nombre, apellido, correo, telefono) VALUES('$nombre', '$apellido', '$correo', '$telefono')");

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