<?php
if(!empty($_POST['btnmodificar'])){
    $ID=$_POST['txtID'];
    $titulo=$_POST['txttitulo'];
    $imagen=$_FILES['imagen'];
    $descripcion=$_POST['txtdescripcion'];
    $fechaI=$_POST['txtFI'];
    $fechaF=$_POST['txtFF'];
    $TDE=$_POST['tipoE'];

    if(!empty($_POST["txtID"]) and !empty($_POST["txttitulo"]) and !empty($_FILES["txtimg"]) and !empty($_POST["txtdescripcion"]) and !empty($_POST["txtFI"]) and !empty($_POST["txtFF"]) and !empty($_POST["tipoE"])){
        $modificar=$conexion->query("update eventos set id='$ID',titulo='$titulo',imagen='$imagen',descripcion='$descripcion',fechaini='$fechaI',fechafin='$fechaF',tipoevento='$TDE' where id='$ID'");
        if($modificar == true){
            echo "<div class='alert alert-success'> Evento Actualizado </div>";
        } else {
            echo "<div class='alert alert-danger'> Error al actualizar </div>";
        }
    }else{
        echo "<div class='alert alert-danger'> Faltan datos por llenar </div>";
    } ?>

    <script>
        window.history.replaceState(null, null, window.location.pathname);
    </script>

<?php }

