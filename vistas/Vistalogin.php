<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN_IIUNIDAD</title>
    <link rel="stylesheet" href="../css/estiloLogin.css">
    <link rel="stylesheet" href="../css/principal.css">
    
</head>
<body>
    <?php 
    include_once("../partials/navInicio.php");
    ?>
    <main class="mainLogin">
         <h1>LOGIN</h1>
    <form class="formulario" method="POST" action="../datos/login.php">
        <label class="labelUsuarioLogin"  for="usuario">Usuario: </label>
        <input class="usuario" id="usuario" name="usuario" type="text" placeholder="Ingrese el usuario">

        <label for="contraseña">Contraseña: </label>
        <input class="contraseña" id="contraseña" name="contraseña" type="password" placeholder="Ingrese la contraseña">

        <div class="contenedorBotonesLogin">
            <input class="btnLogin" name="btnLogin" type="submit" value="Iniciar Sesión">
            <button class="btnVistaRegistrate"><a class="enlaceVistaRegistrate" href="./VistaRegistrate.php">Registrate</a></button>
        </div>
    </form>
    
    <button class="btnVolverInicio"><a class="enlaceVolverInicio" href="../index.php">Volver</a></button>
</main>
<div class="separadorMainFooter">

</div>
    <?php 
    include_once("../partials/footer.php");
    ?>
            <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body>
</html>