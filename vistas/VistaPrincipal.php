<?php include_once("../datos/conexion.php"); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMIDA RÁPIDA ""</title>
    <link rel="shortcut icon" href="../Imagenes/iconoPagina.png" type="image/x-icon">


    <!-- fuente de letra base -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Karla:wght@300;400;500&display=swap" rel="stylesheet"> 


    <!-- fuente de letra Título Principal -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">

    <!-- fuente de letra título Productos -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chango&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/estiloBasePrincipal.css">
</head>
<body>
    <?php 
        include_once("../partials/navPrincipal.php");
    ?>
   
    

    <article class="articulo_principal">
        
        <section class="seccion_titulos">
            <h1 class="titulo_principal">COMIDA RÁPIDA</h1>
            <!-- <h2 class="titulo_productos">Productos</h2> -->
            <?php 
            if(isset($_GET['nombreCliente'])){
                $nombreCliente = $_GET['nombreCliente'];
                echo "<p class='nombreCliente'>Bienvenido: " .$nombreCliente. "</p>";
            }
            ?>
        </section>

        <section class="seccion_tituloHamburguesas">
            <h2 class="titulo_producto">HAMBURGUESAS</h2>
        </section>

        <section class="seccion_hamburguesas">
            <?php 
                $query = "SELECT * FROM productos where nombre like ('H%')"; 
                $resultado = mysqli_query($conexion,$query);
                while($fila = mysqli_fetch_array($resultado)){ ?>
                     <div class="contenedor_hamburguesa">
                        <div class="contenedor_imagen">
                            <img class="imagen_producto" src="<?php echo $fila['ulrImagen']; ?>">
                        </div>
                        <div class="contenedor_descripcion">
                            <form class="formulario_comprar" method="POST" action="./vistaPedido.php">
                                <input name="id" type="hidden" value="<?php echo $fila['id']; ?>">
                                <p class="dato_producto">Nombre producto </p>
                                <p>
                                     <?php echo $fila['nombre'] ?>
                                </p>

                                <p class="dato_producto">Descripción</p>
                                <p class="descripcion_producto">
                                     <?php echo $fila['descripcion'] ?>
                                </p>
                                <p class="dato_producto">Precio: <span class="precio"> <?php echo $fila['precio'] ?> </span> </p>
                                    <input name="btnComprar" class="btnComprar" type="submit" value="Comprar">
                                
                            </form>
                        </div>
                    </div>
            <?php
                }
            ?>
           
        </section>
                <section class="seccion_tituloPollos">
                    <h2 class="titulo_producto">POLLOS FRITOS</h2>
                </section>

        <section class="seccion_pollos">
            <?php 
            $query = "SELECT * FROM productos where nombre like('P%') or nombre like('Ca%') or nombre like('A%')";
            $resultado = mysqli_query($conexion,$query);
            while($fila = mysqli_fetch_array($resultado)){ ?>
            <div class="contenedor_hamburguesa">
                        <div class="contenedor_imagen">
                            <img class="imagen_producto" src="<?php echo $fila['ulrImagen']; ?>">
                        </div>
                        <div class="contenedor_descripcion">
                            <form class="formulario_comprar" method="POST" action="./vistaPedido.php">
                                <input name="id" type="hidden" value="<?php echo $fila['id']; ?>">
                                <p class="dato_producto">Nombre producto </p>
                                <p>
                                     <?php echo $fila['nombre'] ?>
                                </p>

                                <p class="dato_producto">Descripción</p>
                                <p class="descripcion_producto">
                                     <?php echo $fila['descripcion'] ?>
                                </p>
                                <p class="dato_producto">Precio: <span class="precio"> <?php echo $fila['precio'] ?> </span> </p>
                                
                                    <input name="btnComprar" class="btnComprar" type="submit" value="Comprar">
                                
                            </form>
                        </div>
                    </div>

        <?php
            }            
            ?>
        </section>
                <section class="seccion_tituloCombos">
            <h2 class="titulo_producto">COMBOS</h2>
        </section>

        <section class="seccion_combos">
            <?php 
            $query = "SELECT * FROM productos where nombre like ('Co%')";
            $resultado = mysqli_query($conexion,$query);
            while($fila = mysqli_fetch_array($resultado)){ ?>
           <div class="contenedor_hamburguesa">
                        <div class="contenedor_imagen">
                            <img class="imagen_producto" src="<?php echo $fila['ulrImagen']; ?>">
                        </div>
                        <div class="contenedor_descripcion">
                            <form class="formulario_comprar" method="POST" action="./vistaPedido.php">
                                <input name="id" type="hidden" value="<?php echo $fila['id']; ?>">
                                <p class="dato_producto">Nombre producto </p>
                                <p>
                                     <?php echo $fila['nombre'] ?>
                                </p>

                                <p class="dato_producto">Descripción</p>
                                <p class="descripcion_producto">
                                     <?php echo $fila['descripcion'] ?>
                                </p>
                                <p class="dato_producto">Precio: <span class="precio"> <?php echo $fila['precio'] ?> </span> </p>
                                
                                    <input name="btnComprar" class="btnComprar" type="submit" value="Comprar">
                                
                            </form>
                        </div>
                    </div>
            
            
            
            <?php
            }
            ?>
        
        </section>

    </article>

    <footer class="footer">
        <p class="parrafo-footer">Contáctanos</p>   
         <div class="contenedor_redesSociales">
             
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