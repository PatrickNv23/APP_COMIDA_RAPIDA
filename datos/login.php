<?php
include_once('conexion.php');
$cantidadVecesError = 0;
 if(isset($_POST['btnLogin'])){
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    $query = "SELECT * FROM usuarios where usuario= '$usuario' and contraseña='$contraseña'";

    $resultado = mysqli_query($conexion,$query);
    /*
        if(!isset($resultado)){
            $cantidadVecesError++;
            //header("location:index.php");
            return "ERROR";
        }else{

        }*/
    if(!$resultado){
        return "ERROR";
    }
    
    if(mysqli_num_rows($resultado) >= 1){
        header("location:../vistas/VistaPrincipal.php");
    }
}
?>
