<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra</title>

</head>
<body>
    <h1>COMPRAS</h1>
    <article>
        <section class="seccion_pedido">
            <div class="contenedor_pedido">
                <div>
                    <form method="POST" action="">
                        <input type="hidden" value="idProducto">
                        <p>Observe su pedido :)</p>
                            <div>
                                <img src="" alt="">
                            </div>
                        <p>Nombre producto: </p>
                        <p>Precio </p>
                        <p>Cantidad a comprar:</p>
                        <p>Total</p>
                        <div>
                            <input type="submit" value="Enviar">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    
        <section class="seccion_pedido">
            <div class="contenedor_pedido">
                <div>
                    <img src="" alt="">
                </div>
            <div>
                <form method="POST" action="">
                    <input type="hidden" value="idProducto">
                    <p>Resumen del pedido:</p>
                    <p>SubTotal: </p>
                    <p>IGV: </p>
                    <p>Total: </p>
                    <div>
                        <input type="submit" value="Enviar pedido">
                    </div>
                    <p>Gracias por su compra!</p>
                </form>
        </section>
    </article>       
</body>
</html>