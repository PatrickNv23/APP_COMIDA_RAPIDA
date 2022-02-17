<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
</head>
<body>
    <h1>¡ REGÍSTRATE !</h1>
    <form class="formulario" method="POST" action="../datos/registrate.php">

    <label for="nombre">Nombre: </label><br>
    <input class="nombreUsuario" id="usuario" name="nombre" type="text" placeholder="Ingrese su nombre" required><br>

    <label for="nombre">Apellidos: </label><br>
    <input class="apellidoUsuario" id="apellido" name="apellido" type="text" placeholder="Ingrese su apellido" required><br>

    <label for="nombre">Correo electrónico: </label><br>
    <input class="email" id="email" name="email" type="email" placeholder="Ingrese su correo electrónico" required><br>
    
    <label for="nombre">Usuario: </label><br>
    <input class="usuario" id="usuario" name="usuario" type="text" placeholder="Ingrese su usuario" required><br>

    <label for="nombre">Contraseña: </label><br>
    <input class="contrasenia" id="contrasenia" name="contrasenia" type="password" placeholder="Ingrese su contraseña" required><br>

    <input class="btnRegistrate" name="btnRegistrate" type="submit" value="Regístrate">
    </form>
    <br>
    <button>
        <a href="../index.php">Volver</a>
    </button>
</body>
</html>