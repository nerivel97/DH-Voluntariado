<?php
if(!empty($_POST['btnregistrar'])){
    $ID=$_POST['idevento'];
    $titulo=$_POST['txttitulo'];

    $imagen=$_FILES['imagen']["tmp_name"];
    $nombreImagen=$_FILES['imagen']["name"];
    $tipoImagen=strtolower(pathinfo($nombreImagen,PATHINFO_EXTENSION));
    $sizeImagen=$_FILES['imagen']['size'];
    $directorio="archivos/";

    $descripcion=$_POST['txtdescripcion'];
    $fechaI=$_POST['txtFI'];
    $fechaF=$_POST['txtFF'];
    $TDE=$_POST['tipoE'];
    if($tipoImagen=='jpg' or $tipoImagen=='jpeg' or $tipoImagen=='png'){
        if(!empty($_POST["idevento"]) and !empty($_POST["txttitulo"]) and !empty($_FILES["imagen"]) and !empty($_POST["txtdescripcion"]) and !empty($_POST["txtFI"]) and !empty($_POST["txtFF"]) and !empty($_POST["tipoE"])){
            $resgistrar=$conexion->query("insert into eventos(id,titulo,imagen,descripcion,fechaini,fechafin,tipoevento) values('$ID',' ',' ',' ',' ',' ',' ')");
            $idRegistro=$conexion->insert_id;
            $ruta=$directorio.$idRegistro.".".$tipoImagen;
            $actualizar=$conexion->query("update eventos set titulo='$titulo',imagen='$ruta',descripcion='$descripcion',fechaini='$fechaI',fechafin='$fechaF',tipoevento='$TDE' where id='$ID'");
            //Aqui vamos almacenar la imagen
            if(move_uploaded_file($imagen,$ruta)){
                echo "<div class='alert alert-success'> La imagen se guardo adecuadamente </div>";
            } else {
                echo "<div class='alert alert-success'> Error al guardar la imagen </div>";
            }

            if($resgistrar == true){
                echo "<div class='alert alert-success'> Evento registrado </div>";
            } else {
                echo "<div class='alert alert-danger'> Error al registrar </div>";
            }
        }else{
            echo "<div class='alert alert-danger'> Debe llenar todos los campos </div>";
        }
    } else{
        echo "<div class='alert alert-danger'> No se acepta ese formato </div>";
    }
    ?>

    <script>
        window.history.replaceState(null, null, window.location.pathname);
    </script>

<?php }



