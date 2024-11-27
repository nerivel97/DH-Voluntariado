<?php
if(!empty($_GET['id'])){
    $id=$_GET["id"];
    $eliminar=$conexion->query("delete from eventos where id='$id'");
    if($eliminar == true){
        echo "<div class='alert alert-success'> El evento ha sido eliminado correctamente </div>";
    } else {
        echo "<div class='alert alert-danger'> Error al eliminar el evento </div>";
    }
?>

    <script>
        window.history.replaceState(null, null, window.location.pathname);
    </script>

<?php }



