<?php include_once("../datos/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMIDA RÁPIDA "GOLDEN CHIPS"</title>
    <link rel="shortcut icon" href="./Imagenes/iconoPagina.png" type="image/x-icon">
</head>
<body>
    <header>
        <div>
            <a href="./index.php">
                <img src="" alt="">
            </a>
        </div>
        <nav>
            <ul>
                <li>
                    <a href="./vistas/Vistalogin.php">Login</a>
                </li>
                <li>
                    <a href="./vistas/VistaRegistrate.php">Regístrate</a>
                </li>
                <li>
                    <a href="">Sobre nosotros</a>
                </li>
            </ul>
        </nav>
    </header>
    

    <article>
        <section class="seccion_titulos">
            <h1>COMIDA RÁPIDA</h1>
            <h2>Productos</h2>
        </section>

        <section class="seccion_hamburguesas">
            <?php 
                $query = "SELECT * FROM productos where nombre like ('H%')"; 
                $resultado = mysqli_query($conexion,$query);
                while($fila = mysqli_fetch_array($resultado)){ ?>
                     <div class="contenedor_hamburguesa">
                        <div>
                            <img src="<?php echo $fila['ulrImagen']; ?>">
                        </div>
                        <div>
                            <form method="POST" action="">
                                <input type="hidden" value="<?php echo $fila['id']; ?>">
                                <p>Nombre producto: <?php echo $fila['nombre'] ?> </p>
                                <p>Descripción: <?php echo $fila['descripcion'] ?> </p>
                                <p>Precio: <?php echo $fila['precio'] ?>  </p>
                                <div>
                                    <input type="submit" value="Comprar">
                                </div>
                            </form>
                        </div>
                    </div>
            <?php
                }
            ?>
           
        </section>

        <section class="seccion_pollos">
            <?php 
            $query = "SELECT * FROM productos where nombre like('P%') or nombre like('Ca%') or nombre like('A%')";
            $resultado = mysqli_query($conexion,$query);
            while($fila = mysqli_fetch_array($resultado)){ ?>
            <div class="contenedor_pollo">
                <div>
                    <img src="<?php echo $fila['ulrImagen']; ?>">
                </div>
                <div>
                    <form method="POST" action="">
                        <input type="hidden" value="<?php echo $fila['id']; ?>">
                        <p>Nombre producto: <?php echo $fila['nombre']; ?> </p>
                        <p>Descripción: <?php echo $fila['descripcion']; ?> </p>
                        <p>Precio: <?php echo $fila['precio']; ?></p>
                        <div>
                            <input type="submit" value="Comprar">
                        </div>
                    </form>
                </div>
            </div>

        <?php
            }            
            ?>
        </section>

        <section class="seccion_combos">
            <?php 
            $query = "SELECT * FROM productos where nombre like ('Co%')";
            $resultado = mysqli_query($conexion,$query);
            while($fila = mysqli_fetch_array($resultado)){ ?>
            <div class="contenedor_combo">
                <div>
                    <img src="<?php echo $fila['ulrImagen'] ?>">
                </div>
                <div>
                    <form method="POST" action="">
                        <input type="hidden" value="<?php echo $fila['id']; ?>">
                        <p>Nombre combo: <?php echo $fila['nombre']; ?> </p>
                        <p>Descripción: <?php echo $fila['descripcion']; ?> </p>
                        <p>Precio: <?php echo $fila['precio']; ?></p>
                        <div>
                            <input type="submit" value="Comprar">
                        </div>
                    </form>
                </div>
            </div>
            
            
            
            <?php
            }
            ?>
        
        </section>

    </article>

    <footer class="footer">
         <div class="contenedor_redesSociales">
            <div class="parrafo">
                <p class="parrafo-footer">Contáctanos</p>
            </div>
            <a href="#" class="a1">
                <i class="fab fa-facebook"></i>
            </a>

            <a href="#" class="a2">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="#" class="a3">
                <i class="fab fa-whatsapp"></i>
            </a>

            <a href="#" class="a4">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </footer>
        <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body> 
</html> 