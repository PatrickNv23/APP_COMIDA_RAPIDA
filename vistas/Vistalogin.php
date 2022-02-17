<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN_IIUNIDAD</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
    <h1>LOGIN</h1>
    <form class="formulario" method="POST" action="../datos/login.php">
        <label  for="usuario">Usuario: </label>
        <input class="usuario" id="usuario" name="usuario" type="text" placeholder="Ingrese el usuario">

        <label for="contraseña">Contraseña: </label>
        <input class="contraseña" id="contraseña" name="contraseña" type="password" placeholder="Ingrese la contraseña">

        <input class="btnLogin" name="btnLogin" type="submit" value="Iniciar Sesión">
        <button><a href="./VistaRegistrate.php">Registrate</a></button>
    </form>
    
    <button><a href="../index.php">Volver</a></button>

</body>
</html>