<?php 
include_once("../datos/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>
    <link rel="stylesheet" href="../css/estiloBasePrincipal.css">
    <link rel="stylesheet" href="../css/estilodePedido.css">
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

</head>
<body>
    <?php 
        include_once("../partials/navPrincipal.php");
    ?>
    <h1 class="tituloPedido">PEDIDO</h1> 
    <article class="articuloPedido">
        <section class="seccion_pedido">
            <?php 
                if(isset($_POST['btnComprar'])){
                    $id = $_POST['id'];
                    $query = "SELECT * FROM productos where id = $id";
                    $resultado = mysqli_query($conexion,$query);

                    if(!$resultado){
                        die("ERROR");
                    } 
                    while($fila = mysqli_fetch_array($resultado)){?>
                    <form class="formularioPedido" action="VistaPedido.php" method="POST">
                         <div class="contenedor_pedidoImagen">
                            <div class="contenedor_imagenproductoCompra">
                            <img class="imagenPedido" src="<?php echo $fila['ulrImagen'] ?>">
                            </div>
                        </div>
                        <div class="contenedor_pedidoDatos">
                            <p class="parrafoNombreProducto">Producto: </p>
                            <p><?php echo $fila['nombre'] ?> </p>
                            <p class="parrafoDescripcionProducto">Descripción:  </p>
                            <p class="parrafoDescripcion">
                                <?php echo $fila['descripcion'] ?>
                            </p>
                        </div>   
                         </section>

                    <section class="seccion_pedidoCompra">
                        <div class="contenedorPedidoCantidad">
                             <input name="urlHidden" type="hidden" value="<?php echo $fila['ulrImagen'] ?>">
                        <input name="nombreHidden" type="hidden" value="<?php echo $fila['nombre'] ?>">
                        <input name="descripcionHidden" type="hidden" value="<?php echo $fila['descripcion'] ?>">
                        <input name="precioHidden" type="hidden" value="<?php echo $fila['precio'] ?>">
                            <p>Precio: <?php echo $fila['precio'] ?> </p>

                            <div class="contenedorInputCantidad">
                            <p class="parrafoCantidad">Cantidad:</p>
                        <input name="cantidad" class="cantidad" type="number" placeholder="Ingrese la cantidad" required>    
                            </div>
                        
                        <input type="submit" name="btnCalculoPedido" class="btnCalculoPedido" value="Calcular Total">         
                        </div>
                        
                    </form>
                       
                    <?php
                    }

                    }
                    ?>
           <?php
            if(isset($_POST['btnCalculoPedido'])){
                $url = $_POST['urlHidden'];
                $nombre = $_POST['nombreHidden'];
                $descripcion = $_POST['descripcionHidden'];
            $cantidad = $_POST['cantidad'];
            $precio = $_POST['precioHidden'];
            $subTotal = $cantidad * $precio;
            $igv = 0.18;
            $Total = $subTotal + ($subTotal*$igv);
            ?>
            <div class="contenedor_pedidoImagen">
                            <div class="contenedor_imagenproductoCompra">
                            <img class="imagenPedido" src="<?php echo $url ?>">
                            </div>
                        </div>
                        <div class="contenedor_pedidoDatos">
                            <p class="parrafoNombreProducto">Producto: </p>
                            <p><?php echo $nombre ?> </p>
                            <p class="parrafoDescripcionProducto">Descrición:  </p>
                            <p class="parrafoDescripcion">
                                <?php echo $descripcion ?>
                            </p>
                        </div>      
                         </section>

                    <section class="seccion_pedidoCompra seccion_pedidoTotal">
                        <div class="contenedor_datosPago">
                            <p>Precio: <?php echo $precio ?> </p>
                        <p>Cantidad: <?php echo $cantidad ?></p>
            <p>SubTotal: <?php echo $subTotal ?></p>
            <p>IGV: 18%</p>
            <p>Total: <?php echo $Total?> </p>
            
            <button class="btnRealizarCompra">
                <a class="enlaceRealizarCompra" href="./VistaCompraRealizada.php">Realizar Compra</a>
            </button>
                        </div>
                        
            <?php
                }
            ?> 
            <div class="contenedorBtnVolver">
                <button class="btnVolver">
                <a class="enlaceVolver" href="./VistaPrincipal.php">Volver</a>
                </button>
            </div>
        </section>
    </article>
    <?php 
    include_once("../partials/footer.php")
    ?>
     <script src="https://kit.fontawesome.com/60107a401e.js" crossorigin="anonymous"></script>
</body>
</html>