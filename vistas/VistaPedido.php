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
    <link rel="stylesheet" href="../css/principal.css">
</head>
<body>
    <?php 
        include_once("../partials/navPrincipal.php");
    ?>
    <h1>COMPRAS</h1> 
    <article>
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
                    <form action="VistaPedido.php" method="POST">
                         <div class="contenedor_pedidoImagen">
                            <div class="contenedor_imagenproductoCompra">
                            <img src="<?php echo $fila['ulrImagen'] ?>">
                            </div>
                        </div>
                        <div class="contenedor_pedidoDatos">
                            <p>Producto: <?php echo $fila['nombre'] ?> </p>
                            <p>Descrición: <?php echo $fila['descripcion'] ?> </p>
                        </div>   
                         </section>

                    <section class="seccion_pedidoCompra">
                        <p>Precio: <?php echo $fila['precio'] ?> </p>
                        <p>Cantidad:</p>
                        <input name="urlHidden" type="hidden" value="<?php echo $fila['ulrImagen'] ?>">
                        <input name="nombreHidden" type="hidden" value="<?php echo $fila['nombre'] ?>">
                        <input name="descripcionHidden" type="hidden" value="<?php echo $fila['descripcion'] ?>">
                        <input name="precioHidden" type="hidden" value="<?php echo $fila['precio'] ?>">
                        <input name="cantidad" class="cantidad" type="number" placeholder="Ingrese la cantidad" required>    
                        <input type="submit" name="btnCalculoPedido" class="btnCalculoPedido" value="Calcular Total">         
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
                            <img src="<?php echo $url ?>">
                            </div>
                        </div>
                        <div class="contenedor_pedidoDatos">
                            <p>Producto: <?php echo $nombre ?> </p>
                            <p>Descrición: <?php echo $descripcion ?> </p>
                        </div>   
                         </section>

                    <section class="seccion_pedidoCompra">
                        <p>Precio: <?php echo $precio ?> </p>
                        <p>Cantidad: <?php echo $cantidad ?></p>
            <p>SubTotal: <?php echo $subTotal ?></p>
            <p>IGV: 18%</p>
            <p>Total: <?php echo $Total?> </p>
            
            <button class="btnRealizarCompra">
                <a href="./VistaCompraRealizada.php">Realizar Compra</a>
            </button>
            <?php
                }
            ?> 
              
           <button>
               <a href="./VistaPrincipal.php">Volver</a>
           </button>
        </section>
    </article>
                 
</body>
</html>