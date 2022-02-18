<?php
include_once('conexion.php');
$cantidadVecesError = 0;
 if(isset($_POST['btnLogin'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $query = "SELECT * FROM usuarios where usuario= '$usuario' and contraseña='$contraseña'";

    $resultado = mysqli_query($conexion,$query);

    if(!$resultado){
        return "ERROR";
    }
    
    if(mysqli_num_rows($resultado) >= 1){
        while($fila = mysqli_fetch_array($resultado)){
            $nombre = $fila['nombre'];
        }
        header("location:../vistas/VistaPrincipal.php?nombreCliente=$nombre");
    }else{
        header("location:../index.php");
    }
}

?>
