<?php
if(!empty($_POST['btnmodificar'])){
    $ID=$_POST['txtID'];
    $titulo=$_POST['txttitulo'];
    $nombre= $_POST['nombreA'];

    //Datos de la nueva imagen actualizada
    $imagen=$_FILES['imagen']["tmp_name"];
    $nombreImagen=$_FILES['imagen']["name"];
    $tipoImagen=strtolower(pathinfo($nombreImagen,PATHINFO_EXTENSION));
    $sizeImagen=$_FILES['imagen']['size'];
    $directorio="archivos/";

    $descripcion=$_POST['txtdescripcion'];
    $fechaI=$_POST['txtFI'];
    $fechaF=$_POST['txtFF'];
    $TDE=$_POST['tipoE'];

if(is_file($imagen)){
    if($tipoImagen=='jpg' or $tipoImagen=='jpeg' or $tipoImagen=='png'){
        if(!empty($_POST["txtID"]) and !empty($_POST["txttitulo"]) and !empty($_POST["txtdescripcion"]) and !empty($_POST["txtFI"]) and !empty($_POST["txtFF"]) and !empty($_POST["tipoE"])){
            try {
                unlink($nombre);
            } catch (\Throwable $th) {
                //throw $th;
            }
            $ruta=$directorio.$ID.".".$tipoImagen;
                if(move_uploaded_file($imagen,$ruta)){
                    $modificar=$conexion->query("update eventos set id='$ID',titulo='$titulo',imagen='$ruta',descripcion='$descripcion',fechaini='$fechaI',fechafin='$fechaF',tipoevento='$TDE' where id='$ID'");
                    if($modificar == true){
                        echo "<div class='alert alert-success'> Evento Actualizado </div>";
                    } else {
                        echo "<div class='alert alert-danger'> Error al actualizar </div>";
                    }     
                }else{
                    echo "<div class='alert alert-danger'> Error al subir al servidor </div>";
                }
        }else{
            echo "<div class='alert alert-danger'> Faltan datos por llenar </div>";
        } 
    }else{
        echo "<div class='alert alert-danger'> No se acepta ese formato </div>";

    }
} else {
    echo "<div class='alert alert-danger'> No hay ninguna imagen seleccionada </div>";
}


?>

    <script>
        window.history.replaceState(null, null, window.location.pathname);
    </script>

<?php }

?>

